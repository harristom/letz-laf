<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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

    public function edit($id)
    {
        $post = Post::find($id);
        //Check if logged in user is the owner
        // TODO: Allow admin to edit and only allow author to edit if they still have rights
        if($post->user_id != auth()->id()){
            abort(403, 'Unauthorized action.');
        }

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request , Post $post)
    {
        // TODO: Add check user permission
        $validated = $request->validate([
            'title'=>'required|string',
            'content'=> 'required|string',
            'image_path'=> 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('posts', 'public');

        }
        $post->update($validated);

        return redirect()->route('posts.index')->with('message', 'Post updated successfully');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('message', 'Post deleted!');
    }

}
