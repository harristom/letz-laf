<div>
    <h3>{{$post->title}}</h3>
    <img src="{{ asset( 'images/' . $post->image_path) }}" alt="">
    <p>{{$post->content}}</p>
    <small>{{$post->created_at}}</small>
</div>

<style>
    div {
        border: 1px solid white; 
        border-radius: 25%;
        padding: 15px; 
        margin: 10px; 
        width: 200px; 
        box-shadow: 0 4px 8px rgba(87, 87, 87, 0.1); 
    }

    img {
        max-width: 100%; 
        height: auto; 
    }

    h4 {
        color: orange;
        margin-top: 10px; 
        font-size: 18px; 
    }

</style>