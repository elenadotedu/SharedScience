@extends('layouts.app')

{{-- Page title --}}
@section('title')
    View a contact ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>View a contact
            <div class="pull-right">
                <a href="{{route('contacts.edit', array($contact->id))}}" class="btn btn-small btn-info">Edit</a>
                <a href="{{route('contacts.index')}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'GET', 'route' => array('contacts.store'))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

                <!--First and Last Name-->
                {!! ViewHelper::formGroup([
                ['type' => 'view', 'name'=>'first_name', 'label' => 'First Name', 'placeholder' => 'First Name', 'value' => $contact->first_name],
                ['type' => 'view','name'=>'last_name', 'label' => 'Last Name', 'placeholder' => 'Last Name', 'value' => $contact->last_name],
                ], $errors) !!}

                    {!! ViewHelper::formGroup([
                ['type' => 'view', 'name'=>'email', 'label' => 'Email', 'element_width' => 4, 'value' => $contact->email],
                ['type' => 'view', 'name'=>'date_of_birth', 'label' => 'Date Of Birth', 'placeholder' => '00-00-0000', 'value' => $contact->date_of_birth],
                ], $errors) !!}

                {!! ViewHelper::formGroup([
                     ['type' => 'view', 'name'=>'home_phone', 'label' => 'Home Phone', 'value' => $contact->home_phone],
                     ['type' => 'view', 'name'=>'business_phone', 'label' => 'Business Phone', 'value' => $contact->business_phone],
                     ], $errors) !!}

                <!--Address - Street and Unit Nos.-->
                {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'address[address1]', 'label' => 'Address', 'element_width' => 4, 'value' => $contact->address->address1],
                 ['type' => 'view', 'name'=>'address[address2]', 'label' => 'Unit No.', 'element_width' => 4, 'value' => $contact->address->address2],
                 ], $errors) !!}

                        <!--City, State Zip-->
                {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'address[city]', 'label' => 'City', 'element_width' => 4, 'placeholder' => 'City', 'value' => $contact->address->city.' '.$contact->address->state],
                 ['type' => 'view', 'name'=>'address[zip]', 'label' => 'Zip', 'element_width' => 3, 'placeholder' => 'Zip Code', 'value' => $contact->address->zip],
                 ], $errors) !!}

                <!--Role-->
                {!! ViewHelper::formGroup([
                ['type' => 'view', 'name'=>'role', 'label' => 'Role', 'element_width' => 10, 'value' => $contact->role],
                ], $errors) !!}

                {!! ViewHelper::sectionEnd() !!}

                {!! ViewHelper::sectionStart('panel-default', 'Additional Information') !!}

                        <!--Notes-->
                {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'note', 'label' => 'Notes', 'element_width' => 10, 'placeholder' => 'Notes', 'value' => $contact->note],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop
@section('body_bottom')
@stop