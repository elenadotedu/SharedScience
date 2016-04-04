@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Select report type ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Select Report Type</h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'route' => array('reports.pre_store'))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'select', 'name'=>'record_id', 'label' => 'Record Type', 'list' => $record_list],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop