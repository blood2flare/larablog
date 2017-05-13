@extends('main')

@section('title', ' | Login')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(['url' => route('password.request'), 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                    {!! Form::hidden('token', $token) !!}
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'required' => '', 'autofocus' => '']) !!}
                    <br>
                    {!! Form::label('password', 'New Password') !!}
                    {!! Form::password('password', ['class' => 'form-control', 'required' => '']) !!}
                    <br>
                    {!! Form::label('password_confirmation', 'Confirm Password') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => '']) !!}
                    <br>
                    {!! Form::submit('Change Password', ['class' => 'btn btn-primary btn-block form-spacing-top']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
