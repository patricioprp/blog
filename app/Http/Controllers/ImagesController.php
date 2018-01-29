<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    public function index()
    {
      $images = Image::orderBy('id','ASC')->paginate(10);
      $images->each(function($iamges){ //se hace un each que es un como un for each porque es una relacion de uno a muchos
        $iamges->article;
      });
      return view('admin.image.index')->with('images',$images);
    }
}
