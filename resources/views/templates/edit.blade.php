@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Edit a template ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>Edit a Template
            <div class="pull-right">
                <a href="{{route('templates.index')}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'PUT', 'route' => array('templates.update', $template->id))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'name', 'label' => 'Name', 'element_width' => 10, 'value' => $template->name],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'textarea', 'name'=>'content', 'label' => 'Content', 'element_width' => 10, 'value' => $template->content],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop