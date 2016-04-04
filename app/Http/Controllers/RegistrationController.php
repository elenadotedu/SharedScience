<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registration;
use App\Participant;
use App\Session;
use App\RegistrationStatus;
use DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Register a specific participant in a session.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $params = $request->all();

        $participant_list = Participant::join('contacts', 'participants.contact_id', '=', 'contacts.id')
            ->select('participants.id', DB::raw('CONCAT(contacts.first_name, " ", contacts.last_name) AS name'))
            ->lists('name', 'id');

        $session_list = self::__getCurrentSessionList();

        $registration_status_list = ['' => ''] + RegistrationStatus::lists('name', 'id')->all();

        return view('registrations.create', compact('params', 'participant_list', 'session_list', 'registration_status_list'));
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

        //check if this participant has been already registered for this session
        $duplicate = Registration::where('session_id', $input['session_id'])
            ->where('participant_id', $input["participant_id"])->get();

        //if there is already a registration with the same participant and session id
        if (count($duplicate) > 0)
        {
            return back() ->with('warning', 'This participant is already registered for this session.');
        }
        else {
            Registration::create($input);
            return back()->with('success', 'Registered a participant.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registration = Registration::find($id);
        return view('registrations.show', compact('registration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registration_status_list = ['' => ''] + RegistrationStatus::lists('name', 'id')->all();
        $registration = Registration::find($id);
        return view('registrations.edit', compact('registration', 'registration_status_list'));
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

        $registration = Registration::find($id);

        $registration->update($input);

        return redirect('sessions/'.$registration->session_id)->with('success', 'Registration updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registration = Registration::find($id);

        $registration->delete();

        //go back to the registration list, but display message
        return back()->with("success", "Registration deleted");
    }

    protected function __getCurrentSessionList()
    {
        $sessionList = array();

        //get sesions that didn't end yet
        $sessions = Session::whereDate('end_date', '>', date('Y-m-d'))->get();

        //make an array of type [1 => "John Smith", ...]
        foreach($sessions as $session)
        {
            if ($session->program)
                $sessionList[$session->id] = $session->program->name." ".$session->startDate;
            else
                $sessionList[$session->id] = $session->id." ".$session->startDate;
        }

        return $sessionList;
    }
}
