<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\School;
use App\Address;
use App\Contact;
use DB;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::get();
        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required|unique:schools'
        ]);

        $input = array_except($request->all(), '_token');

        $address = Address::create($input['address']);

        $school = School::create(['address_id' => $address->id] + array_except($input, 'address'));

        return redirect('schools')->with('success', 'School created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::find($id);

        $contact_list = [''=>''] + Contact::select('id', DB::raw('CONCAT(first_name, " ", last_name) AS name') )->lists('name', 'id')->all();

        return view('schools.show', compact('school', 'contact_list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = School::find($id);

        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required|unique:schools,slug,'.$id
        ]);

        $input = array_except($request->all(), '_token');

        $school = School::find($id);

        $school->address()->update($input['address']);

        $school->update(array_except($input, 'address'));

        return redirect('schools')->with('success', 'School updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::find($id);

        $school->delete();

        //go back to the school list, but display message
        return back()->with('success', 'School deleted');
    }

    public function attach_contact(Request $request, $school_id)
    {
        $input = array_only($request->all(), 'contact_id');

        // attach contact to school
        $school = School::find($school_id);

        $exists = $school->contacts->contains($input['contact_id']);

        if(!$school->contacts->contains($input['contact_id']))
        {
            $school->contacts()->attach($input['contact_id']);

            return back()->with('success', 'Contact Attached.');
        }
        else
        {
            return back()->with('warning', 'Contact Already Attached.');
        }
    }

    public function detach_contact($school_id, $contact_id)
    {
        // detach contact from school
        $school = School::find($school_id);

        $school->contacts()->detach($contact_id);

        return back()->with('success', 'Contact Detached');
    }
}
