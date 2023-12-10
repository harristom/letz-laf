@extends('layout')

@section('content')
    <div class="create-post-container">
        <header class="create-post-container__header">
            <h2>New Post</h2>
        </header>
        <form action="/news" method="post" enctype="multipart/form-data" class="create-post-container__form">
            @csrf
            <div class="create-post-container__form-div">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" />
                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="create-post-container__form-div">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
                @error('content')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="create-post-container__form-div">
                <label for="image_path">Image</label>
                <input type="file" name="image_path" id="image_path" />
                @error('image_path')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="create-post-container__form-div-btn">
                <button>Create Post</button>
                <a href="/news">Back</a>
            </div>
        </form>
    </div>
@endsection

<style>

    .create-post-container{
        width: 100% ;
        margin: 0 auto;
    }

    .create-post-container__header{
        text-align: center;
        color: var(--primary-color);
        padding: 50px 0 20px 0;
        font-size: 25px;
    }

    .create-post-container__form{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        margin-bottom: 80px;
    }

    .create-post-container__form-div{
        width: 600px;
        display: flex;
        flex-direction: column;
    }

    .create-post-container__form-div label{
        padding: 20px 0;
    }

    .create-post-container__form-div-btn{
        margin: 30px 0 0; 
    }

    .create-post-container__form-div-btn a{
        padding-left: 40px; 
    }


</style>