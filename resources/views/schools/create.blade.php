@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Create a school ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>Create a School
            <div class="pull-right">
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'route' => array('schools.store'))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'name', 'label' => 'Name'],
            ['type' => 'text','name'=>'slug', 'label' => 'Nickname'],
            ], $errors) !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'alternative_names', 'label' => 'Alternative Names', 'element_width' => 10],
            ], $errors) !!}


            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'email', 'label' => 'Email'],
            ['type' => 'text','name'=>'phone', 'label' => 'Phone'],
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

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Additional Information') !!}

                    <!--Notes-->
            {!! ViewHelper::formGroup([
             ['type' => 'textarea', 'name'=>'note', 'label' => 'Notes', 'element_width' => 10],
             ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! Form::close() !!}
    </div>
    </div>
@stop