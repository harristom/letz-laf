@extends('layout')

@section('content')
    <style>
        .event-edit-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .event-edit-form__item {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 30px;
        }

        .event-edit-form__heading {
            margin: 30px 0px;
            font-size: 2.5rem;
            text-align: center;
        }

        .event-edit-form__btns {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>

<h2 class="event-edit-form__heading">Edit</h2>
<form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="event-edit-form">
        @csrf
        @method('PUT')
        <div class="event-edit-form__item">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') ?? $post->title }}" />
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="event-edit-form__item">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content') ?? $post->content }}</textarea>
            @error('content')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="event-edit-form__item">
            <label for="image_path">Image</label>
            <input type="file" name="image_path" id="image_path" />
            @error('image_path')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="event-edit-form__btns">
            <button type="submit">Update</button>
            <a href="/news">Back</a>
        </div>
    </form>
@endsection
