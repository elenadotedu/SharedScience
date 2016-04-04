@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Edit a csv map ::
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="page-header">
        <h3>Edit a CSV Map
            <div class="pull-right">
                <a href="{{ route('csv_maps.edit', array($csv_map->id) ) }}" class="btn btn-small btn-info">Edit</a>
                <a href="{{route('csv_maps.index')}}" class="btn btn-small btn-info">Cancel</a>
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
            ['type' => 'view', 'name'=>'name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->name],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            <!-- Participant -->
            {!! ViewHelper::sectionStart('panel-default', 'Participant') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'participant_first_name', 'label' => 'First Name', 'value' => $csv_map->participant_first_name],
             ['type' => 'view', 'name'=>'participant_last_name', 'label' => 'Last Name', 'value' => $csv_map->participant_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'participant_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->participant_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'participant_email', 'label' => 'Email', 'value' => $csv_map->participant_email],
                 ['type' => 'view', 'name'=>'participant_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->participant_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'participant_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->participant_home_phone],
                 ['type' => 'view', 'name'=>'participant_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->participant_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'participant_address1', 'label' => 'Address 1', 'value' => $csv_map->participant_address1],
                 ['type' => 'view', 'name'=>'participant_address2', 'label' => 'Unit No.', 'value' => $csv_map->participant_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'participant_city', 'label' => 'City', 'value' => $csv_map->participant_city],
                 ['type' => 'view', 'name'=>'participant_state', 'label' => 'State', 'value' => $csv_map->participant_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'participant_zip', 'label' => 'Zip Code', 'value' => $csv_map->participant_zip],
                 ['type' => 'view', 'name'=>'participant_country', 'label' => 'Country', 'value' => $csv_map->participant_country],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'participant_gender', 'label' => 'Gender', 'value' => $csv_map->participant_gender],
                 ['type' => 'view', 'name'=>'participant_external_id', 'label' => 'External ID', 'value' => $csv_map->participant_external_id],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'participant_school_name', 'label' => 'School', 'value' => $csv_map->participant_school_name],
             ['type' => 'view', 'name'=>'ethnicity_name', 'label' => 'Ethnicity', 'value' => $csv_map->ethnicity_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
     ['type' => 'view', 'name'=>'note', 'label' => 'Note'],
     ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Emergency Contact 1 -->
            {!! ViewHelper::sectionStart('panel-default', 'Emergency Contact') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'emergency_contact1_first_name', 'label' => 'First Name', 'value' => $csv_map->emergency_contact1_first_name],
             ['type' => 'view', 'name'=>'emergency_contact1_last_name', 'label' => 'Last Name', 'value' => $csv_map->emergency_contact1_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact1_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->emergency_contact1_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact1_email', 'label' => 'Email', 'value' => $csv_map->emergency_contact1_email],
                 ['type' => 'view', 'name'=>'emergency_contact1_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->emergency_contact1_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact1_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->emergency_contact1_home_phone],
                 ['type' => 'view', 'name'=>'emergency_contact1_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->emergency_contact1_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact1_address1', 'label' => 'Address 1', 'value' => $csv_map->emergency_contact1_address1],
                 ['type' => 'view', 'name'=>'emergency_contact1_address2', 'label' => 'Unit No.', 'value' => $csv_map->emergency_contact1_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact1_city', 'label' => 'City', 'value' => $csv_map->emergency_contact1_city],
                 ['type' => 'view', 'name'=>'emergency_contact1_state', 'label' => 'State', 'value' => $csv_map->emergency_contact1_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact1_zip', 'label' => 'Zip Code', 'value' => $csv_map->emergency_contact1_zip],
                 ['type' => 'view', 'name'=>'emergency_contact1_country', 'label' => 'Country', 'value' => $csv_map->emergency_contact1_country],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'emergency_contact1_relationship', 'label' => 'Relationship', 'value' => $csv_map->emergency_contact1_relationship],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Emergency Contact 2 -->
            {!! ViewHelper::sectionStart('panel-default', 'Emergency Contact') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'emergency_contact2_first_name', 'label' => 'First Name', 'value' => $csv_map->emergency_contact2_first_name],
             ['type' => 'view', 'name'=>'emergency_contact2_last_name', 'label' => 'Last Name', 'value' => $csv_map->emergency_contact2_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact2_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->emergency_contact2_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact2_email', 'label' => 'Email', 'value' => $csv_map->emergency_contact2_email],
                 ['type' => 'view', 'name'=>'emergency_contact2_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->emergency_contact2_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact2_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->emergency_contact2_home_phone],
                 ['type' => 'view', 'name'=>'emergency_contact2_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->emergency_contact2_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact2_address1', 'label' => 'Address 1', 'value' => $csv_map->emergency_contact2_address1],
                 ['type' => 'view', 'name'=>'emergency_contact2_address2', 'label' => 'Unit No.', 'value' => $csv_map->emergency_contact2_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact2_city', 'label' => 'City', 'value' => $csv_map->emergency_contact2_city],
                 ['type' => 'view', 'name'=>'emergency_contact2_state', 'label' => 'State', 'value' => $csv_map->emergency_contact2_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'emergency_contact2_zip', 'label' => 'Zip Code', 'value' => $csv_map->emergency_contact2_zip],
                 ['type' => 'view', 'name'=>'emergency_contact2_country', 'label' => 'Country', 'value' => $csv_map->emergency_contact2_country],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'emergency_contact2_relationship', 'label' => 'Relationship', 'value' => $csv_map->emergency_contact2_relationship],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Primary Parent / Guardian -->
            {!! ViewHelper::sectionStart('panel-default', 'Primary Parent / Guardian') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'primary_pg_first_name', 'label' => 'First Name', 'value' => $csv_map->primary_pg_first_name],
             ['type' => 'view', 'name'=>'primary_pg_last_name', 'label' => 'Last Name', 'value' => $csv_map->primary_pg_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'primary_pg_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->primary_pg_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'primary_pg_email', 'label' => 'Email', 'value' => $csv_map->primary_pg_email],
                 ['type' => 'view', 'name'=>'primary_pg_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->primary_pg_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'primary_pg_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->primary_pg_home_phone],
                 ['type' => 'view', 'name'=>'primary_pg_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->primary_pg_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'primary_pg_address1', 'label' => 'Address 1', 'value' => $csv_map->primary_pg_address1],
                 ['type' => 'view', 'name'=>'primary_pg_address2', 'label' => 'Unit No.', 'value' => $csv_map->primary_pg_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'primary_pg_city', 'label' => 'City', 'value' => $csv_map->primary_pg_city],
                 ['type' => 'view', 'name'=>'primary_pg_state', 'label' => 'State', 'value' => $csv_map->primary_pg_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'primary_pg_zip', 'label' => 'Zip Code', 'value' => $csv_map->primary_pg_zip],
                 ['type' => 'view', 'name'=>'primary_pg_country', 'label' => 'Country', 'value' => $csv_map->primary_pg_country],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Secondary Parent / Guardian -->
            {!! ViewHelper::sectionStart('panel-default', 'Secondary Parent / Guardian') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'view', 'name'=>'secondary_pg_first_name', 'label' => 'First Name', 'value' => $csv_map->secondary_pg_first_name],
             ['type' => 'view', 'name'=>'secondary_pg_last_name', 'label' => 'Last Name', 'value' => $csv_map->secondary_pg_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'secondary_pg_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->secondary_pg_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'secondary_pg_email', 'label' => 'Email', 'value' => $csv_map->secondary_pg_email],
                 ['type' => 'view', 'name'=>'secondary_pg_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->secondary_pg_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'secondary_pg_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->secondary_pg_home_phone],
                 ['type' => 'view', 'name'=>'secondary_pg_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->secondary_pg_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'secondary_pg_address1', 'label' => 'Address 1', 'value' => $csv_map->secondary_pg_address1],
                 ['type' => 'view', 'name'=>'secondary_pg_address2', 'label' => 'Unit No.', 'value' => $csv_map->secondary_pg_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'secondary_pg_city', 'label' => 'City', 'value' => $csv_map->secondary_pg_city],
                 ['type' => 'view', 'name'=>'secondary_pg_state', 'label' => 'State', 'value' => $csv_map->secondary_pg_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'secondary_pg_zip', 'label' => 'Zip Code', 'value' => $csv_map->secondary_pg_zip],
                 ['type' => 'view', 'name'=>'secondary_pg_country', 'label' => 'Country', 'value' => $csv_map->secondary_pg_country],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Family -->
            {!! ViewHelper::sectionStart('panel-default', 'Family') !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'family_name', 'label' => 'Name', 'value' => $csv_map->family_name],
                 ['type' => 'view', 'name'=>'family_external_id', 'label' => 'External ID', 'value' => $csv_map->family_external_id],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Program -->
            {!! ViewHelper::sectionStart('panel-default', 'Program') !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'program_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->program_name],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Session -->
            {!! ViewHelper::sectionStart('panel-default', 'Session') !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'session_school_name', 'label' => 'School Name', 'element_width' => 10, 'value' => $csv_map->session_school_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'session_start_date', 'label' => 'Start Date', 'value' => $csv_map->session_start_date],
                 ['type' => 'view', 'name'=>'session_end_date', 'label' => 'End Date', 'value' => $csv_map->session_end_date],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Registration -->
            {!! ViewHelper::sectionStart('panel-default', 'Registration') !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'registration_status_name', 'label' => 'Registration Status', 'value' => $csv_map->registration_status_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'registration_paid', 'label' => 'Paid', 'value' => $csv_map->registration_paid],
                 ['type' => 'view', 'name'=>'registration_balance', 'label' => 'Balance', 'value' => $csv_map->registration_balance],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'registration_active_fee_paid', 'label' => 'Active Fee Paid', 'value' => $csv_map->registration_active_fee_paid],
                 ['type' => 'view', 'name'=>'registration_discount_total', 'label' => 'Discount Total', 'value' => $csv_map->registration_discount_total],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'view', 'name'=>'registration_grade', 'label' => 'Grade', 'value' => $csv_map->registration_grade],
                 ['type' => 'view', 'name'=>'registration_external_id', 'label' => 'External ID', 'value' => $csv_map->registration_external_id],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop