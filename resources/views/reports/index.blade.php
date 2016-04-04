@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Reports ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Reports
            <div class="pull-right">
                <a href="{{route('reports.pre_create')}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
            </div>
        </h3>
    </div>

    {!! ViewHelper::recordList('reports', $reports, [
    'ID' => function($report) {return $report->id;},
    'Name' => function($report) {return $report->name;},
    'Type' => function($report) {return $report->record->name;},
    'Template' => function($report) {return $report->template->name;},
    'Date Created' => function($report) {return $report->created_at;},
    ], ['edit', 'destroy']) !!}

@stop