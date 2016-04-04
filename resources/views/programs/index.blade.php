@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Programs ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Programs
            <div class="pull-right">
                <a href="{{route('programs.create')}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
            </div>
        </h3>
    </div>

    <table id="object_list" class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Nickname</th>
            <th>Description</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($programs as $program)
            <tr>
                <td>{{$program->id}}</td>
                <td>{{$program->name}}</td>
                <td>{{$program->slug}}</td>
                <td><div style="max-width:200px">{{$program->description}}</div></td>
                <td>{!! ViewHelper::viewButton('programs.show', $program->id) !!}</td>
                <td>{!! ViewHelper::editButton('programs.edit', $program->id) !!}</td>
                <td>{!! ViewHelper::deleteButton('programs.destroy', $program->id) !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop