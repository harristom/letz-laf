@extends('layout')

@section('content')
    <header>
        <h2>Edit</h2>
    </header>
    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') ?? $post->title }}" />
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content') ?? $post->content }}</textarea>
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
            <button type="submit">Update</button>
            <a href="/news">Back</a>
        </div>
    </form>
@endsection