@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Create a participant ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Available Templates
            <div class="pull-right">
                <a href="{{route('templates.create')}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
            </div>
        </h3>
    </div>

    {!! ViewHelper::recordList('templates', $templates, [
    'ID' => function($template) {return $template->id;},
    'Name' => function($template) {return $template->name;},
    'Created' => function($template) {return $template->created_at;},
    ]) !!}
@stop