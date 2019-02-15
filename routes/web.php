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
Route::get('category/select',function(){
    return \App\Http\Resources\Category::collection(\App\Models\Category::all());
});

Route::post('category/add','CategoryController@add');

Route::post('article/add','ArticleController@add');

Route::get('article/select',function(){
    $data = ['code'=>200,'msg'=>'SUCCESS','data'=>\App\Http\Resources\Article::collection(\App\Models\Article::paginate(10))];
    return response()->json($data,200);
});

Route::get('article/show/{id}',function($id){
    return new \App\Http\Resources\Article(\App\Models\Article::find($id));
});


Route::post('tag/add',['uses'=>'TagController@add']);
Route::get('tag/show/{id}',['uses'=>'TagController@show']);
Route::get('tag/select',['uses'=>'TagController@select']);
/*Route::get('tag/select', function(){
    //return \App\Models\Tag::find(1);
    return new \App\Http\Resources\Tag(\App\Models\Tag::find(1));
});*/

Route::get('tag/delete',['uses'=>'TagController@delete']);
Route::post('tag/update',['uses'=>'TagController@update']);

Route::get('/', function () {
    return view('welcome');
});
