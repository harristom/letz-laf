 @php
     $fallbackImages = [asset('images/fallback1.jpg'), asset('images/fallback2.jpg'), asset('images/fallback3.jpg'), asset('images/fallback4.jpg'), asset('images/fallback5.jpg')];
     $fallbackImagePath = $fallbackImages[array_rand($fallbackImages)]; // Get a random image path
 @endphp

 {{-- Including CSS --}}
 <link rel="stylesheet" href="{{ asset('css/event-card-style.css') }}">

 {{-- The card --}}
 <article class="event-card">
     <a href="{{ route('events.show', $event) }}" class="event-card__link">
         {{-- The photo with the date --}}
         <section class="event-card__photo">
             <time class="event-card__time" datetime="{{ $event->date }}">
                 <span class="event-card__day">{{ \Carbon\Carbon::parse($event->date)->format('d') }}</span>
                 <span class="event-card__month">{{ \Carbon\Carbon::parse($event->date)->format('M') }}</span>
             </time>
             <img src="{{ $event->image_path ? asset('images/' . $event->image_path) : $fallbackImagePath }}"
                 alt="Fallback Image" class="event-card__img">
         </section>
         {{-- The title and details --}}
         <section class="event-card__details">
             <h2 class="event-card__title">{{ $event->name }}</h2>

             <p class="event-card__summary">
                 {{ $event->description }}
             </p>
         </section>
         {{-- The icons with the distance and participants --}}
         <aside class="event-card__distance-and-participants">
             <p class="event-card__distance">
                 <i class="fa-solid fa-person-running event-card__icon"></i>{{ $event->distance }} km
             </p>
             <p class="event-card__participants">
                 <i class="fa-solid fa-user event-card__icon "></i>{{ count($event->participants) }}
             </p>
         </aside>
     </a>
 </article>
