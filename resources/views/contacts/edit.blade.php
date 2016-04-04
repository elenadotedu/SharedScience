@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Edit a contact ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>Edit a contact
            <div class="pull-right">
                <a href="{{route('contacts.index')}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

        <!-- Form -->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'PUT', 'route' => array('contacts.update', $contact->id))) !!}
        {!! csrf_field() !!}

        {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

        {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'first_name', 'label' => 'First Name', 'placeholder' => 'First Name', 'value' => $contact->first_name],
            ['type' => 'text','name'=>'last_name', 'label' => 'Last Name', 'placeholder' => 'Last Name', 'value' => $contact->last_name],
            ], $errors) !!}

        {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'email', 'label' => 'Email', 'element_width' => 4, 'value' => $contact->email],
            ['type' => 'date', 'name'=>'date_of_birth', 'label' => 'Date Of Birth', 'placeholder' => '00-00-0000', 'value' => $contact->date_of_birth],
            ], $errors) !!}

        {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'home_phone', 'label' => 'Home Phone', 'value' => $contact->home_phone],
             ['type' => 'text', 'name'=>'business_phone', 'label' => 'Business Phone', 'value' => $contact->business_phone],
             ], $errors) !!}

                <!--Address - Street and Unit Nos.-->
            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'address[address1]', 'label' => 'Address', 'element_width' => 8, 'value' => $contact->address->address1],
             ['type' => 'text', 'name'=>'address[address2]', 'element_width' => 2, 'value' => $contact->address->address2],
             ], $errors) !!}

            <!--City, State Zip-->
            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'address[city]', 'label' => 'City', 'element_width' => 4, 'placeholder' => 'City', 'value' => $contact->address->city],
             ['type' => 'stateSelect', 'name'=>'address[state]', 'element_width' => 3, 'value' => $contact->address->state],
             ['type' => 'text', 'name'=>'address[zip]', 'element_width' => 3, 'placeholder' => 'Zip Code', 'value' => $contact->address->zip],
             ], $errors) !!}

            <!--Role-->
            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'role', 'label' => 'Role', 'element_width' => 10, 'value' => $contact->role],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! ViewHelper::sectionStart('panel-default', 'Additional Information') !!}

            <!--Notes-->
            {!! ViewHelper::formGroup([
             ['type' => 'textarea', 'name'=>'note', 'label' => 'Notes', 'element_width' => 10, 'placeholder' => 'Notes', 'value' => $contact->note],
             ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! Form::close() !!}

            </div>
        </div>
@stop

@section('body_bottom')

@stop

