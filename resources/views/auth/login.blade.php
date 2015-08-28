@extends('app')
@section('content')
    <h1>Login</h1>
    <hr/>
    <!-- resources/views/auth/login.blade.php -->
    {!! Form::open(['url' => 'auth/login']) !!}
    <div class="form-group">
        {!! Form::label('email', 'Email: ') !!}
        {!! Form::email('email',  old('email'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password: ') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group checkbox">
        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>
    </div>

    <div class="form-group">
        {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop