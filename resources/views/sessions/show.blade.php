@extends('layouts.app')

{{-- Page title --}}
@section('title')
    View a session ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>View a Session
            <div class="pull-right">
                <a href="{{ route('sessions.edit', array($session->id) ) }}" class="btn btn-small btn-info">Edit</a>
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <!-- Form -->
    {!! Form::open(array('class' => 'form-horizontal', 'method' => 'GET', 'route' => array('sessions.store'))) !!}
        {!! csrf_field() !!}

    {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

    {!! ViewHelper::formGroup([
    ['type' => 'view', 'name'=>'program_id', 'label' => 'Program', 'value' => $session->program->name],
    ['type' => 'view', 'name'=>'school_id', 'label' => 'School', 'value' => $session->school->name],
    ], $errors) !!}

    {!! ViewHelper::formGroup([
    ['type' => 'view', 'name'=>'start_date', 'label' => 'Start Date', 'value' => $session->start_date],
    ['type' => 'view', 'name'=>'end_date', 'label' => 'End Date', 'value' => $session->end_date],
    ], $errors) !!}

    {!! ViewHelper::formGroup([
            ['type' => 'time', 'name'=>'start_time', 'label' => 'Start Time', 'value' => $session->start_time],
            ['type' => 'time', 'name'=>'end_time', 'label' => 'End Time', 'value' => $session->end_time],
            ], $errors) !!}

    {!! ViewHelper::sectionEnd() !!}

    {!! ViewHelper::sectionStart('panel-default', 'Dates') !!}

    {!! ViewHelper::formGroup([
    ['type' => 'view', 'name'=>'date1', 'label' => 'Date 1', 'value' => $session->date1],
    ['type' => 'view', 'name'=>'date2', 'label' => 'Date 2', 'value' => $session->date2],
    ], $errors) !!}

    {!! ViewHelper::formGroup([
    ['type' => 'view', 'name'=>'date3', 'label' => 'Date 3', 'value' => $session->date3],
    ['type' => 'view', 'name'=>'date4', 'label' => 'Date 4', 'value' => $session->date4],
    ], $errors) !!}

    {!! ViewHelper::formGroup([
    ['type' => 'view', 'name'=>'date5', 'label' => 'Date 5', 'value' => $session->date5],
    ['type' => 'view', 'name'=>'date6', 'label' => 'Date 6', 'value' => $session->date6],
    ], $errors) !!}

    {!! ViewHelper::formGroup([
    ['type' => 'view', 'name'=>'date7', 'label' => 'Date 7', 'value' => $session->date7],
    ['type' => 'view', 'name'=>'date8', 'label' => 'Date 8', 'value' => $session->date8],
    ], $errors) !!}

    {!! ViewHelper::formGroup([
    ['type' => 'view', 'name'=>'date9', 'label' => 'Date 9', 'value' => $session->date9],
    ['type' => 'view', 'name'=>'date10', 'label' => 'Date 10', 'value' => $session->date10],
    ], $errors) !!}

    {!! ViewHelper::sectionEnd() !!}
    
    {!! Form::close() !!}

    <div class="row">

        <ul class="nav nav-tabs nav-tabs-blue">
            <li class="active"><a href="#registrations-tab" data-toggle="tab">Participants (Registrations) <i class="fa"></i></a></li>
        </ul>
        <!--
        ===================================================
        REGISTRATIONS
        ====================================================
        -->
        <div class="tab-content">
            <div class="tab-pane active" id="registrations-tab">
                <!-- Table -->
                <table id="object_list" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Balance</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($session->registrations as $registration)
                        <tr>
                            <?php
                            //check if program is not empty
                            $name = "";
                            $participant = $registration->participant;
                            if ($participant)
                            {
                                $participantContact = $participant->contact;

                                if ($participantContact)
                                {
                                    $name = $participantContact->first_name." ".$participantContact->last_name;
                                }
                            }

                            ?>
                            <td>{{$registration->id}}</td>
                            <td>{{$name}}</td>
                            <td>{{FormatHelper::currency($registration->balance)}}</td>
                            <td><a title="View" class="btn btn-small btn-info" href="{{ route('registrations.show', array($registration->id) ) }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                            <td><a title="Edit" class="btn btn-small btn-info" href="{{ route('registrations.edit', array($registration->id) ) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                            <td><a title="Delete" class="btn btn-small btn-info" href="{{ route('registrations.destroy', array($registration->id) ) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
    </div>
@stop
