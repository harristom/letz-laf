@extends('layout')

@section('content')
    <header>
        <h2>Create a Post</h2>
    </header>
    <form action="/news" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" />
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
            @error('content')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="image_path">Image</label>
            <input type="file" name="image_path" id="image_path" />
            @error('image_path')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button>Create Post</button>
            <a href="/news">Back</a>
        </div>
    </form>
@endsection