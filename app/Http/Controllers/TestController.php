<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class TestController extends Controller
{
    public function view($id){
      //dd($id);
      $article = Article::find($id);

      $article->user;
      $article->category;
      $article->tags;
      //dd($article);
      return view('test/index',['article' => $article]);
    }
}
