<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', function () {
    return view('welcome');


});


Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function() {

        return view('admin.index');
    });



    Route::resource('admin/users', 'AdminUsersController', [ 'names'=>[

        'index'=>'admin.users.index',
        'create' => 'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',
        'update'=>'admin.users.update',
        'destroy'=>'admin.users.destroy',

    ]
    ]);

    Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);


    Route::resource('admin/posts', 'AdminPostsController', ['names'=>[

        'index'=>'admin.posts.index',
        'create' => 'admin.posts.create',
        'store'=>'admin.posts.store',
        'edit'=>'admin.posts.edit',
        'update'=>'admin.posts.update',
        'destroy'=>'admin.posts.destroy',
        'post'=>'admin.posts.post',

    ]]);


    Route::resource('admin/categories','AdminCategoriesController', ['names'=>[

        'index'=>'admin.categories.index',
        'create' => 'admin.categories.create',
        'store'=>'admin.categories.store',
        'edit'=>'admin.categories.edit',
        'update'=>'admin.categories.update',
        'destroy'=>'admin.categories.destroy',



    ]]);
    Route::resource('admin/media', 'AdminMediasController', ['names'=>[


        'index'=>'admin.media.index',
        'create' => 'admin.media.create',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit',
        'update'=>'admin.media.update',
        'destroy'=>'admin.media.destroy',



    ]]);

    Route::resource('admin/comments', 'PostCommentsController', ['names'=>[


        'index'=>'admin.comments.index',
        'create' => 'admin.comments.create',
        'store'=>'admin.comments.store',
        'edit'=>'admin.comments.edit',
        'update'=>'admin.comments.update',
        'destroy'=>'admin.comments.destroy',
        'show'=>'admin.comments.show',



    ]]);

    Route::resource('admin/comments/replies', 'CommentRepliesController', ['names'=>[

        'index'=>'admin.replies.index',
        'create' => 'admin.replies.create',
        'store'=>'admin.replies.store',
        'edit'=>'admin.replies.edit',
        'update'=>'admin.replies.update',
        'destroy'=>'admin.replies.destroy',




    ]]);





});