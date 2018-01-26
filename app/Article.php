<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\Sluggable;//se agrego para el slug

class Article extends Model /*implements Sluggableinterface*/
{
    /*use SluggableTrait;*/
  /*  use Sluggable; //se agrego para el slug
    //se agrego la funcion sluggable para ver si funciona el codigo
public function sluggable()
{
  return [ 'slug' => [ 'source' => 'title' ] ];
}*/

    protected $table = "articles";
    protected $fillable = ['title','content','category_id','user_id'];

    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function images()
    {
      return $this->hasmany('App\Image');
    }
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }
}
