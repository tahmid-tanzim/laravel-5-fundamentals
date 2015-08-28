@extends('app')
@section('content')
<h1>Register</h1>
<hr/>
<!-- resources/views/auth/register.blade.php -->
{!! Form::open(['url' => 'auth/register']) !!}
<div class="form-group">
    {!! Form::label('username', 'Username: ') !!}
    {!! Form::text('username',  old('username'), ['class' => 'form-control']) !!}
</div>

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
    {!! Form::submit('Register', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
@stop