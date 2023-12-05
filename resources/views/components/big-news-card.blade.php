{{--news page card--}}

<div class="news-content-container">
    <div class="news-content news-div-content">
        <h3>{{$post->title}}</h3>
        <img src="{{ asset( 'images/' . $post->image_path) }}" alt="">
        <p>{{$post->content}}</p>
    </div>
    <div class="news-content news-div-date">
        <small>Created : {{$post->created_at}}</small>
    </div>
</div>

<style>
    /*------------------- BIG NEWS PAGE -------------------*/
    .news-content-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        margin: 20px; 
        border-radius: 10px;
        padding: 10px 25px 25px 25px; 
        box-shadow: 0px 0px 20px -3px rgba(0,0,0,0.2);
        transition: transform .5s;
    }
    .news-content-container:hover{
        transform: scale(1.1);
    }

    .news-content {
        width: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .news-content h3 {
        text-align: center;
        font-size: 30px; 
    }

    .news-content img {
        width: 500px; 
        margin: auto;
        height: auto; 
        border-radius: 5px;
    }

    .news-content p {
        font-size: 20px; 
        text-align: center;
        hyphens: auto; 
	    text-align: justify
    }

    .news-div-date {
        display: flex;
        flex-direction: column;
        justify-content: left;
    }

    .news-div-date small {
        text-align: left
    }


</style>