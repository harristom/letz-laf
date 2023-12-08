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

//link to homepage
Route::view('/', 'index');

/*----------------------POSTS----------------------*/

//show all the news
Route::get('/news', [PostController::class, 'index']);
//create a new post
Route::get('/news/create', [PostController::class, 'create']);
//store a new post
Route::post('/news', [PostController::class, 'store']);

/*----------------------USERS----------------------*/
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

/*----------------------EVENTS----------------------*/
// https://laravel.com/docs/10.x/controllers#actions-handled-by-resource-controller
Route::resource('events', EventController::class);

// Register for an event
Route::post('/events/{event}/register', [EventController::class, 'register'])
    ->middleware('auth')
    ->name('events.register');

/*-----------------------MISC-----------------------*/
Route::get('/about-us', function(){
    return view ('/about-us');
})->name('about');

//link to the terms and conditions
Route::view('/terms', 'terms')->name('terms-and-cond');
