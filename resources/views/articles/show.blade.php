@extends('app')
@section('content')
    <h1>{{$article->title}}</h1>
    <h6>{{$article->published_at->diffForHumans()}}</h6>
    <article>
        {{$article->body}}
    </article>
@stop