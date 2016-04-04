@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Participants ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Participants
            <div class="pull-right">
                <a href="{{route('participants.create')}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
            </div>
        </h3>
    </div>

    <table id="object_list" class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($participants as $participant)
            <tr>
                <td>{{$participant->id}}</td>
                <td>{{$participant->contact->first_name}}</td>
                <td>{{$participant->contact->last_name}}</td>
                <td>{{$participant->contact->date_of_birth}}</td>
                <td>{!! ViewHelper::viewButton('participants.show', $participant->id) !!}</td>
                <td>{!! ViewHelper::editButton('participants.edit', $participant->id) !!}</td>
                <td>{!! ViewHelper::deleteButton('participants.destroy', $participant->id) !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop