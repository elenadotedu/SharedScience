@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Edit a registration ::
    @parent
@stop

@section('content')
    <div class="page-header">
        <h3>Edit a Registration
            <div class="pull-right">
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'PUT', 'route' => array('registrations.update', $registration->id))) !!}
        {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'participant_name', 'label' => 'Participant', 'value' => $registration->participant->first_name.' '.$registration->participant->last],
            ['type' => 'view','name'=>'session', 'label' => 'Session', 'value' => $registration->session->program->slug.' '.$registration->session->school->slug.' '.$registration->session->start_date],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'balance', 'label' => 'Balance', 'value' => $registration->balance],
            ['type' => 'text','name'=>'active_fee_paid', 'label' => 'Active Fee Paid', 'value' => $registration->active_fee_paid],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'discount', 'label' => 'Discount', 'value' => $registration->discount],
            ['type' => 'text','name'=>'paid', 'label' => 'Paid', 'value' => $registration->paid],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'grade', 'label' => 'Grade', 'value' => $registration->grade],
            ['type' => 'select','name'=>'status_id', 'label' => 'Status', 'list' => $registration_status_list, 'value' => $registration->status_id],
            ], $errors) !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop


