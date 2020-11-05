<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

Route::get('posts', [ClientController::class, 'getAllPosts']);

Route::get('posts/{id}', [ClientController::class, 'getPostsId']);

Route::get('xinchao/{asd}', [ClientController::class, 'getHello']);

Route::get('test', [ClientController::class, 'haha']);

Route::get('add-post', [ClientController::class, 'addPost']);

Route::get('update-post/{id}', [ClientController::class, 'updatePost']);

Route::get('delete-post/{id}', [ClientController::class, 'deletePost'])->middleware('checkuser');

Route::get('test-font', function() {
    return view('layouts.maters');
});

Route::get('home', function() {
    return view('home');
})->name('home');

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('contact', function() {
    return view('contact');
})->name('contact');

Route::get('postss', [PostController::class, 'getAllPosts'])->name('getallpost');

Route::get('add-post', [PostController::class, 'addPost'])->name('post.add');

Route::post('add-post', [PostController::class, 'addPostSubmit'])->name('post.addsubmit');

Route::get('postss/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');

Route::get('delete-post/{id}', [PostController::class, 'deletePost'])->name('post.delete');

Route::get('edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');

Route::post('update-post', [PostController::class, 'updatePost'])->name('post.update');
