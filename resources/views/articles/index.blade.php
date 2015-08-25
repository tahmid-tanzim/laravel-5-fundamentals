@extends('app')
@section('content')
    <h1>Articles</h1>
    <hr>
    @foreach($articles as $article)
        <article>
            <!-- Approach 1 -->
            {{--<h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>--}}

            <!-- Approach 2 -->
            {{--<h3><a href="{{ action('ArticlesController@show', [$article->id]) }}">{{$article->title}}</a></h3>--}}

            <!-- Approach 3 -->
            <h3><a href="{{ url('/articles', $article->id) }}">{{$article->title}}</a></h3>

            <div class="body">{{$article->body}}</div>
        </article>
    @endforeach
@stop