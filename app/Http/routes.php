<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    //--------------------
    // Home

    Route::get('/', ['as' => 'home', function () {
        return view('welcome');
    }]);

    //--------------------
    // Authentication

    Route::auth();

});

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::resource('participants', 'ParticipantController');
    Route::resource('programs', 'ProgramController');
    Route::resource('sessions', 'SessionController', ['except' => ['index']]);
    Route::resource('registrations', 'RegistrationController', ['except' => ['index']]);
    Route::resource('contacts', 'ContactController');
    Route::resource('templates', 'TemplateController');
    Route::resource('campaigns', 'CampaignController');
    Route::resource('users', 'UserController');

    //--------------------
    // Schools

    Route::resource('schools', 'SchoolController');
    Route::post('schools/{school_id}/contacts', ['as' => 'schools.contacts.attach', 'uses' => 'SchoolController@attach_contact']);
    Route::delete('schools/{school_id}/contacts/{contact_id}', ['as' => 'schools.contacts.detach', 'uses' => 'SchoolController@detach_contact']);

    //--------------------
    // Reports

    Route::get('reports/pre_create', array('as' => 'reports.pre_create', 'uses' => 'ReportController@pre_create')); //select report type
    Route::post('reports/{id}/copy', array('as' => 'reports.copy', 'uses' => 'ReportController@store')); //copy
    Route::post('reports/pre_store', array('as' => 'reports.pre_store', 'uses' => 'ReportController@pre_store')); // save report type id create
    Route::post('reports/run', array('as' => 'reports.run', 'uses' => 'ReportController@run')); //run
    Route::post('reports/{id}/update', array('as' => 'reports.update', 'uses' => 'ReportController@update')); //update (because put method doesn't work with javascript)
    Route::resource('reports', 'ReportController', ['except' => ['update']]);

    //--------------------
    // CSV

    Route::resource('csv_maps', 'CSVMapController');
    Route::get('csv_browse', array('as' => 'csv_browse', 'uses' => 'CSVController@browse')); //browse
    Route::post('csv_import', array('as' => 'csv_import', 'uses' => 'CSVController@import'));

    //--------------------
    // Help

    Route::get('help', ['as' => 'help.reports', function () {
        return view('help.reports');
    }]);

});

// test
Route::get('test', 'TestController@test');






