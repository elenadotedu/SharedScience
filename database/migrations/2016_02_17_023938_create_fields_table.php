<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('field_id')->unique();
            $table->string('field');
            $table->string('label');
            $table->string('type');
            $table->string('input')->nullable();
            $table->text('values')->nullable();
            $table->string('default_value')->nullable();
            $table->string('input_event')->nullable();
            $table->integer('rows')->nullable();
            $table->boolean('multiple')->nullable();
            $table->string('placeholder')->nullable();
            $table->boolean('vertical')->nullable();
            $table->longText('validation')->nullable();
            $table->text('operators')->nullable();
            $table->string('plugin')->nullable();
            $table->longText('plugin_config')->nullable();
            $table->longText('data')->nullable();
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
        Schema::drop('fields');
    }
}
