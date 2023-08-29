<?php

namespace App\Http\Controllers;
Use App\Models\Post; //oww baka kaya d gumagana dahil dito
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        Route::get('/home', function () {

            $posts = Post::all();
            //dd($posts);
            return view('home',[
                'posts' => $posts,
            ]);
            
        })->name('home');
        
    }
}
