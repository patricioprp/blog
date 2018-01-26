<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\GenericUser;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->pluck('name','id');
        return view('admin.articles.create')
        ->with('categories',$categories)
        ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
      if($request->file('image')){//validamos que lo q se intente guardar sean imagenes
        //Manipulacion de Imagenes
        $file = $request->file('image');
        $name = 'blog_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/images/articles/';
        $file->move($path, $name);
      }
      $article = new Article($request->all());
      $article->user_id = \Auth::user()->id;
      $article->save();

      //antes de guardar la tabla pivot tag debemos antes guardar el articulo, porque necesitamos las llaves foraneas
      $article->tags()->sync($request->tags);


      $image = new Image();
      $image->name = $name;
      $image->article()->associate($article);// $image->article_id = $article->id; se usa associate para evitar coliciones en el caso de que varias personas esten creando en ese momento articulos con los mismos id
      $image->save();



        flash("El artículo '$article->title' ha sido creado con éxito.")->success()->important();
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
