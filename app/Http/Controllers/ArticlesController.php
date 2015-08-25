<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        $article = Article::findOrFail($id);

        /* Debug */
//        dd($article);
//        return $article;

        /* findOrFail is the replacement of below code */
//        if(is_null($article)) {
//            abort(404);
//        }

        return view('articles.show', compact('article'));
    }
}