<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Auth\AuthenthicateSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/* Kay sir 
Use App\Models\Post;
lang
*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome');

//Route::get('/home', [PostsController::class,'index'])->name('posts.index');

Route::get('/login', [AuthenthicateSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenthicateSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');


Route::middleware('auth')->group(function () {
    Route::get('/home', function () {

        //$posts = Post::all();
        // auth()->loginUsingId(39);
        //dd(auth()->user());
        //dd($posts);
        /* return view('home',[
        'posts', => $posts,
    ]);
    return view('home', [
        'posts' => auth()->user()->feed,
    ]);*/

        return view('home', [
            'posts' => auth()->user()->feed,
        ]);
    })->name('home');


    Route::get('/profile', function () {
        return view('profile');
    });
});
/*Route::get('/{username}', function () {
    return view('profile');
});*/