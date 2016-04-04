@extends('layouts.app')

{{-- Page title --}}
@section('title')
    View a school ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>School
            <div class="pull-right">
                <a href="{{ route('schools.edit', array($school->id) ) }}" class="btn btn-small btn-info">Edit</a>
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'GET', 'route' => array('schools.store'))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'name', 'label' => 'Name', 'value' => $school->name],
            ['type' => 'view','name'=>'slug', 'label' => 'Nickname', 'value' => $school->slug],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'alternative_names', 'label' => 'Alternative Names', 'element_width' => 10, 'value' => $school->alternative_names],
            ], $errors) !!}


            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'email', 'label' => 'Email', 'value' => $school->email],
            ['type' => 'view','name'=>'phone', 'label' => 'Phone', 'value' => $school->phone],
            ], $errors) !!}

                    <!--Address - Street and Unit Nos.-->
            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'address[address1]', 'label' => 'Address', 'value' => $school->address? $school->address->address1: ''],
             ['type' => 'view', 'name'=>'address[address2]', 'label' => 'Unit No.', 'value' => $school->address? $school->address->address2: ''],
             ], $errors) !!}

                    <!--City, State Zip-->
            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'address[city]', 'label' => 'City', 'placeholder' => 'City', 'value' => ($school->address? $school->address->city: '').' '.($school->address? $school->address->state:'')],
             ['type' => 'view', 'name'=>'address[zip]', 'label' => 'Zip Code', 'value' => $school->address? $school->address->zip: ''],
             ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Additional Information') !!}

                    <!--Notes-->
            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'note', 'label' => 'Notes', 'element_width' => 10, 'placeholder' => 'Notes', 'value' => $school->note],
             ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}


            {!! Form::close() !!}
        </div>
        </div>

        <div class="row">
            <div class="col-lg-12">

            {!! ViewHelper::tabs([

            /*Current sessions*/
            [
            'id' => 'current-sessions-tab',
            'label' => 'Current Sessions',
            'active' => true,
            'create_route' => route('sessions.create').'?school_id='.$school->id,
            'content' =>
            ViewHelper::recordList('sessions', $school->currentSessions, [
                'Program' => function($session) { return $session->program? $session->program->name: ''; },
                'Start Date' => function($session) { return $session->start_date; },
                'End Date' => function($session) { return $session->end_date; },
            ])],

            /*All sessions*/
            [
            'id' => 'all-sessions-tab',
            'label' => 'All Sessions',
            'active' => false,
            'create_route' => route('sessions.create').'?school_id='.$school->id,
            'content' =>
            ViewHelper::recordList('sessions', $school->sessions, [
                'Program' => function($session) { return $session->program? $session->program->name: ''; },
                'Start Date' => function($session) { return $session->start_date; },
                'End Date' => function($session) { return $session->end_date; },
            ])],

            /*Contacts*/
            [
            'id' => 'contacts-tab',
            'label' => 'Contacts',
            'active' => false,
            'create_route' => route('contacts.create').'?school_id='.$school->id,
            'content' =>
            Form::open(['class' => 'form-horizontal', 'method' => 'POST', 'route' => ['schools.contacts.attach', $school->id]]).
            ViewHelper::formGroup([
                ['type' => 'select', 'name'=> 'contact_id', 'label' => 'Contact', 'list' => $contact_list],
            ], $errors).
            ViewHelper::submitButton('Attach').
            Form::close().
            ViewHelper::attachedRecordList('schools', 'contacts', $school->id, $school->contacts, [
                'First Name' => function($contact) { return $contact->first_name; },
                'Last Name' => function($contact) { return $contact->last_name; },
                'Role' => function($contact) { return $contact->role; },
            ])],

            ]) !!}

        </div>
        </div>
@stop