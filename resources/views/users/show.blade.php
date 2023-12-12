@extends('users.profile')

@section('information')
    {{--
    <div class="profile-card__info__item">
        <div>
            <h3>First Name</h3>
            <p>{{$user->first_name}}</p>
        </div>
        <div>
            <h3>Last Name</h3>
            <p>{{$user->last_name}}</p>
            
        </div>
    </div>
    <div class="profile-card__info__item">
        <div>
            <h3>Date Of Birth</h3>
            <p>{{date("F j, Y", strtotime($user->birthdate)) }}</p>
        </div>
        <div>
            <h3>Gender</h3>
            <p>{{$user->gender}}</p>
        </div>
    </div>
    <div class="profile-card__info__item">
        <div>
            <h3>Email</h3>
            <p>{{$user->email}}</p>
        </div>
        <div>
            <h3>Password</h3>
            <p>**********</p>
        </div>
    </div>
    

    <h3>Attended events</h3>

    @foreach ($sortedResults as $result)
        <article class="article-results-container">
            <a href="/events/{{$result->event->id}}">{{ $result->event->name }}</a>
            <div class="article-results-container__div">
                <div class="article-results-container__div-div">
                    {{$result->rank}}
                </div>
                <p>{{ sprintf('%02d:%02d:%02d', $result->finish_time / 3600, ($result->finish_time / 60) % 60, $result->finish_time % 60) }}</p>
            </div>
        </article>
    @endforeach
--}}


<h3>Attended Events</h3>

<div class="attended-events-container">
    @if ($user->results->isNotEmpty())
        @foreach ($user->results as $result)
            <article class="article-results-container">
                <a href="{{ route('events.show', $result->event) }}" class="event-link">
                    <i class="fas fa-calendar-alt"></i> {{ $result->event->name }}
                </a>
                <div class="result-details">
                    <div class="rank">
                        <i class="fas fa-trophy"></i>  
                        {{-- @php
                            // Retrieve the finish time from the pivot table of the event
                            $finishTime = $event->pivot->finish_time;

                            // Calculate the rank of the event based on the finish time
                            $rank = $event->users->where('pivot.finish_time', '<', $finishTime)->count() + 1;
                        @endphp
                        
                        {{ $rank }} --}}

                        {{-- This is the worst possible way of doing this, except for all the others I tried ;) --}}
                        @foreach ($result->event->results as $rankedResult)
                            @if ($rankedResult->user_id == $user->id) {{$loop->index + 1}} @endif
                        @endforeach
                    </div>
                    <p class="finish-time">
                        <i class="fas fa-clock"></i> {{ sprintf('%02d:%02d:%02d', $result->finish_time / 3600, ($result->finish_time / 60) % 60, $result->finish_time % 60) }}
                    </p>
                </div>
            </article>
        @endforeach
    @else
        <p>No attended events.</p>
    @endif
</div>


@endsection

<style>
/*
    .article-results-container{
        display: flex;
        flex-direction: column;
        border: 1px solid lightslategrey;
        padding: 10px 20px;
    }

    .article-results-container__div{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-top: 10px;
    }

    .article-results-container__div p{
        font-size: 20px;
    }

    .article-results-container__div-div{
        font-size: 20px;
    }
*/

.attended-events-container {
    width: 40%;
    text-align: center;
}

.article-results-container {
    border: 2px solid var(--primary-color);
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.event-link {
    display: block;
    padding: 10px;
    background-color: var(--primary-color);
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

.result-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}

.rank, .finish-time {
    font-size: 18px;
    color: #333;
}

.rank i, .finish-time i {
    margin-right: 5px;
    color: #e67e22;
}

    

</style>
