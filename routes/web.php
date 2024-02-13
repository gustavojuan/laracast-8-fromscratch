<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the R outeServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('posts',[
        'posts'=>Post::latest('published_at')->with(['category','author'])->get()
    ]);
});

// Route Model Binding

//Route::get('/posts/{post}', function (Post $post) {
//        return view('post', compact('post'));
//});

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', compact('post'));
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('category', compact('category'));
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts'=>$author->posts
    ]);
});

