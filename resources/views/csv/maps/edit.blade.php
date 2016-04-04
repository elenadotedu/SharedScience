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
                <a href="{{route('csv_maps.index')}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Form -->
            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'PUT', 'route' => array('csv_maps.update', $csv_map->id))) !!}
            {!! csrf_field() !!}

            {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

            {!! ViewHelper::formGroup([
            ['type' => 'text', 'name'=>'name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->name],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            <p><strong>Instructions:</strong>
            <ol>
                <li>Open <strong>CSV file</strong> you wish to import in Excel.</li>
                <li>Find <strong>headers</strong>.</li>
                <li>For <strong>each header</strong> do the following:
                    <ol>
                        <li>Change all upper cases <strong>to lower cases</strong>, all characters except for letters and numbers <strong>to underscores</strong> (For example, <strong>Participant: First Name</strong> becomes <strong>participant_first_name</strong></li>
                        <li>Copy the resulting column into the <strong>appropriate field on the map</strong>. (For example, <strong>participant_first_name</strong> goes into <strong>Participant section, First Name</strong>).</li>
                    </ol>
                </li>
            </ol>
            <strong>Note: </strong> You can either use separate First Name, Last Name fields or one single Name field (in which case name will be split into components by the name splitter program).
            </p>

            <!-- Participant -->
            {!! ViewHelper::sectionStart('panel-default', 'Participant') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'participant_first_name', 'label' => 'First Name', 'value' => $csv_map->participant_first_name],
             ['type' => 'text', 'name'=>'participant_last_name', 'label' => 'Last Name', 'value' => $csv_map->participant_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'participant_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->participant_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'participant_email', 'label' => 'Email', 'value' => $csv_map->participant_email],
                 ['type' => 'text', 'name'=>'participant_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->participant_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'participant_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->participant_home_phone],
                 ['type' => 'text', 'name'=>'participant_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->participant_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'participant_address1', 'label' => 'Address 1', 'value' => $csv_map->participant_address1],
                 ['type' => 'text', 'name'=>'participant_address2', 'label' => 'Unit No.', 'value' => $csv_map->participant_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'participant_city', 'label' => 'City', 'value' => $csv_map->participant_city],
                 ['type' => 'text', 'name'=>'participant_state', 'label' => 'State', 'value' => $csv_map->participant_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'participant_zip', 'label' => 'Zip Code', 'value' => $csv_map->participant_zip],
                 ['type' => 'text', 'name'=>'participant_country', 'label' => 'Country', 'value' => $csv_map->participant_country],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'participant_gender', 'label' => 'Gender', 'value' => $csv_map->participant_gender],
                 ['type' => 'text', 'name'=>'participant_external_id', 'label' => 'External ID', 'value' => $csv_map->participant_external_id],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'participant_school_name', 'label' => 'School', 'value' => $csv_map->participant_school_name],
             ['type' => 'text', 'name'=>'ethnicity_name', 'label' => 'Ethnicity', 'value' => $csv_map->ethnicity_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
     ['type' => 'text', 'name'=>'note', 'label' => 'Note'],
     ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Emergency Contact -->
            {!! ViewHelper::sectionStart('panel-default', 'Emergency Contact') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'emergency_contact1_first_name', 'label' => 'First Name', 'value' => $csv_map->emergency_contact1_first_name],
             ['type' => 'text', 'name'=>'emergency_contact1_last_name', 'label' => 'Last Name', 'value' => $csv_map->emergency_contact1_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact1_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->emergency_contact1_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact1_email', 'label' => 'Email', 'value' => $csv_map->emergency_contact1_email],
                 ['type' => 'text', 'name'=>'emergency_contact1_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->emergency_contact1_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact1_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->emergency_contact1_home_phone],
                 ['type' => 'text', 'name'=>'emergency_contact1_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->emergency_contact1_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact1_address1', 'label' => 'Address 1', 'value' => $csv_map->emergency_contact1_address1],
                 ['type' => 'text', 'name'=>'emergency_contact1_address2', 'label' => 'Unit No.', 'value' => $csv_map->emergency_contact1_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact1_city', 'label' => 'City', 'value' => $csv_map->emergency_contact1_city],
                 ['type' => 'text', 'name'=>'emergency_contact1_state', 'label' => 'State', 'value' => $csv_map->emergency_contact1_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact1_zip', 'label' => 'Zip Code', 'value' => $csv_map->emergency_contact1_zip],
                 ['type' => 'text', 'name'=>'emergency_contact1_country', 'label' => 'Country', 'value' => $csv_map->emergency_contact1_country],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
         ['type' => 'text', 'name'=>'emergency_contact1_relationship', 'label' => 'Relationship', 'value' => $csv_map->emergency_contact1_relationship],
        ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Emergency Contact -->
            {!! ViewHelper::sectionStart('panel-default', 'Emergency Contact') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'emergency_contact2_first_name', 'label' => 'First Name', 'value' => $csv_map->emergency_contact2_first_name],
             ['type' => 'text', 'name'=>'emergency_contact2_last_name', 'label' => 'Last Name', 'value' => $csv_map->emergency_contact2_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact2_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->emergency_contact2_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact2_email', 'label' => 'Email', 'value' => $csv_map->emergency_contact2_email],
                 ['type' => 'text', 'name'=>'emergency_contact2_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->emergency_contact2_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact2_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->emergency_contact2_home_phone],
                 ['type' => 'text', 'name'=>'emergency_contact2_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->emergency_contact2_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact2_address1', 'label' => 'Address 1', 'value' => $csv_map->emergency_contact2_address1],
                 ['type' => 'text', 'name'=>'emergency_contact2_address2', 'label' => 'Unit No.', 'value' => $csv_map->emergency_contact2_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact2_city', 'label' => 'City', 'value' => $csv_map->emergency_contact2_city],
                 ['type' => 'text', 'name'=>'emergency_contact2_state', 'label' => 'State', 'value' => $csv_map->emergency_contact2_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'emergency_contact2_zip', 'label' => 'Zip Code', 'value' => $csv_map->emergency_contact2_zip],
                 ['type' => 'text', 'name'=>'emergency_contact2_country', 'label' => 'Country', 'value' => $csv_map->emergency_contact2_country],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'emergency_contact2_relationship', 'label' => 'Relationship', 'value' => $csv_map->emergency_contact2_relationship],
            ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Primary Parent / Guardian -->
            {!! ViewHelper::sectionStart('panel-default', 'Primary Parent / Guardian') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'primary_pg_first_name', 'label' => 'First Name', 'value' => $csv_map->primary_pg_first_name],
             ['type' => 'text', 'name'=>'primary_pg_last_name', 'label' => 'Last Name', 'value' => $csv_map->primary_pg_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'primary_pg_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->primary_pg_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'primary_pg_email', 'label' => 'Email', 'value' => $csv_map->primary_pg_email],
                 ['type' => 'text', 'name'=>'primary_pg_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->primary_pg_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'primary_pg_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->primary_pg_home_phone],
                 ['type' => 'text', 'name'=>'primary_pg_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->primary_pg_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'primary_pg_address1', 'label' => 'Address 1', 'value' => $csv_map->primary_pg_address1],
                 ['type' => 'text', 'name'=>'primary_pg_address2', 'label' => 'Unit No.', 'value' => $csv_map->primary_pg_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'primary_pg_city', 'label' => 'City', 'value' => $csv_map->primary_pg_city],
                 ['type' => 'text', 'name'=>'primary_pg_state', 'label' => 'State', 'value' => $csv_map->primary_pg_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'primary_pg_zip', 'label' => 'Zip Code', 'value' => $csv_map->primary_pg_zip],
                 ['type' => 'text', 'name'=>'primary_pg_country', 'label' => 'Country', 'value' => $csv_map->primary_pg_country],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Secondary Parent / Guardian -->
            {!! ViewHelper::sectionStart('panel-default', 'Secondary Parent / Guardian') !!}

            {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'secondary_pg_first_name', 'label' => 'First Name', 'value' => $csv_map->secondary_pg_first_name],
             ['type' => 'text', 'name'=>'secondary_pg_last_name', 'label' => 'Last Name', 'value' => $csv_map->secondary_pg_last_name],
             ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'secondary_pg_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->secondary_pg_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'secondary_pg_email', 'label' => 'Email', 'value' => $csv_map->secondary_pg_email],
                 ['type' => 'text', 'name'=>'secondary_pg_date_of_birth', 'label' => 'Date Of Birth', 'value' => $csv_map->secondary_pg_date_of_birth],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'secondary_pg_home_phone', 'label' => 'Home Phone', 'value' => $csv_map->secondary_pg_home_phone],
                 ['type' => 'text', 'name'=>'secondary_pg_business_phone', 'label' => 'Business Phone', 'value' => $csv_map->secondary_pg_business_phone],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'secondary_pg_address1', 'label' => 'Address 1', 'value' => $csv_map->secondary_pg_address1],
                 ['type' => 'text', 'name'=>'secondary_pg_address2', 'label' => 'Unit No.', 'value' => $csv_map->secondary_pg_address2],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'secondary_pg_city', 'label' => 'City', 'value' => $csv_map->secondary_pg_city],
                 ['type' => 'text', 'name'=>'secondary_pg_state', 'label' => 'State', 'value' => $csv_map->secondary_pg_state],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'secondary_pg_zip', 'label' => 'Zip Code', 'value' => $csv_map->secondary_pg_zip],
                 ['type' => 'text', 'name'=>'secondary_pg_country', 'label' => 'Country', 'value' => $csv_map->secondary_pg_country],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Family -->
            {!! ViewHelper::sectionStart('panel-default', 'Family') !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'family_name', 'label' => 'Name', 'value' => $csv_map->family_name],
                 ['type' => 'text', 'name'=>'family_external_id', 'label' => 'External ID', 'value' => $csv_map->family_external_id],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Program -->
            {!! ViewHelper::sectionStart('panel-default', 'Program') !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'program_name', 'label' => 'Name', 'element_width' => 10, 'value' => $csv_map->program_name],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Session -->
            {!! ViewHelper::sectionStart('panel-default', 'Session') !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'session_school_name', 'label' => 'School Name', 'element_width' => 10, 'value' => $csv_map->session_school_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'session_start_date', 'label' => 'Start Date', 'value' => $csv_map->session_start_date],
                 ['type' => 'text', 'name'=>'session_end_date', 'label' => 'End Date', 'value' => $csv_map->session_end_date],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

                    <!-- Registration -->
            {!! ViewHelper::sectionStart('panel-default', 'Registration') !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'registration_status_name', 'label' => 'Registration Status', 'value' => $csv_map->registration_status_name],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'registration_paid', 'label' => 'Paid', 'value' => $csv_map->registration_paid],
                 ['type' => 'text', 'name'=>'registration_balance', 'label' => 'Balance', 'value' => $csv_map->registration_balance],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'registration_active_fee_paid', 'label' => 'Active Fee Paid', 'value' => $csv_map->registration_active_fee_paid],
                 ['type' => 'text', 'name'=>'registration_discount_total', 'label' => 'Discount Total', 'value' => $csv_map->registration_discount_total],
                 ], $errors) !!}

            {!! ViewHelper::formGroup([
                 ['type' => 'text', 'name'=>'registration_grade', 'label' => 'Grade', 'value' => $csv_map->registration_grade],
                 ['type' => 'text', 'name'=>'registration_external_id', 'label' => 'External ID', 'value' => $csv_map->registration_external_id],
                 ], $errors) !!}

            {!! ViewHelper::sectionEnd() !!}

            {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop