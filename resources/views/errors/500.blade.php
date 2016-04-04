@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Participants ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3> Something went wrong
        </h3>
    </div>

    <div class="row col-lg-12">
       {{ $exception->getMessage() }}
    </div>
@stop