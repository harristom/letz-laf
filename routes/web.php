<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//only to test, after must be deleted
Route::get('/', function () {
    return view('layout');
});

/*----------------------POSTS----------------------*/
//show all the news
Route::get('/news', [PostController::class, 'index']);

//Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Add user to database
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

//Logout from user session
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
//Added a name to the route so that we can use it through middleware
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//log user in
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');
//Show profile page
Route::get('/profile/{id}', [UserController::class, 'show'])
->where('id', '[0-9]+')->middleware('auth');

// Resource controller for events
// https://laravel.com/docs/10.x/controllers#actions-handled-by-resource-controller
Route::resource('events', EventController::class);

//Show all events
Route::get('/events', [EventController::class, 'index']);

Route::get('/about-us', function(){
    return view ('about-us');
});

//link to the terms and conditions
Route::view('/terms', 'terms');


// Register for an event
Route::post('/events/{event}/register', [EventController::class, 'register'])
    ->middleware('auth')
    ->name('events.register');
