@extends('layouts.app')

{{-- Page title --}}
@section('title')
    View a registration ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>View a Registration
            <div class="pull-right">
                <a href="{{ route('registrations.edit', array($registration->id) ) }}" class="btn btn-small btn-info">Edit</a>
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'GET', 'route' => array('registrations.store'))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'participant_name', 'label' => 'Participant', 'link' => route('participants.show', array($registration->participant->id)), 'value' => $registration->participant->first_name.' '.$registration->participant->last_name],
            ['type' => 'view','name'=>'session', 'label' => 'Session', 'link' => route('sessions.show', array($registration->session->id)), 'value' => $registration->session->program->slug.' '.$registration->session->school->slug.' '.$registration->session->start_date],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'balance', 'label' => 'Balance', 'value' => FormatHelper::currency($registration->balance)],
            ['type' => 'view','name'=>'active_fee_paid', 'label' => 'Active Fee Paid', 'value' => FormatHelper::currency($registration->active_fee_paid)],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'discount', 'label' => 'Discount', 'value' => FormatHelper::currency($registration->discount)],
            ['type' => 'view','name'=>'paid', 'label' => 'Paid', 'value' => FormatHelper::currency($registration->paid)],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'grade', 'label' => 'Grade', 'value' => $registration->grade],
            ['type' => 'view','name'=>'status', 'label' => 'Status', 'value' => ($registration->status? $registration->status->name: '')],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::close() !!}
        </div>
    </div> <!-- end of row-->
@stop