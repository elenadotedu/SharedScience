<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Address;
use App\School;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get contacts except those attached to participants
        $contacts = Contact::get();
        return view("contacts.index", compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $params = $request->all();

        return view("contacts.create", compact('params'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);

        $input = array_except($request->all(), ['_token', 'params']);
        $params = $request->all()['params'];

        $address = Address::create($input['address']);

        $contact = Contact::create(['address_id' => $address->id] + array_except($input, 'address'));

        // if there is school id, attach contact to school
        if (array_key_exists('school_id', $params) && $params['school_id'])
        {
            $school = School::find($params['school_id']);

            $school->contacts()->attach($contact->id);

            return redirect(route('schools.show', $school->id))->with('success', 'Contact created.');
        }

        return redirect('contacts')->with('success', 'Contact created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return view("contacts.show", compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view("contacts.edit", compact('contact'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);

        $input = array_except($request->all(), '_token');

        $contact = Contact::find($id);
        $contact->address()->update($input['address']);
        $contact->update(array_except($input, 'address'));

        return redirect('contacts')->with('success', 'Contact updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();

        //go back to the contact list, but display message
        return back()->with("success", "Contact deleted");
    }
}
