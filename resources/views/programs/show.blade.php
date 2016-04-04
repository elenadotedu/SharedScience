@extends('layouts.app')

{{-- Page title --}}
@section('title')
    View a program ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>View a Program
            <div class="pull-right">
                <a href="{{ route('programs.edit', array($program->id) ) }}" class="btn btn-small btn-info">Edit</a>
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'GET', 'route' => array('programs.store'))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'name', 'label' => 'Name', 'value' => $program->name],
            ['type' => 'view','name'=>'slug', 'label' => 'Nickname', 'value' => $program->slug],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'alternative_names', 'label' => 'Alternative Names', 'element_width' => 10, 'value' => $program->alternative_names],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'description', 'label' => 'Description', 'element_width' => 10, 'value' => $program->description],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::close() !!}

            </div>

            <div class="row">

                {!! ViewHelper::tabs([

                /*Current sessions*/
                [
                'id' => 'current-sessions-tab',
                'label' => 'Current Sessions',
                'active' => true,
                'create_route' => route('sessions.create').'?program_id='.$program->id,
                'content' =>
                ViewHelper::recordList('sessions', $program->currentSessions, [
                    'School' => function($session) { return $session->school->name; },
                    'Start Date' => function($session) { return $session->start_date; },
                    'End Date' => function($session) { return $session->end_date; },
                ])],

                /*All sessions*/
                [
                'id' => 'all-sessions-tab',
                'label' => 'All Sessions',
                'active' => false,
                'create_route' => route('sessions.create').'?program_id='.$program->id,
                'content' =>
                ViewHelper::recordList('sessions', $program->sessions, [
                    'School' => function($session) { return $session->school->name; },
                    'Start Date' => function($session) { return $session->start_date; },
                    'End Date' => function($session) { return $session->end_date; },
                ])],

                ]) !!}

        </div>
@stop