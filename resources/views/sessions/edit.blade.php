@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Edit a session ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>Edit a Session
            <div class="pull-right">
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

        <!-- Form -->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'PUT', 'route' => array('sessions.update', $session->id))) !!}
        {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'select', 'name'=>'program_id', 'label' => 'Program', 'list' => $program_list, 'value' => $session->program_id],
            ['type' => 'select', 'name'=>'school_id', 'label' => 'School', 'list' => $school_list, 'value' => $session->school_id],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'date', 'name'=>'start_date', 'label' => 'Start Date', 'value' => $session->start_date],
            ['type' => 'date', 'name'=>'end_date', 'label' => 'End Date', 'value' => $session->end_date],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'time', 'name'=>'start_time', 'label' => 'Start Time', 'value' => $session->start_time],
            ['type' => 'time', 'name'=>'end_time', 'label' => 'End Time', 'value' => $session->end_time],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Dates') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'date', 'name'=>'date1', 'label' => 'Date 1', 'value' => $session->date1],
            ['type' => 'date', 'name'=>'date2', 'label' => 'Date 2', 'value' => $session->date2],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'date', 'name'=>'date3', 'label' => 'Date 3', 'value' => $session->date3],
            ['type' => 'date', 'name'=>'date4', 'label' => 'Date 4', 'value' => $session->date4],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'date', 'name'=>'date5', 'label' => 'Date 5', 'value' => $session->date5],
            ['type' => 'date', 'name'=>'date6', 'label' => 'Date 6', 'value' => $session->date6],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'date', 'name'=>'date7', 'label' => 'Date 7', 'value' => $session->date7],
            ['type' => 'date', 'name'=>'date8', 'label' => 'Date 8', 'value' => $session->date8],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'date', 'name'=>'date9', 'label' => 'Date 9', 'value' => $session->date9],
            ['type' => 'date', 'name'=>'date10', 'label' => 'Date 10', 'value' => $session->date10],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

        {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

        {!! Form::close() !!}
        </div>
    </div>
@stop