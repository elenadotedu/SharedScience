@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Edit a participant ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>Edit a Participant
            <div class="pull-right">
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

        <!-- Form -->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'PUT', 'route' => array('participants.update', $participant->id))) !!}
        {!! csrf_field() !!}

        {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

        {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'contact[first_name]', 'label' => 'First Name', 'value' => $participant->first_name],
            ['type' => 'text','name'=>'contact[last_name]', 'label' => 'Last Name', 'value' => $participant->last_name],
            ], $errors) !!}

        {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'contact[email]', 'label' => 'Email', 'element_width' => 10, 'value' => $participant->email],
            ], $errors) !!}

        {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'contact[home_phone]', 'label' => 'Home Phone', 'value' => $participant->home_phone],
             ['type' => 'text', 'name'=>'contact[business_phone]', 'label' => 'Business Phone', 'value' => $participant->business_phone],
             ], $errors) !!}

        {!! ViewHelper::formGroup([
             ['type' => 'select', 'name'=>'family_id', 'label' => 'Family', 'list' => $family_list, 'value' => $participant->family_id],
             ['type' => 'date', 'name'=>'contact[date_of_birth]', 'label' => 'Date Of Birth', 'placeholder' => '00-00-0000', 'value' => $participant->date_of_birth],
             ], $errors) !!}

        {!! ViewHelper::formGroup([
            ['type' => 'select', 'name'=>'ethnicity_id', 'label' => 'Ethnicity', 'list' => $ethnicity_list, 'value' => $participant->ethnicity_id],
            ['type' => 'select', 'name'=>'gender', 'label' => 'Gender', 'list' => $gender_list, 'value' => $participant->gender],
            ], $errors) !!}

                <!-- School -->
            {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'school_id', 'label' => 'School', 'list' => $school_list, 'element_width' => 10, 'value' => $participant->school_id],
                ], $errors) !!}

        {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Emergency Contact 1') !!}

                    <!-- Emergency Contact 1-->
            {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'emergency_contact1_id', 'label' => 'Contact', 'list' => $contact_list, 'value' => $participant->emergency_contact1_id],
                ['type' => 'text', 'name'=>'emergency_contact1_relationship', 'label' => 'Role', 'value' => $participant->emergency_contact1_relationship],
                ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Emergency Contact 2') !!}

                    <!-- Emergency Contact 2-->
            {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'emergency_contact2_id', 'label' => 'Contact', 'list' => $contact_list, 'value' => $participant->emergency_contact2_id],
                ['type' => 'text', 'name'=>'emergency_contact2_relationship', 'label' => 'Role', 'value' => $participant->emergency_contact2_relationship],
                ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Parent / Guardian') !!}

                    <!-- Primary Parent/Guardian -->
            {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'primary_pg_id', 'label' => 'Primary Parent / Guardian', 'list' => $contact_list, 'element_width' => 10, 'value' => $participant->primary_pg_id],
                ], $errors) !!}

                    <!-- Secondary Parent / Guardian -->
            {!! ViewHelper::formGroup([
                 ['type' => 'select', 'name'=>'secondary_pg_id', 'label' => 'Secondary Parent / Guardian', 'list' => $contact_list, 'element_width' => 10, 'value' => $participant->secondary_pg_id],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

        {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

        {!! Form::close() !!}
    </div>
    </div>
@stop