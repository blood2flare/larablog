@extends('main')

@section('title', ' | Login')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center">Register on KS System</h1>
            <hr>
            {!! Form::open() !!}

            {!! Form::label('name', 'Full Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            <br>
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            <br>
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control', 'min-length' => '6']) !!}
            <br>
            {!! Form::label('password-confirm', 'Confirm Password') !!}
            {!! Form::password('password-confirm', ['class' => 'form-control', 'name' => 'password_confirmation']) !!}

            {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection