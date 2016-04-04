<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id')->unsigned();
            $table->integer('participant_id')->unsigned();
            $table->float('balance')->nullable();
            $table->float('active_fee_paid')->nullable();
            $table->float('discount')->nullable();
            $table->float('paid')->nullable();
            $table->integer('grade')->nullable();
            $table->integer('status_id')->unsigned()->nullable();
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
        Schema::drop('registrations');
    }
}
