<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Participant;
use App\Contact;
use App\School;
use App\Family;
use App\Ethnicity;
use App\GenderLookup;
use App\Registration;
use App\Address;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants = Participant::get();
        return view('participants.index', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact_list = ['' => ''] + Contact::select('id', DB::raw('CONCAT(first_name," ",last_name) AS name'))->lists('name', 'id')->all();
        $school_list = ['' => ''] + School::lists('name', 'id')->all();
        $family_list = ['' => ''] + Family::lists('name', 'id')->all();
        $ethnicity_list = ['' => ''] + Ethnicity::lists('name', 'id')->all();
        $gender_list = ['' => ''] + GenderLookup::lists('name', 'code')->all();

        return view('participants.create', compact('contact_list', 'school_list', 'family_list', 'ethnicity_list', 'gender_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = array_except($request->all(), '_token');

        $this->validate($request, [
            'emergency_contact1_id' => 'required'
        ]);

        $address = Address::create([]);

        $contact = Contact::create(['address_id' => $address->id] + $input['contact']);

        $participant = Participant::create([
                'contact_id' => $contact->id,
            ] + array_except($input, 'contact'));

        return redirect('participants')->with('success', 'Participant created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participant = Participant::find($id);

        return view('participants.show', compact('participant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participant = Participant::find($id);

        // all contacts except the one attached to current participant
        $contact_list = ['' => ''] + Contact::select('id', DB::raw('CONCAT(first_name, " ", last_name) AS name'))
                ->where('id','<>',$participant->contact->id)
                ->lists('name', 'id')->all();

        $school_list = ['' => ''] + School::lists('name', 'id')->all();;
        $family_list = ['' => ''] + Family::lists('name', 'id')->all();
        $ethnicity_list = ['' => ''] + Ethnicity::lists('name', 'id')->all();;
        $gender_list = ['' => ''] + GenderLookup::lists('name', 'code')->all();

        return view('participants.edit', compact('participant', 'contact_list', 'school_list', 'family_list', 'ethnicity_list', 'gender_list'));
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
        $input = array_except($request->all(), '_token');

        $participant = Participant::find($id);

        $participant->contact->update($input['contact']);

        $participant->update(array_except($input, 'contact'));

        return redirect('participants')->with('success', 'Participant updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $participant = Participant::find($id);

        $participant->delete();

        //go back to the participant list, but display message
        return back()->with('success', 'Participant deleted');
    }
}
