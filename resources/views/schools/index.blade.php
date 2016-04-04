@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Schools ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Schools
            <div class="pull-right">
                <a href="{{route('schools.create')}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
            </div>
        </h3>
    </div>

    <table id="object_list" class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Nickname</th>
            <th>Phone</th>
            <th>Email</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($schools as $school)
            <tr>
                <td>{{$school->id}}</td>
                <td>{{$school->name}}</td>
                <td>{{$school->slug}}</td>
                <td>{{$school->phone}}</td>
                <td>{{$school->email}}</td>
                <td>{!! ViewHelper::viewButton('schools.show', $school->id) !!}</td>
                <td>{!! ViewHelper::editButton('schools.edit', $school->id) !!}</td>
                <td>{!! ViewHelper::deleteButton('schools.destroy', $school->id) !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop