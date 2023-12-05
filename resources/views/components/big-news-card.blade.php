{{--news page card--}}

<div class="content-container">
    <h3>{{$post->title}}</h3>
    <img src="{{ asset( 'images/' . $post->image_path) }}" alt="">
    <p>{{$post->content}}</p>
    <small>{{$post->created_at}}</small>
</div>

<style>
    .content-container {
        width: 80%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 30px auto; 
        border-radius: 10px;
        padding: 20px; 
        box-shadow: 0px 0px 15px -3px rgba(0,0,0,0.1);
    }

    img {
        max-width: 400px; 
        margin: auto;
        height: auto; 
    }

    h3 {
        text-align: center;
        font-size: 30px; 
    }


</style>