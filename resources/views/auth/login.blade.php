@extends('layouts.app')

@section('content')

    <div class="page-header">
        <h3>Login</h3>
    </div>

    <div class="row">
        <!--This is the start of the form field-->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'url' => array('/login'))) !!}
        {!! csrf_field() !!}

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

        <!-- Remember -->
        <div class="form-group">
            {!! Form::label('remember', 'Remember Me', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::checkbox('remember', $value = "", false, []) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-2"> </div>
            <div class="col-lg-6">
                {!! Form::submit('Login', array('class' => 'btn btn-small btn-info')) !!}
                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
        </div>

        {!! Form::close() !!}

    </div>
@endsection
