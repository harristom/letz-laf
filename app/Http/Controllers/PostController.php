<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    
    // Show all the posts
    public function index(){

        //returns the view from file index inside of the folder posts
        return view('posts.index',[
            //passes an array with a key 'posts' and a value of the latest posts retrieved from the database
            'posts' => Post::latest()->get(),
        ]);
    }





}
