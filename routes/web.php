<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//GET
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
//api restFull ajax
Route::get('/testeajax', [EventController::class, 'ajaxteste']);

//POST
Route::post('/events', [EventController::class, 'store']);
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

//DELETE
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');

//PUT
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');