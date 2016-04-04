@extends('layouts.app')

{{-- Page title --}}
@section('title')
    Edit a user ::
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="page-header">
        <h3>Edit a user</h3>
    </div>

    <div class="row">
        <!--This is the start of the form field-->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'PUT', 'route' => array('users.update', $user->id))) !!}
        {!! csrf_field() !!}

        {!! Form::hidden('issuing_user', Auth::user()? Auth::user()->id: "", array('id' => 'issuing_user')) !!}

        <!--First Name-->
        <?php $field = 'first_name'; $label = "First Name" ?>

        <div class="form-group{{ $errors->has($field) ? ' has-error' : '' }}">

            {!! Form::label($field, $label, ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::text($field, $value = $user->{$field}, ['class' => 'form-control', 'placeholder' => $label]) !!}

                @if ($errors->has($field))
                    <span class="help-block">
                        <strong>{{ $errors->first($field) }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <!-- Last Name -->
        <?php $field = 'last_name'; $label = "Last Name" ?>

        <div class="form-group{{ $errors->has($field) ? ' has-error' : '' }}">

            {!! Form::label($field, $label, ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::text($field, $value = $user->{$field} , ['class' => 'form-control', 'placeholder' => $label]) !!}

                @if ($errors->has($field))
                    <span class="help-block">
                        <strong>{{ $errors->first($field) }}</strong>
                    </span>
                @endif

            </div>
        </div>

        <!-- Email -->
        <?php $field = 'email'; $label = "Email" ?>

        <div class="form-group{{ $errors->has('token') ? ' has-error' : '' }}">
            {!! Form::label($field, $label, ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::text($field, $value = $user->{$field} , ['class' => 'form-control', 'placeholder' => $label]) !!}

                @if ($errors->has($field))
                    <span class="help-block">
                        <strong>{{ $errors->first($field) }}</strong>
                    </span>
                @endif
            </div>
        </div>

        {!! Form::submit('Submit', array('class' => 'btn btn-small btn-info')) !!}

        {!! Form::close() !!}
    </div>

@stop
@section('body_bottom')
    <script type="text/javascript">

        $("#independent").checked( function () {
                    $('#motor_carrier_id').attr('disabled', 'disabled');
                    $('#motor_carrier_id').select('');
                    $("#independent").attr("value", 1);
                }
        );
        $("#independent").unchecked( function () {
                    $('#motor_carrier_id').removeAttr('disabled');
                    $("#independent").attr("value", 0);
                }
        );

    </script>
@stop
