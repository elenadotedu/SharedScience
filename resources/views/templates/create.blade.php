@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Create a template ::
    @parent
@stop


{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Create a Template
            <div class="pull-right">
                <a href="{{route('templates.index')}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'route' => array('templates.store'))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'name', 'label' => 'Name', 'element_width' => 10],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'textarea', 'name'=>'content', 'label' => 'Content', 'element_width' => 10],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! Form::close() !!}
        </div>

    </div>
@stop
