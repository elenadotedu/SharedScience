@extends('layouts.app')

@section('content')

    <div class="page-header">
        <h3>Pre-Register a user</h3>
    </div>

    <div class="row">
        <!--This is the start of the form field-->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'route' => array('users.store'))) !!}
        {!! csrf_field() !!}

        {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

        {!! ViewHelper::formGroup([
        ['type' => 'text', 'name'=>'first_name', 'label' => 'First Name'],
        ['type' => 'text', 'name'=>'last_name', 'label' => 'Last Name'],
        ], $errors) !!}

        {!! ViewHelper::formGroup([
        ['type' => 'text', 'name'=>'email', 'label' => 'Email', 'element_width' => 10],
        ], $errors) !!}

        {!! ViewHelper::formGroup([
        ['type' => 'select', 'name'=>'role', 'label' => 'Role', 'list' => $role_list, 'element_width' => 10],
        ], $errors) !!}

        {!! ViewHelper::sectionEnd() !!}

        {!! Form::submit('Pre-Register', array('class' => 'btn btn-small btn-info')) !!}

        {!! Form::close() !!}

    </div>

@endsection

@section('body_bottom')
@endsection
