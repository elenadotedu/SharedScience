
@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Welcome ::
    @parent
@stop

<style type="text/css">
    body #page-wrapper {
        background-color:#F5F5F5;
        background-image:url("{{asset('assets/images/sharedScience_background_logo.png')}}");
        background-repeat: no-repeat;
        background-position: center;
    }
    .page-header.home-header {
        border-bottom:none;
    }
    .page-header.home-header h1 {
        text-transform: uppercase;
        text-align:center;
        font-weight:bold;
        color:#00417A;
    }
    .description {
        text-align:center;
    }

</style>

{{-- Page content --}}
@section('content')

    <div class="page-header home-header">
        <h1>Welcome!</h1>
    </div>

    <div class="description">
    @if (Auth::check())
            Use the menu on the left to navigate.
    @else
        Login to Shared Science demo portal to see more information with demo@sharedscience.com as email, demo123 as password. <br/>
        The abilities to edit templates, csv maps and users have been disabled for the purpose of this demo.
    @endif
    </div>
@stop

