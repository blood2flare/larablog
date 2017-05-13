@extends('main')

@section('title', ' | Login')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center">Login to KS System</h1>
            <hr>
            {!! Form::open() !!}
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            <br>
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            <br>
            {!! Form::checkbox('remember') !!} {!! Form::label('remember', 'Remember Me') !!}
            {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block form-spacing-top']) !!}
            {!! Form::close() !!}
            <a href="{{ route('password.request') }}">Forgot your password ?</a>
        </div>
    </div>
@endsection