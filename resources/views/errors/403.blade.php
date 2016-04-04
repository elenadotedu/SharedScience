@extends('layouts.app')

{{-- Page title --}}
@section('title')
    403 ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Something went wrong</h3>
    </div>

    <div class="row">
        <div class="col-lg-12">You are not authorized to access this page.</div>
    </div>
	
	<div class="row col-lg-12">
       {{ $exception->getMessage() }}
    </div>

@stop

