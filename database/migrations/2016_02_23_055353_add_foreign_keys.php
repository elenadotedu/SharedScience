<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function($table) {
            $table->foreign('address_id')->references('id')->on('addresses');
        });

        Schema::table('participants', function($table) {
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('emergency_contact1_id')->references('id')->on('contacts');
            $table->foreign('emergency_contact2_id')->references('id')->on('contacts');
            $table->foreign('primary_pg_id')->references('id')->on('contacts');
            $table->foreign('secondary_pg_id')->references('id')->on('contacts');
            $table->foreign('family_id')->references('id')->on('families');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('ethnicity_id')->references('id')->on('ethnicities');
        });

        Schema::table('sessions', function($table) {
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('school_id')->references('id')->on('schools');
        });

        Schema::table('registrations', function($table) {
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->foreign('participant_id')->references('id')->on('participants');
            $table->foreign('status_id')->references('id')->on('registration_statuses');
        });

        Schema::table('campaign_recipients', function($table) {
            $table->foreign('campaign_id')->references('id')->on('campaigns');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('status_id')->references('id')->on('campaign_statuses');
        });

        Schema::table('record_has_columns', function($table) {
            $table->foreign('record_id')->references('id')->on('records');
            $table->foreign('field_id')->references('id')->on('fields');
        });

        Schema::table('record_has_filters', function($table) {
            $table->foreign('record_id')->references('id')->on('records');
            $table->foreign('field_id')->references('id')->on('fields');
        });

        Schema::table('reports', function($table) {
            $table->foreign('record_id')->references('id')->on('records');
            $table->foreign('template_id')->references('id')->on('templates');
        });

        Schema::table('school_contacts', function($table) {
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('contact_id')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function($table) {
            $table->dropForeign('contacts_address_id_foreign');
        });

        Schema::table('participants', function($table) {
            $table->dropForeign('participants_contact_id_foreign');
            $table->dropForeign('participants_emergency_contact1_id_foreign');
            $table->dropForeign('participants_emergency_contact2_id_foreign');
            $table->dropForeign('participants_primary_pg_id_foreign');
            $table->dropForeign('participants_secondary_pg_id_foreign');
            $table->dropForeign('participants_family_id_foreign');
            $table->dropForeign('participants_school_id_foreign');
            $table->dropForeign('participants_ethnicity_id_foreign');
        });

        Schema::table('sessions', function($table) {
            $table->dropForeign('sessions_program_id_foreign');
            $table->dropForeign('sessions_school_id_foreign');
        });

        Schema::table('registrations', function($table) {
            $table->dropForeign('registrations_session_id_foreign');
            $table->dropForeign('registrations_participant_id_foreign');
            $table->dropForeign('registrations_status_id_foreign');
        });

        Schema::table('campaign_recipients', function($table) {
            $table->dropForeign('campaign_recipients_campaign_id_foreign');
            $table->dropForeign('campaign_recipients_contact_id_foreign');
            $table->dropForeign('campaign_recipients_status_id_foreign');
        });

        Schema::table('record_has_columns', function($table) {
            $table->dropForeign('record_has_columns_record_id_foreign');
            $table->dropForeign('record_has_columns_field_id_foreign');
        });

        Schema::table('record_has_filters', function($table) {
            $table->dropForeign('record_has_filters_record_id_foreign');
            $table->dropForeign('record_has_filters_field_id_foreign');
        });

        Schema::table('reports', function($table) {
            $table->dropForeign('reports_record_id_foreign');
            $table->dropForeign('reports_template_id_foreign');
        });

        Schema::table('school_contacts', function($table) {
            $table->dropForeign('school_contacts_school_id_foreign');
            $table->dropForeign('school_contacts_contact_id_foreign');
        });
    }
}
