@extends('layouts.app')

{{-- Page title --}}
@section('title')
    View a template ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>View a Template
            <div class="pull-right">
                <a href="{{ route('templates.edit', array($template->id) ) }}" class="btn btn-small btn-info">Edit</a>
                <a href="{{route('templates.index')}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal')) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'name', 'label' => 'Name', 'element_width' => 10, 'value' => $template->name],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'view', 'name'=>'content', 'label' => 'Content', 'element_width' => 10, 'value' => $template->content],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop