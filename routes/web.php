<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;
// use App\Models\Event;

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

// Route::get('/', function () {
//     return view('index');
// });


//All events
Route::get('/', [EventsController::class, 'index']);

//Single event fetched by id in the url
Route::get('/events/{id}',[EventsController::class, 'show']);
