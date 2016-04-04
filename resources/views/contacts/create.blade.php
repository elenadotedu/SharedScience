@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Create a contact ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Create a contact
            <div class="pull-right">
                <a href="{{route('contacts.index')}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!--This is the start of the form field-->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'route' => array('contacts.store'))) !!}
            {!! csrf_field() !!}

            {!! Form::hidden('params[school_id]', (array_key_exists('school_id', $params)? $params['school_id']:'')) !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
                ['type' => 'text', 'name'=>'first_name', 'label' => 'First Name'],
                ['type' => 'text','name'=>'last_name', 'label' => 'Last Name'],
                ], $errors) !!}

            {!! ViewHelper::formGroup([
                ['type' => 'text', 'name'=>'email', 'label' => 'Email', 'element_width' => 4],
                ['type' => 'date', 'name'=>'date_of_birth', 'label' => 'Date Of Birth', 'placeholder' => '00-00-0000'],
                ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'home_phone', 'label' => 'Home Phone'],
                 ['type' => 'text', 'name'=>'business_phone', 'label' => 'Business Phone'],
                 ], $errors) !!}

            <!--Address - Street and Unit Nos.-->
            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'address[address1]', 'label' => 'Address', 'element_width' => 8],
             ['type' => 'text', 'name'=>'address[address2]', 'element_width' => 2],
             ], $errors) !!}

            <!--City, State Zip-->
            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'address[city]', 'label' => 'City', 'element_width' => 4, 'placeholder' => 'City'],
             ['type' => 'stateSelect', 'name'=>'address[state]', 'element_width' => 3],
             ['type' => 'text', 'name'=>'address[zip]', 'element_width' => 3, 'placeholder' => 'Zip Code'],
             ], $errors) !!}

            <!--Role-->
            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'role', 'label' => 'Role', 'element_width' => 10],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Additional Information') !!}

            <!--Notes-->
            {!! ViewHelper::formGroup([
             ['type' => 'textarea', 'name'=>'note', 'label' => 'Notes', 'element_width' => 10, 'placeholder' => 'Notes'],
             ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('body_bottom')
@stop