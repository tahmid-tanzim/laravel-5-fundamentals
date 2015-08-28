@extends('app')
@section('content')
    {!! Form::open(['url' => 'password/reset']) !!}
    {!! Form::hidden('token', $token) !!}
    <div class="form-group">
        {!! Form::label('email', 'Email: ') !!}
        {!! Form::email('email',  old('email'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password: ') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation', 'Confirm Password: ') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Reset Password', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop