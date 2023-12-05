@extends('layout')

@section('content')
<x-card>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1 text-laravel">
            Register
        </h2>
        <p class="mb-4">Create an account to participate!</p>
    </header>


    <form action="/users" method="post">
        @csrf
        <div class="mb-6">
            <label for="first_name" class="inline-block text-lg mb-2">
              First Name
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="first_name"
                value="{{ old('first_name') }}" />
            @error('first_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="last_name" class="inline-block text-lg mb-2">
              Last Name
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="last_name"
                value="{{ old('last_name') }}" />
            @error('last_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="birthdate" class="inline-block text-lg mb-2">
              Date of birth
            </label>
            <input type="date" class="border border-gray-200 rounded p-2 w-full" name="birthdate"
                value="{{ old('birthdate') }}" />
            @error('birthdate')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="inline-block text-lg mb-2">Gender</label>
        
            <div class="flex">
                <label class="mr-4">
                    <input type="radio" name="gender" value="male" {{ old('gender') === 'male' ? 'checked' : '' }}>
                    Male
                </label>
        
                <label class="mr-4">
                    <input type="radio" name="gender" value="female" {{ old('gender') === 'female' ? 'checked' : '' }}>
                    Female
                </label>
        
                <label>
                    <input type="radio" name="gender" value="prefer_not_to_say" {{ old('gender') === 'prefer_not_to_say' ? 'checked' : '' }}>
                    Prefer not to say
                </label>
            </div>
        
            @error('gender')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Email</label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                value="{{ old('email') }}" />
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="inline-block text-lg mb-2">
                Password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                value="{{ old('password') }}" />
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="inline-block text-lg mb-2">
                Confirm Password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Sign Up
            </button>
        </div>

        <div class="mt-8">
            <p>
                Already have an account?
                <a href="/login" class="text-laravel">Login</a>
            </p>
        </div>
    </form>

</x-card>
    
@endsection