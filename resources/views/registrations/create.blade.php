@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Register a participant ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Register
            <div class="pull-right">
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'route' => array('registrations.store'))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            <!-- Session -->
            {!! ViewHelper::formGroup([
            ['type' => 'select', 'name'=>'participant_id', 'label' => 'Participant', 'list' => $participant_list, 'params' => $params],
            ['type' => 'select', 'name'=>'session_id', 'label' => 'Session', 'list' => $session_list],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'balance', 'label' => 'Balance', 'params' => $params],
            ['type' => 'text','name'=>'active_fee_paid', 'label' => 'Active Fee Paid', 'params' => $params],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'discount', 'label' => 'Discount', 'params' => $params],
            ['type' => 'text','name'=>'paid', 'label' => 'Paid'],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'grade', 'label' => 'Grade'],
            ['type' => 'select', 'name' => 'status', 'select'=>'status', 'label' => 'Status', 'list' => $registration_status_list],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop