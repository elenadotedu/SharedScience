@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Create a participant ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Create a Participant
            <div class="pull-right">
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'route' => array('participants.store'))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'contact[first_name]', 'label' => 'First Name'],
            ['type' => 'text','name'=>'contact[last_name]', 'label' => 'Last Name'],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
                ['type' => 'text', 'name'=>'contact[email]', 'label' => 'Email', 'element_width' => 10],
                ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'contact[home_phone]', 'label' => 'Home Phone'],
                 ['type' => 'text', 'name'=>'contact[business_phone]', 'label' => 'Business Phone'],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'select', 'name'=>'family_id', 'label' => 'Family', 'list' => $family_list],
                 ['type' => 'date', 'name'=>'contact[date_of_birth]', 'label' => 'Date Of Birth', 'placeholder' => '00-00-0000'],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'ethnicity_id', 'label' => 'Ethnicity', 'list' => $ethnicity_list],
                ['type' => 'select', 'name'=>'gender', 'label' => 'Gender', 'list' => $gender_list],
                ], $errors) !!}

                <!-- School -->
            {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'school_id', 'label' => 'School', 'list' => $school_list, 'element_width' => 10],
                ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Emergency Contact 1') !!}

            <!-- Emergency Contact 1-->
            {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'emergency_contact1_id', 'label' => 'Contact', 'list' => $contact_list],
                ['type' => 'text', 'name'=>'emergency_contact1_relationship', 'label' => 'Role'],
                ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Emergency Contact 2') !!}

            <!-- Emergency Contact 2-->
            {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'emergency_contact2_id', 'label' => 'Contact', 'list' => $contact_list],
                ['type' => 'text', 'name'=>'emergency_contact2_relationship', 'label' => 'Role'],
                ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Parent / Guardian') !!}

            <!-- Primary Parent/Guardian -->
            {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'primary_pg_id', 'label' => 'Primary Parent / Guardian', 'list' => $contact_list, 'element_width' => 10],
                ], $errors) !!}

            <!-- Secondary Parent / Guardian -->
            {!! ViewHelper::formGroup([
                 ['type' => 'select', 'name'=>'secondary_pg_id', 'label' => 'Secondary Parent / Guardian', 'list' => $contact_list, 'element_width' => 10],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('body_bottom')
@stop