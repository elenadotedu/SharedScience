@extends('layouts.min_app')

{{-- Page title --}}
@section('title')
    Sign-In Sheet ::

@stop
<style type="text/css">
    @media print {
        *{
            color: #17365d;
        }
        th {
            background-color: #92ccdc;
        }
    }
</style>
{{-- Page content --}}
@section('content')
    <div class="col-lg-12 row">
        <div class="pull-right"><img src="{{asset('assets/images/print_logo.jpg')}}" /></div>
    </div>

    <div class="col-lg-12 row">
        <p style="text-align: center; font-weight: bold">Participant Sign-In Sheet - {{$results[0]->programs_name}}<br/>
        {{date('g:i a', strtotime($results[0]->sessions_start_time))}} - {{date('g:i a', strtotime($results[0]->sessions_end_time))}} at {{$results[0]->schools_name}}<br/>
            {{date('m/d/y', strtotime($results[0]->sessions_start_date))}} thru {{date('m/d/y', strtotime($results[0]->sessions_end_date))}}
        </p>
        <hr/>
        <p style="text-align: center; font-weight: bold">Parents/Students, please sign "IN" at drop-off and "OUT" at pick-up.<br/>
        Plan on arriving 5 minutes before end of class for pick-up.
        </p>
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <th>Participant Name</th>
            <th colspan="2">{{date('m/d', strtotime($results[0]->sessions_date1))}}</th>
            <th colspan="2">{{date('m/d', strtotime($results[0]->sessions_date2))}}</th>
            <th colspan="2">{{date('m/d', strtotime($results[0]->sessions_date3))}}</th>
            <th colspan="2">{{date('m/d', strtotime($results[0]->sessions_date4))}}</th>
            <th colspan="2">{{date('m/d', strtotime($results[0]->sessions_date5))}}</th>
            <th colspan="2">{{date('m/d', strtotime($results[0]->sessions_date6))}}</th>
            @if(!empty(strtotime($results[0]->sessions_date7)))
                <th colspan="2">{{date('m/d', strtotime($results[0]->sessions_date7))}}</th>
            @endif
            @if(!empty(strtotime($results[0]->sessions_date8)))
                <th colspan="2">{{date('m/d', strtotime($results[0]->sessions_date8))}}</th>
            @endif
            <th>Forms Completed? Snack ok?</th>
        </tr>
        <tr><td></td>
            <td>In</td>
            <td>Out</td>
            <td>In</td>
            <td>Out</td>
            <td>In</td>
            <td>Out</td>
            <td>In</td>
            <td>Out</td>
            <td>In</td>
            <td>Out</td>
            <td>In</td>
            <td>Out</td>
            <td></td>
        </tr>
        @foreach($results as $result)
            <tr><td>
                    {{$result->contacts_first_name }} {{$result->contacts_last_name }}
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
        <tbody>

        </tbody>
    </table>
@stop