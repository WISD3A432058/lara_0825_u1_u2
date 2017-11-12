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

Route::get('/tests', function () {
  /*
    //使用 create方法
    \App\Post :: create ([
        'title' => 'test title',
        'content '=> 'test content',
    ]);

    //改用 new 的方式新增資料
    $post=new\App\Post();
    $post->title='test title';
    $post->content='test content';
    $post->save();

    //使用 all方法
    $posts=\App\Post::all();
    dd($posts);

    //使用 find 方法
    $post=\App\Post::find(1);
    dd($post);
*/
    //練習條件式
    $posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
    dd($posts);

});
