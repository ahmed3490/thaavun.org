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



Route::get ('/test',function(){
return App\User::find(1)->profile;

});


Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
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

        Route::get('/posts',[
        'uses' => 'PostController@index',
        'as' => 'posts'
        ]);

        Route::get('/post/delete/{id}', [
        'uses' => 'PostController@destroy',
         'as' => 'post.delete' 
        ]); 

       Route::get('/posts/trashed',[
       'uses' => 'PostController@trashed',
        'as' => 'posts.trashed'
        ]);   

        Route::get('/post/kill/{id}',[
        'uses' => 'PostController@kill',
        'as' => 'post.kill'
        ]); 

        Route::get('/post/restore/{id}',[
        'uses' => 'PostController@restore',
        'as' => 'post.restore'
        ]); 
   
        Route::get('/post/edit/{id}',[
        'uses' => 'PostController@edit',
        'as' => 'post.edit'
         ]); 

         Route::post('/post/update/{id}',[
            'uses' => 'PostController@update',
            'as' => 'post.update'
             ]); 

        Route::get('/tags',[
           'uses' => 'TagsController@index',
           'as' => 'tags'
        ]);

        Route::get('/tag/create',[
            'uses' => 'TagsController@create',
            'as' => 'tag.create'
         ]);


        Route::get('/tag/edit/{id}',[
            'uses' => 'TagsController@edit',
            'as' => 'tag.edit'
         ]);

         Route::post('/tag/update/{id}',[
            'uses' => 'TagsController@update',
            'as' => 'tag.update'
         ]);

         Route::post('/tag/store',[
            'uses' => 'TagsController@store',
            'as' => 'tag.store'
         ]);
    

         Route::get('/tag/delete/{id}',[
            'uses' => 'TagsController@destroy',
            'as' => 'tag.delete'
         ]);

          
         Route::get('/users',[
            'uses' => 'UsersController@index',
            'as' => 'users'
         ]);

         Route::get('/users/create',[
            'uses' => 'UsersController@create',
            'as' => 'user.create'
         ]);
         
         Route::post('/users/store',[
            'uses' => 'UsersController@store',
            'as' => 'user.store'
         ]);

         Route::get('/users/admin/{id}',[
            'uses' => 'UsersController@admin',
            'as' => 'user.admin'
         ]);

         Route::get('/users/not-admin/{id}',[
            'uses' => 'UsersController@not_admin',
            'as' => 'user.not.admin'
         ]);


});


