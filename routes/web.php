<?php

use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;

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
Route::post('/events/{eventId}/reserve', [MainPageController::class, 'eventReserve']);

Route::get('/shows', [MainPageController::class, 'shows']);
Route::get('/shows/{showId}/events', [MainPageController::class, 'showWithEvents']);
Route::get('/events/{eventId}/places', [MainPageController::class, 'eventWithPlaces']);

