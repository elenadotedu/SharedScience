@extends('layouts.app')

@section('content')

    <div class="page-header">
        <h3>Register</h3>
    </div>

    <p class="description_below_header">
        Register here.
    </p>

    <div class="row">
        <!--This is the start of the form field-->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'url' => array('/register'))) !!}
        {!! csrf_field() !!}

        <!--First Name-->
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            {!! Form::label('first_name', 'First Name', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::text('first_name', $value = "", ['class' => 'form-control', 'placeholder' => 'First Name']) !!}

                @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <!--Last Name-->
        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            {!! Form::label('last_name', 'Last Name', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::text('last_name', $value = "", ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}

                @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <!--Email-->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('email', 'Email', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::text('email', $value = "", ['class' => 'form-control', 'placeholder' => 'Email']) !!}

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <!--Password-->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            {!! Form::label('password', 'Password', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::password('password', ['class' => 'form-control']) !!}

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <!--Confirm Password-->
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-2"> </div>
            <div class="col-lg-6">
                {!! Form::submit('Register', array('class' => 'btn btn-small btn-info')) !!}
            </div>
        </div>
        {!! Form::close() !!}

    </div>

@endsection

@section('body_bottom')
@endsection
