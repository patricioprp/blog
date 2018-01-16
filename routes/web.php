<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('hola', function(){
  return view('test/index');
});*/
Route::get('saludo/{nombre?}', function($nombre = "no coloco su nombre"){
  echo "El nombre ingresado es :".$nombre;
});
/*GRUPOS DE RUTAS, SE LA DEBE LLAMAR DE LA SIGUIENTE MANERA:
http://127.0.0.1:8000/saludo/patricio DONDE "PATRICIO" ES OPCIONAL*/

Route::group(['prefix' => 'articles'] , function(){

  Route::get('view/{id}',[
    'uses' => 'TestController@view',
    "as" => 'articlesView'
  ]);
  /*
  Route::get('view/{articles?}', function($article = "vacio"){
    echo $article;
  });
  */
});

//RUTAS DEFINITIVAS DE LA APLICACION
Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){

   Route::resource('users','UserController');
   Route::get('users/{id}/destroy',[
     'uses' => 'UserController@destroy',
     'as' =>'admin.users.destroy'
   ]);
});
Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){

   Route::resource('categories','CategoriesController');
   Route::get('categories/{id}/destroy',[
     'uses' => 'CategoriesController@destroy',
     'as' =>'admin.categories.destroy'
   ]);
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
