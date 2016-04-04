<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsvMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csv_maps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('participant_first_name')->nullable();
            $table->string('participant_last_name')->nullable();
            $table->string('participant_name')->nullable(); //or one name field
            $table->string('participant_date_of_birth')->nullable();
            $table->string('participant_home_phone')->nullable();
            $table->string('participant_business_phone')->nullable();
            $table->string('participant_email')->nullable();
            $table->string('participant_address1')->nullable();
            $table->string('participant_address2')->nullable();
            $table->string('participant_city')->nullable();
            $table->string('participant_state')->nullable();
            $table->string('participant_zip')->nullable();
            $table->string('participant_country')->nullable();
            $table->string('participant_gender')->nullable();
            $table->string('participant_external_id')->nullable();

            $table->string('emergency_contact1_first_name')->nullable();
            $table->string('emergency_contact1_last_name')->nullable();
            $table->string('emergency_contact1_name')->nullable(); //or one name field
            $table->string('emergency_contact1_date_of_birth')->nullable();
            $table->string('emergency_contact1_home_phone')->nullable();
            $table->string('emergency_contact1_business_phone')->nullable();
            $table->string('emergency_contact1_email')->nullable();
            $table->string('emergency_contact1_address1')->nullable();
            $table->string('emergency_contact1_address2')->nullable();
            $table->string('emergency_contact1_city')->nullable();
            $table->string('emergency_contact1_state')->nullable();
            $table->string('emergency_contact1_zip')->nullable();
            $table->string('emergency_contact1_country')->nullable();
            $table->string('emergency_contact1_relationship')->nullable();

            $table->string('emergency_contact2_first_name')->nullable();
            $table->string('emergency_contact2_last_name')->nullable();
            $table->string('emergency_contact2_name')->nullable(); //or one name field
            $table->string('emergency_contact2_date_of_birth')->nullable();
            $table->string('emergency_contact2_home_phone')->nullable();
            $table->string('emergency_contact2_business_phone')->nullable();
            $table->string('emergency_contact2_email')->nullable();
            $table->string('emergency_contact2_address1')->nullable();
            $table->string('emergency_contact2_address2')->nullable();
            $table->string('emergency_contact2_city')->nullable();
            $table->string('emergency_contact2_state')->nullable();
            $table->string('emergency_contact2_zip')->nullable();
            $table->string('emergency_contact2_country')->nullable();
            $table->string('emergency_contact2_relationship')->nullable();

            $table->string('primary_pg_first_name')->nullable();
            $table->string('primary_pg_last_name')->nullable();
            $table->string('primary_pg_name')->nullable(); //or one name field
            $table->string('primary_pg_date_of_birth')->nullable();
            $table->string('primary_pg_home_phone')->nullable();
            $table->string('primary_pg_business_phone')->nullable();
            $table->string('primary_pg_email')->nullable();
            $table->string('primary_pg_address1')->nullable();
            $table->string('primary_pg_address2')->nullable();
            $table->string('primary_pg_city')->nullable();
            $table->string('primary_pg_state')->nullable();
            $table->string('primary_pg_zip')->nullable();
            $table->string('primary_pg_country')->nullable();

            $table->string('secondary_pg_first_name')->nullable();
            $table->string('secondary_pg_last_name')->nullable();
            $table->string('secondary_pg_name')->nullable(); //or one name field
            $table->string('secondary_pg_date_of_birth')->nullable();
            $table->string('secondary_pg_home_phone')->nullable();
            $table->string('secondary_pg_business_phone')->nullable();
            $table->string('secondary_pg_email')->nullable();
            $table->string('secondary_pg_address1')->nullable();
            $table->string('secondary_pg_address2')->nullable();
            $table->string('secondary_pg_city')->nullable();
            $table->string('secondary_pg_state')->nullable();
            $table->string('secondary_pg_zip')->nullable();
            $table->string('secondary_pg_country')->nullable();

            $table->string('family_external_id')->nullable();
            $table->string('family_name')->nullable();

            $table->string('participant_school_name')->nullable();

            $table->string('session_school_name')->nullable();

            $table->string('registration_status_name')->nullable();

            $table->string('program_name')->nullable();

            $table->string('session_start_date')->nullable();
            $table->string('session_end_date')->nullable();

            $table->string('registration_paid')->nullable();
            $table->string('registration_balance')->nullable();
            $table->string('registration_active_fee_paid')->nullable();
            $table->string('registration_discount_total')->nullable();
            $table->string('registration_grade')->nullable();
            $table->string('registration_external_id')->nullable();

            $table->string('ethnicity_name')->nullable();

            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('csv_maps');
    }
}
