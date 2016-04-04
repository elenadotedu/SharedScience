@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Create a report ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Create a Report
            <div class="pull-right">
                <a href="{{route('reports.index')}}" class="btn btn-small btn-info">Cancel</a>
            </div>
        </h3>
    </div>

    <div class = "row">
        <!-- Form -->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'route' => array('reports.run'), 'id' => 'report-data')) !!}
        {!! csrf_field() !!}

        {!! Form::hidden('data', '', array('id' => 'report-data-data')) !!}
        {!! Form::hidden('record_id', $record->id) !!}

        {!! ViewHelper::formGroup([
             ['type' => 'text', 'name'=>'name', 'label' => 'Name', 'element_width' => 10],
             ], $errors) !!}

    </div>

    <div class="row">

        <ul class="nav nav-tabs nav-tabs-blue">
            <li class="active"><a href="#filters-tab" data-toggle="tab">Filters <i class="fa"></i></a></li>
            <li><a href="#columns-tab" data-toggle="tab">Selects <i class="fa"></i></a></li>
            <li><a href="#look-tab" data-toggle="tab">Look <i class="fa"></i></a></li>
        </ul>

        <div class="tab-content">

            <!--
            ===================================================
            FILTERS
            ====================================================
            -->
            <div class="tab-pane active" id="filters-tab">

                <div id="builder-basic" class="query-builder form-inline">
                </div>

            </div>

            <!--
            ===================================================
            COLUMNS
            ====================================================
            -->
            <style type="text/css">
                /*hide operator*/
                #builder-columns .rule-operator-container {
                    display:none;
                }
            </style>

            <div class="tab-pane" id="columns-tab">
                <div id="builder-columns" class="query-builder form-inline">
                </div>
            </div>

            <script type="text/javascript">

            </script>

            <!--
            ===================================================
            LOOK
            ====================================================
            -->
            <div class="tab-pane" id="look-tab">

                <div class="row">
                    <!-- Template -->
                    <div class="form-group">
                        {!! Form::label('template', 'Template:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-5">
                            {!! Form::select('template_id', $template_list, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <br />
                <br/>

            </div>

        </div>

        {!! Form::close() !!}

        <div class="btn-group">
            <button class="btn btn-warning reset" id="btn-reset" data-target="basic">Reset</button>
            <button class="btn btn-primary parse-json" id="btn-run" data-target="basic">Run</button>
            <button class="btn btn-primary parse-json" id="btn-save" data-target="basic">Save</button>
        </div>

    </div>

@stop
@section('body_bottom')
<script>
    var rules_basic = {
        condition: 'AND',
        operators: [],
        rules: [{
            id: '-1'
        }]
    };

    $('#builder-basic').queryBuilder({
        plugins: ['bt-tooltip-errors'],

        filters: [
            @foreach($filters as $filter)
            {
                id: '{{$filter->field_id}}',
                field: '{{$filter->field}}',
                label: '{{$filter->label}}',
                type: '{{$filter->type}}',
                input: '{{$filter->input}}',
                values: {!! ($filter->values? $filter->values: '""') !!},
                default_value: '{{$filter->default_value}}',
                input_event: '{{$filter->input_event}}',
                rows: '{{$filter->rows}}',
                multiple: '{{$filter->multiple}}',
                placeholder: '{{$filter->placeholder}}',
                vertical: '{{$filter->vertical}}',
                validation: '{{$filter->validation}}',
                operators: '{{$filter->operators}}',
                plugin: '{{$filter->plugin}}',
                plugin_config: '{{$filter->plugin_config}}',
                data: {!! ($filter->data? $filter->data: '""') !!}
            }
            @if($filter != end($filters))
            ,
            @endif

            @endforeach
        ],

        rules: rules_basic
    });

    $('#builder-columns').queryBuilder({
        plugins: ['bt-tooltip-errors'],
        conditions: ['AND'],
        allow_groups: false,

        filters: [
                @foreach($columns as $column)
                {
                id: '{{$column->field_id}}',
                field: '{{$column->field}}',
                label: '{{$column->label}}',
                type: '{{$column->type}}',
                input: '{{$column->input}}',
                values: {!! ($column->values? $column->values: '""') !!},
                default_value: '{{$column->label}}',
                input_event: '{{$column->input_event}}',
                rows: '{{$column->rows}}',
                multiple: '{{$column->multiple}}',
                placeholder: '{{$column->placeholder}}',
                vertical: '{{$column->vertical}}',
                validation: '{{$column->validation}}',
                operators: '{{$column->operators}}',
                plugin: '{{$column->plugin}}',
                plugin_config: '{{$column->plugin_config}}',
                data: {!! ($column->data? $column->data: '""') !!}
            }
            @if($column != end($columns))
            ,
            @endif

            @endforeach
        ],

        rules: rules_basic
    });

    $('#btn-reset').on('click', function() {
        $('#builder-basic').queryBuilder('reset');
        $('#builder-columns').queryBuilder('reset');
    });

    $('#btn-run').on('click', function() {
        var result =
        {
            filters: $('#builder-basic').queryBuilder('getRules'),
            columns: $('#builder-columns').queryBuilder('getRules')
        };

        if ($.isEmptyObject(result['filters']))
        {
            alert("Please check your filters.");
        }
        else if ($.isEmptyObject(result['columns']))
        {
            alert("Please check your columns.");
        }
        else {
            $("#report-data-data").val(JSON.stringify(result, null, 2));
            $("#report-data").submit();
        }
    });

    $('#btn-save').on('click', function() {
        var result =
        {
            filters: $('#builder-basic').queryBuilder('getRules'),
            columns: $('#builder-columns').queryBuilder('getRules')
        };

        if ($.isEmptyObject(result['filters']))
        {
            alert("Please add at least one filter");
        }
        else if ($.isEmptyObject(result['columns']))
        {
            alert("Please add at least one column");
        }
        else {
            $("#report-data").attr("action", "{{route('reports.store')}}");
            $("#report-data-data").val(JSON.stringify(result, null, 2));
            $("#report-data").submit();
        }
    });
</script>
@stop