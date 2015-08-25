<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Carbon\Carbon;
use Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
//        $articles = Article::all();
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        /* Debug -> dd() is die & dump */
//        dd($article);
//        return $article;

        /* findOrFail is the replacement of below code */
//        if(is_null($article)) {
//            abort(404);
//        }

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        Article::create(Request::all());
        return redirect('articles');
    }
}