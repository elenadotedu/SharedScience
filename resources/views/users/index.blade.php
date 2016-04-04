@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Users ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Users
            <div class="pull-right">
                <a href="{{route('users.create')}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
            </div>
        </h3>
    </div>

    <div class="row">
        <div class="col-md-12">

            {!! ViewHelper::recordList('users', $records, [
     'ID' => function($user) {return $user->id;},
     'Name' => function($user) {return $user->first_name.' '.$user->last_name;},
     'Email' => function($user) {return $user->email;},
     ], ['edit', 'destroy']) !!}

        </div>
    </div>

@stop
