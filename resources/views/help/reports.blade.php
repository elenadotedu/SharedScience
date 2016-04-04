@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Participants ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h1> Reports</h1>
        <p>Reports allow to query the database in a variety of ways. It might be helpful to learn about database tables, joins and queries in order to understand how reports work better.</p>
    </div>

    <div>
        <h3>Record</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Before creating any report, you first must select a record, to which this report corresponds. Record is also a database table,
                which will be queried. For example, if you wish to find contacts, with non-empty emails, record will be Contacts. </p>
                <p><strong>Participants</strong> record includes everything regarding the participant including their emergency contacts, parent/guardians etc. except for any information regarding sessions and registrations.</p>
                <p><strong>Contacts</strong> record includes information about various contacts, such as their emails, names, addresses etc. Note that participants are also contacts.</p>
                <p><strong>Programs</strong> record includes simple information about programs, such as name, description etc.</p>
                <p><strong>Schoools</strong> record has information about school contact information etc.</p>
                <p><strong>Sessions</strong> record has information about sessions, schools, where these sessions take place etc. It doesn't have information regarding participants.</p>
                <p><strong>Registrations</strong> record has information about Participants and Sessions together as well as amounts paid by participants. Use it to find participants registered for specific programs etc.</p>
        </div></div>

        <h3>Filters</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Filters allows to narrow down the list of results. For example, if you only want to see Participants, whose email is not empty, you would select a filter: Email, not empty. </p>
        </div></div>

        <h3>Selects</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Selects allows you to choose what kind of information to display. For example, if you only wish participant's First Name, you would only select "First Name" in selects. . </p>
        </div></div>

        <h3>Creating a Sign In Sheet</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <ol>
                    <li>Pick the record. Sign In sheet includes data from participants (such as their name) and sessions (such as start time). Record that has both is registrations, so pick <strong>Registrations</strong> from the dropdown.</li>
                    <li>Click <strong>Next</strong></li>
                    <li>Select your <strong>filters</strong>. The only criteria for a sign in sheet is that Participants be registred in a specific session, so pick Session from the dropdown and select which session you would like.</li>
                    <li>Pick your <strong>selects</strong>. This is all the information that will be on the sign in sheet, which is Participant First Name, Participant Last Name, Program Name, Session Start Time, Session End Time, Session Start Date, Session End Date and each of Session dates.</li>
                    <li>In the Look tab select <strong>template Sign-In-Sheet</strong>.</li>
                    <li>If you want to save this for future use, click <strong>Save</strong>.</li>
                    <li>Otherwise, click <strong>Run</strong>.</li>
                </ol>
                </div></div>
    </div>
@stop