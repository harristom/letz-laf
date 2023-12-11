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
Route::get('/news/create', [PostController::class, 'create'])->middleware('role:Admin,Organiser');
//store a new post
Route::post('/news', [PostController::class, 'store'])->middleware('role:Admin,Organiser');

/*----------------------USERS----------------------*/
//Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
//Add user to database
Route::post('/users', [UserController::class, 'store']);

//Logout from user session
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
//Added a name to the route so that we can use it through middleware
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
//log user in
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');

//manage page for the Admin
//show manage
Route::get('/users/manage', [UserController::class, 'manage'])->middleware('role:Admin');
//delete user
// TODO: Allow user to delete their account
Route::delete('/users/{id}', [UserController::class, 'destroy'])->middleware('role:Admin');
//edit user
Route::get('/users/{id}/edit', [UserController::class, 'editAdmin'])->middleware('role:Admin');
//update user
Route::put('/users/{id}', [UserController::class, 'updateAdmin'])->middleware('role:Admin');
// Admin add new user
Route::get('/users/create', [UserController::class, 'createAdmin'])->middleware('role:Admin');

/*-------------------------------PROFILE------------------------------- */
//show profile page
//Route::get('/profile/{id}', [UserController::class, 'show'])->middleware('auth');

Route::get('/profile/{user}', [UserController::class, 'attendedEvents'])->name('users.attended-events');


//Show update profile page
Route::get('/profile/{id}/edit', [UserController::class, 'edit'])->middleware('auth');
//Update user info
Route::put('/profile/{id}', [UserController::class, 'update'])->middleware('auth');

/*----------------------EVENTS----------------------*/
// https://laravel.com/docs/10.x/controllers#actions-handled-by-resource-controller
Route::resource('events', EventController::class)->except(['index', 'show'])->middleware('role:Admin,Organiser');
Route::resource('events', EventController::class)->only(['index', 'show']);

// Register for an event
Route::post('/events/{event}/register', [EventController::class, 'register'])->middleware('auth')->name('events.register');

/*-----------------------MISC-----------------------*/
Route::view('/about-us', 'about-us')->name('about');

//link to the terms and conditions
Route::view('/terms', 'terms')->name('terms-and-cond');
