<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/news',[PostController::class,'index']);

//Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Resource controller for events
// https://laravel.com/docs/10.x/controllers#actions-handled-by-resource-controller
Route::resource('events', EventController::class);


//link to the terms and conditions
Route::view('/terms', 'terms');
