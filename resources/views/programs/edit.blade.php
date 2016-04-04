@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Edit a program ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>Edit a Program
            <div class="pull-right">
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

        <!-- Form -->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'PUT', 'route' => array('programs.update', $program->id))) !!}
        {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'name', 'label' => 'Name', 'value' => $program->name],
            ['type' => 'text','name'=>'slug', 'label' => 'Nickname', 'value' => $program->slug],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'alternative_names', 'label' => 'Alternative Names', 'element_width' => 10, 'value' => $program->alternative_names],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'textarea', 'name'=>'description', 'label' => 'Description', 'element_width' => 10, 'value' => $program->description],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

        {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

        {!! Form::close() !!}
    </div>
    </div>
@stop