@extends('layouts.app')

{{-- Page title --}}
@section('title')
    404 ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Something went wrong</h3>
    </div>

    <div class="row">

        <div class="col-lg-12">Page not found.</div>

    </div>

@stop