@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div class="page-header">
        <h3>Reset Password</h3>
    </div>

    <div class="row">
        <!--This is the start of the form field-->
        {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'url' => array('/password/email'))) !!}
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

        <div class="form-group">
            <div class="col-lg-2"> </div>
            <div class="col-lg-6">
                {!! Form::submit('Send Password Reset Link', array('class' => 'btn btn-small btn-info')) !!}
            </div>
        </div>

        {!! Form::close() !!}

    </div>
@endsection

