@extends('layouts.app')

{{-- Page title --}}
@section('title')
    View a participant ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>{{$participant->first_name." ".$participant->last_name}}
            <small>Age {{floor((time() - strtotime($participant->contact->date_of_birth)) / 60 / 60 / 24 / 365)}}</small>
            <div class="pull-right">
                <a href="{{ route('participants.edit', array($participant->id) ) }}" class="btn btn-small btn-info">Edit</a>
                <a href="{{URL::previous()}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>



    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'GET', 'route' => array('participants.index'))) !!}
            {!! csrf_field() !!}


            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

                    {!! ViewHelper::formGroup([
                    ['type' => 'view', 'name'=>'contact[first_name]', 'label' => 'First Name', 'value' => $participant->first_name],
                    ['type' => 'view','name'=>'contact[last_name]', 'label' => 'Last Name', 'value' => $participant->last_name],
                    ], $errors) !!}

                    {!! ViewHelper::formGroup([
                        ['type' => 'view', 'name'=>'contact[email]', 'label' => 'Email', 'element_width' => 10, 'value' => $participant->email],
                        ], $errors) !!}

                    {!! ViewHelper::formGroup([
                     ['type' => 'view', 'name'=>'contact[home_phone]', 'label' => 'Home Phone', 'value' => $participant->home_phone],
                     ['type' => 'view', 'name'=>'contact[business_phone]', 'label' => 'Business Phone', 'value' => $participant->business_phone],
                     ], $errors) !!}


                    {!! ViewHelper::formGroup([
                     ['type' => 'view', 'name'=>'family_id', 'label' => 'Family', 'value' => ($participant->family? $participant->family->name: '')],
                     ['type' => 'view', 'name'=>'contact[date_of_birth]', 'label' => 'Date Of Birth', 'placeholder' => '00-00-0000', 'value' => $participant->date_of_birth],
                     ], $errors) !!}

                    {!! ViewHelper::formGroup([
                    ['type' => 'view', 'name'=>'ethnicity_id', 'label' => 'Ethnicity', 'value' => ($participant->ethnicity? $participant->ethnicity->name: '')],
                    ['type' => 'view', 'name'=>'gender', 'label' => 'Gender', 'value' => $participant->gender],
                    ], $errors) !!}

                    {!! ViewHelper::formGroup([
                    ['type' => 'view', 'name'=>'school_id', 'label' => 'School', 'value' => ($participant->school? $participant->school->name: '')],
                    ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            <!--
           ============================
           Emergency Contact Information
           ============================
           -->
            {!! ViewHelper::sectionStart('panel-default', 'Emergency Contacts') !!}

                    <div class="form-group">

                                <!-- Contact 1 Name -->
                        <div class="col-lg-6">

                            @if($participant->emergencyContact1)
                                {!! ViewHelper::formGroup([
                                ['type' => 'view', 'name'=>'emergency_contact1[id]', 'label' => 'Name', 'element_width'=> 8, 'label_width'=>4, 'link' => route('contacts.show', array($participant->emergencyContact1->id)), 'value' => $participant->emergencyContact1->first_name.' '.$participant->emergencyContact1->last_name],
                                ], $errors) !!}

                                {!! ViewHelper::formGroup([
                                ['type' => 'view', 'name'=>'emergency_contact1[home_phone]', 'label' => 'Home Phone', 'element_width'=> 8,'label_width'=>4, 'value' => $participant->emergencyContact1->home_phone],
                                ], $errors) !!}

                                {!! ViewHelper::formGroup([
                                ['type' => 'view', 'name'=>'emergency_contact1[business_phone]', 'label' => 'Business Phone', 'element_width'=> 8, 'label_width'=>4, 'value' => $participant->emergencyContact1->business_phone],
                                ], $errors) !!}

                                {!! ViewHelper::formGroup([
                                ['type' => 'view', 'name'=>'emergency_contact1[role]', 'label' => 'Relationship', 'element_width'=> 8, 'label_width'=>4, 'value' => $participant->emergency_contact1_relationship],
                                ], $errors) !!}
                            @endif
                        </div>



                        <!-- Contact 1 Name -->
                        <div class="col-lg-6">
                            @if($participant->emergencyContact2)
                                {!! ViewHelper::formGroup([
                                ['type' => 'view', 'name'=>'emergency_contact2[id]', 'label' => 'Name', 'element_width'=> 8, 'label_width'=>4, 'link' => route('contacts.show', array($participant->emergencyContact2->id)), 'value' => $participant->emergencyContact2->first_name.' '.$participant->emergencyContact2->last_name],
                                ], $errors) !!}

                                {!! ViewHelper::formGroup([
                                ['type' => 'view', 'name'=>'emergency_contact2[home_phone]', 'label' => 'Home Phone', 'element_width'=> 8, 'label_width'=>4, 'value' => $participant->emergencyContact2->home_phone],
                                ], $errors) !!}

                                {!! ViewHelper::formGroup([
                                ['type' => 'view', 'name'=>'emergency_contact2[business_phone]', 'label' => 'Business Phone', 'element_width'=> 8, 'label_width'=>4, 'value' => $participant->emergencyContact2->business_phone],
                                ], $errors) !!}

                                {!! ViewHelper::formGroup([
                                ['type' => 'view', 'name'=>'emergency_contact2[role]', 'label' => 'Relationship', 'element_width'=> 8, 'label_width'=>4, 'value' => $participant->emergency_contact2_relationship],
                                ], $errors) !!}
                            @endif
                        </div>

                    </div>

        {!! ViewHelper::sectionEnd() !!}

            <!--
            ============================
            Parent/Guardian Information
            ============================
            -->
            {!! ViewHelper::sectionStart('panel-default', 'Parent / Guardian') !!}

                    <div class="col-lg-2"></div>
                    <div class="col-lg-5"><h4>Primary Parent / Guardian</h4></div>
                    <div class="col-lg-5"><h4>Secondary Parent / Guardian</h4></div>

                    <?php
                        $primary_pg = [
                            'name' => '',
                            'home_phone' => '',
                            'link' => '',
                            'address' => ''
                        ];

                        $secondary_pg = [
                                'name' => '',
                                'home_phone' => '',
                                'link' => '',
                                'address' => ''
                        ];

                        if ($participant->primaryPg)
                        {
                            $primary_pg['name'] = $participant->primaryPg->first_name.' '.$participant->primaryPg->last_name;
                            $primary_pg['home_phone'] = $participant->primaryPg->home_phone;
                            $primary_pg['address'] = $participant->primaryPg->address->address1.' '.$participant->primaryPg->address->address2.' '.$participant->primaryPg->address->city.' '.$participant->primaryPg->address->state.' '.$participant->primaryPg->address->zip;
                            $primary_pg['link'] = route('contacts.show', $participant->primaryPg->id);
                        }

                        if ($participant->secondaryPg)
                        {
                            $secondary_pg['name'] = $participant->secondaryPg->first_name.' '.$participant->secondaryPg->last_name;
                            $secondary_pg['home_phone'] = $participant->secondaryPg->home_phone;
                            $secondary_pg['address'] = $participant->secondaryPg->address->address1.' '.$participant->secondaryPg->address2.' '.$participant->secondaryPg->address->city.' '.$participant->secondaryPg->address->state.' '.$participant->secondaryPg->address->zip;
                            $secondary_pg['link'] = route('contacts.show', $participant->secondaryPg->id);
                        }

                    ?>

                                <!-- Name -->
                        {!! ViewHelper::formGroup([
                            ['type' => 'view', 'name'=>'primary_pg[name]', 'label'=>'Name', 'link' => $primary_pg['link'], 'element_width'=> 5, 'value' => $primary_pg['name']],
                            ['type' => 'view', 'name'=>'secondary_pg[name]', 'link' => $secondary_pg['link'], 'element_width'=> 5, 'value' => $secondary_pg['name']],
                      ], $errors) !!}

                        <!-- Phone -->
                    {!! ViewHelper::formGroup([
                        ['type' => 'view', 'name'=>'primary_pg[home_phone]', 'label'=>'Home Phone', 'element_width'=> 5, 'value' => $primary_pg['home_phone']],
                        ['type' => 'view', 'name'=>'secondary_pg[home_phone]', 'element_width'=> 5, 'value' => $secondary_pg['home_phone']],
                  ], $errors) !!}

                            <!-- Address -->
                    {!! ViewHelper::formGroup([
                        ['type' => 'view', 'name'=>'primary_pg[address]', 'label'=>'Address', 'element_width'=> 5, 'value' => $primary_pg['address']],
                        ['type' => 'view', 'name'=>'secondary_pg[address]', 'element_width'=> 5, 'value' => $secondary_pg['address']],
                  ], $errors) !!}

                    {!! ViewHelper::sectionEnd() !!}

            {!! Form::close() !!}
        </div>
    </div> <!-- end of row-->

    <div class="row">

        <ul class="nav nav-tabs nav-tabs-blue">
            <li class="active"><a href="#registrations-tab" data-toggle="tab">Registrations <i class="fa"></i></a></li>
        </ul>
        <!--
        ===================================================
        REGISTRATIONS
        ====================================================
        -->
        <div class="tab-content">
            <div class="tab-pane active" id="registrations-tab">
                <div class="pull-right">
                    <a href="{{route('registrations.create').'?participant_id='.$participant->id}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus"></span> Register</a>
                </div>
                <br/><br/>
                <!-- Table -->
                <table id="object_list" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Session</th>
                        <th>Balance</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($participant->registrations as $registration)
                        <tr>
                            <?php
                            //check if program is not empty
                            $programName = "";
                            if ($registration->session && $registration->session->program)
                                $programName = $registration->session->program->name;
                            ?>
                            <td>{{$registration->id}}</td>
                            <td>{{$programName." - ".$registration->session->startDate}}</td>
                            <td>{{ FormatHelper::currency($registration->balance)}}</td>
                            <td>{!! ViewHelper::viewButton('registrations.show', $registration->id) !!}</td>
                            <td>{!! ViewHelper::editButton('registrations.edit', $registration->id) !!}</td>
                            <td>{!! ViewHelper::deleteButton('registrations.destroy', $registration->id) !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


@stop