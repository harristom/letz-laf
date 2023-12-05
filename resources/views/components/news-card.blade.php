     <div class="container">
         <h4>{{$post->title}}</h4>
        <div class="content one">
            <img src="{{ $post->image_path}}" alt="">
        </div>
        <div class="content two">
            <p>
               {{$post->content}}
            </p>
         </div>
    </div>

<style>
.container{
    display: flex;
    flex-direction: row;
    border: 1px solid white; 
    border-radius: 25%;
    padding: 15px; 
    margin: 10px; 
    width: 500px; 
    box-shadow: 0 4px 8px rgba(87, 87, 87, 0.1); 
}

.content{
    display: flex;
    flex-direction: column;
}

.one{
    width: 30%;
}

.two{
    width: 60%;
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