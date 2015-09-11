@extends('app')
@section('content')
    <h1>Reset Password</h1>
    <hr/>
    {!! Form::open(['url' => 'password/email']) !!}
    <div class="form-group">
        {!! Form::label('email', 'E-mail Address: ') !!}
        {!! Form::email('email',  old('email'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Send Password Reset Link', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop