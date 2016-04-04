@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3>Set Password</h3>
    </div>

    <div class="row">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

                    <!--This is the start of the form field-->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'url' => array('/password/reset'))) !!}
        {!! csrf_field() !!}

        <input type="hidden" name="token" value="{{ $token }}">

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
                {!! Form::submit('Set Password', array('class' => 'btn btn-small btn-info')) !!}
            </div>
        </div>

        {!! Form::close() !!}

    </div>
@endsection
