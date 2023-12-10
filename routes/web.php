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



/*-------------------------------------------PUBLIC------------------------------------------------------*/
//show the home page
Route::view('/', 'index');

//show all the events
// https://laravel.com/docs/10.x/controllers#actions-handled-by-resource-controller
Route::resource('events', EventController::class);
// Register for an event
Route::post('/events/{event}/register', [EventController::class, 'register'])->name('events.register');

//Show register form
Route::get('/register', [UserController::class, 'create']);
//Add user to database
Route::post('/users', [UserController::class, 'store']);

//Show login form
//Added a name to the route so that we can use it through middleware
Route::get('/login', [UserController::class, 'login'])->name('login');
//log user in
Route::post('/login', [UserController::class, 'authenticate']);

//Logout from user session
Route::post('/logout', [UserController::class, 'logout']);

//show all the news
Route::get('/news', [PostController::class, 'index']);


//view profile from others ???
//show profile page
Route::get('/profile/{id}', [UserController::class, 'show']);



//show about us page
Route::view('/about-us', 'about-us')->name('about');
//link to the terms and conditions
Route::view('/terms', 'terms')->name('terms-and-cond');

/*-------------------------------------------ADMIN------------------------------------------------------*/
Route::middleware(['auth', 'checkRole:Admin'])->group(function () {
    // Your protected Admin routes here
    
    //show manage
    Route::get('/users/manage', [UserController::class, 'manage']);
    //delete user
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->where('id', '[0-9]+');
    //edit user
    Route::get('/users/{id}/edit', [UserController::class, 'editAdmin'])->where('id', '[0-9]+');
    //update user
    Route::put('/users/{id}', [UserController::class, 'updateAdmin'])->where('id', '[0-9]+');
    //add new user
    Route::get('/users/create', [UserController::class, 'createAdmin']);

    //create a new post
    Route::get('/news/create', [PostController::class, 'create']);
    //store a new post
    Route::post('/news', [PostController::class, 'store']);

    //Show update profile page
    Route::get('/profile/{id}/edit', [UserController::class, 'edit'])->where('id', '[0-9]+');
    //Update user info
    Route::put('/profile/{id}', [UserController::class, 'update'])->where('id', '[0-9]+');

});
/*-------------------------------------------ORGANISER------------------------------------------------------*/
Route::middleware(['auth', 'checkRole:Organiser'])->group(function () {
    // Your protected Organiser routes here

    //create a new post
    Route::get('/news/create', [PostController::class, 'create']);
    //store a new post
    Route::post('/news', [PostController::class, 'store']);
    //Show update profile page
    Route::get('/profile/{id}/edit', [UserController::class, 'edit'])->where('id', '[0-9]+');
    //Update user info
    Route::put('/profile/{id}', [UserController::class, 'update'])->where('id', '[0-9]+');
});
/*-------------------------------------------MEMBER------------------------------------------------------*/
Route::middleware(['auth', 'checkRole:Member'])->group(function () {
    // Your protected Member routes here

    //Show update profile page
    Route::get('/profile/{id}/edit', [UserController::class, 'edit'])->where('id', '[0-9]+');
    //Update user info
    Route::put('/profile/{id}', [UserController::class, 'update'])->where('id', '[0-9]+');


});