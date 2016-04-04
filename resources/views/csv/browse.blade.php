@extends('layouts.app')

{{-- Page title --}}
@section('title')
Import a CSV File ::
@parent
@stop

{{-- Page content --}}
@section('content')

<div class="page-header">
    <h3>Import a CSV File
        <div class="pull-right">
            <a href="{{route('home')}}" class="btn btn-small btn-info">Cancel</a>
        </div>
    </h3>
</div>

<div class="row">
    <div class="col-md-12">

        {!! Form::open(array('files'=>true, 'class' => 'form-horizontal', 'method' => 'POST', 'route' => array('csv_import'))) !!}
        {!! csrf_field() !!}

        {!! ViewHelper::sectionStart('panel-primary', 'Primary Information') !!}

        <!-- CSV Map -->
        {!! ViewHelper::formGroup([
                ['type' => 'select', 'name'=>'csv_map_id', 'label' => 'CSV Map', 'list' => $csv_map_list, 'element_width' => 8],

                ], $errors) !!}

        <!-- File -->
        <div class="form-group">
            {!! Form::label('file','File',array('id'=>'','class'=>'col-lg-2 control-label')) !!}

            <div class="col-lg-8 input-group">
                {!! Form::file('file', ['class' => 'form-control file']) !!}
                <!-- <span class="input-group-btn">
                     <button class="browse btn btn-small btn-info" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                 </span>-->
            </div>
        </div>

        {!! ViewHelper::sectionEnd() !!}

        <!-- submit buttons -->
        {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

        {!! Form::close() !!}

    </div>
</div>

@stop
@section('body_bottom')
<script type="text/javascript">
    $(document).on('click', '.browse', function(){
        var file = $(this).parent().parent().parent().find('.file');
        file.trigger('click');
    });
    $(document).on('change', '.file', function(){
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
</script>
@stop