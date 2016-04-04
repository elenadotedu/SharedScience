@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Contacts ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Contacts
            <div class="pull-right">
                <a href="{{route('contacts.create')}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
            </div>
        </h3>
    </div>

    <table id="object_list" class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->first_name}}</td>
                <td>{{$contact->last_name}}</td>
                <td>{{$contact->email}}</td>
                <td>{!! ViewHelper::viewButton('contacts.show', $contact->id) !!}</td>
                <td>{!! ViewHelper::editButton('contacts.edit', $contact->id) !!}</td>
                <td>{!! ViewHelper::deleteButton('contacts.destroy', $contact->id) !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop