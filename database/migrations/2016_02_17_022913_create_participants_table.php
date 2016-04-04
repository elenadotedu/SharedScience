<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contact_id')->unsigned();
            $table->integer('emergency_contact1_id')->unsigned()->nullable();
            $table->string('emergency_contact1_relationship')->nullable();
            $table->integer('emergency_contact2_id')->unsigned()->nullable();
            $table->string('emergency_contact2_relationship')->nullable();
            $table->integer('primary_pg_id')->unsigned()->nullable();
            $table->integer('secondary_pg_id')->unsigned()->nullable();
            $table->integer('family_id')->unsigned()->nullable();
            $table->integer('school_id')->unsigned()->nullable();
            $table->integer('ethnicity_id')->unsigned()->nullable();
            $table->string('gender')->nullable();
            $table->string('external_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participants');
    }
}
