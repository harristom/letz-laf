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

    //Show create blog form
    public function create(){

        return view('posts.create');
    }

    //Store new post in DB
    public function store(Request $request){
    
        //validation form fields
        //ensures that the 'title' and 'content' fields are required
        //that the 'image_path' field is an image file with a maximum size of 2MB and a file extension of png, jpg, or jpeg
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_path'=> [ 'image', 'mimes:png,jpg,jpeg', 'max:2048'],     
        ]);

        //checks if the "image_path" parameter exists
        if(request('image_path')){
            //it does, it stores the uploaded file in the "public/images" directory
            $formFields['image_path'] = $request->file('image_path')->store('images', 'public');
        }
        //insert into user_id the id of the user that created the post
        $formFields['user_id']= auth()->user()->id;
        //create the post
        Post::create($formFields);
        //redirect to the news page and show a message
        return redirect('/news')->with('message', 'Post created successfully!');
    }



}
