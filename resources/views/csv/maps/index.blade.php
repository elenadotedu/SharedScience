@extends('layouts.app')

{{-- Page title --}}
@section('title')
    CSV Maps ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>CSV Maps
            <div class="pull-right">
                @can('create csv_maps')
                <a href="{{route('csv_maps.create')}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
                @endcan
            </div>
        </h3>
    </div>

    <?php
        $buttons = [];
        $user = Auth::getUser();

        if ($user->can('view csv_maps'))
            {
                array_push($buttons, 'view');
            }

        if ($user->can('edit csv_maps'))
        {
            array_push($buttons, 'edit');
        }

        if ($user->can('delete csv_maps'))
        {
            array_push($buttons, 'destroy');
        }
    ?>
    <div class="row">
        <div class="col-lg-12">
            {!! ViewHelper::recordList('csv_maps', $csv_maps, [
            'Name' => function($csv_map) {return $csv_map->name;},
            'Created' => function($csv_map) {return $csv_map->created_at;},
            ], $buttons) !!}
        </div>
    </div>

@stop