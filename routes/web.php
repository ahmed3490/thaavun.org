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
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});

Route::get('/kashnammadhu', function () {
    return view('kashnammadhu');
});
Auth::routes();



Auth::routes();






Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){

      Route::get('/home',[
       'uses' => 'HomeController@index',
        'as' => 'home'   
        
      ]);

      Route::get('/posts/create',[
        'uses' => 'PostController@create',
        'as' => 'posts.create'
        ]);
        
        Route::post('/posts/store',[
            'uses' => 'PostController@store',
            'as' => 'posts.store'
            ]);

       Route::get('/category/create',[
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
        ]);

       
        Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store' 
       ]); 
    
       Route::get('/categories',[
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
        ]);

        Route::get('/category/edit{id}',[
            'uses' => 'CategoriesController@edit',
            'as' => 'category.edit'
            ]);

        Route::get('/category/delete{id}',[
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
        ]);

        
        Route::post('/category/update{id}', [
            'uses' => 'CategoriesController@update',
            'as' => 'category.update' 
           ]); 



});


