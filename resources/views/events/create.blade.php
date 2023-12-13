@extends('layout')

<style>
    #map {
        min-height: 350px;
        flex-grow: 1;
    }

    .event-create-form {
        padding: 30px;
        background-color: var(--card-bg);
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        max-width: 1400px;
        margin: 20px auto;
        border-radius: 7px;
    }

    .event-create-form__heading {
        font-size: 2.5rem;
        margin-bottom: 30px;
    }

    .event-create-form__form {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .event-create-form__left {
        display: flex;
        flex-direction: column;
        gap: 10px;
        flex-grow: 1;
    }

    .event-create-form__right {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .event-create-form__input {
        margin-top: 5px;
        display: block;
        min-width: 300px;
        width: 100%;
    }

    .event-create-form__submit {
        width: 100%;
    }
</style>

@section('content')
    <div class="event-create-form">
        <h2 class="event-create-form__heading">Create event</h2>
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="event-create-form__form"
            novalidate>
            @csrf
            <div class="event-create-form__left">
                <div class="event-create-form__item">
                    <label for="name">Event name:
                        <input type="text" name="name" id="name" required value="{{ old('name') }}"
                            class="event-create-form__input">
                    </label>
                    @error('name')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div class="event-create-form__item">
                    <label for="description">Description:
                        <textarea name="description" id="description" class="event-create-form__input" cols="30" rows="10" required>{{ old('description') }}</textarea>
                    </label>
                    @error('description')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div class="event-create-form__item">
                    <label for="distance">Distance (km)
                        <input type="number" name="distance" id="distance" class="event-create-form__input" min="0.01"
                            step="0.01" required value="{{ old('distance') }}">
                    </label>
                    @error('distance')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div class="event-create-form__item">
                    <label for="date">Date: </label>
                    <input type="datetime-local" name="date" id="date" class="event-create-form__input" required
                        value="{{ old('date') }}">
                    @error('date')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div class="event-create-form__item">
                    <label for="name">
                        Image:
                        <input type="file" name="image_path" class="event-create-form__input">
                    </label>
                </div>
            </div>
            <div class="event-create-form__right">
                <label for="location">Location: </label>
                <x-map-input-card />
            </div>
            <div class="event-create-form__submit"><button>Add</button></div>
        </form>
    </div>
@endsection
