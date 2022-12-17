<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

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

// show listings
Route::get('/', [ListingController::class, 'index']);

// save listing to db
Route::post('/listings/', [ListingController::class, 'store']);

// show create listing form
Route::get('/listings/create', [ListingController::class, 'create']);

// show listing edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// show individual listing by id
// should be declared last, to avoid path conflict after /listings/
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show new user register form
Route::get('/register', [UserController::class, 'create']);

// create new user
Route::post('/users', [UserController::class, 'store']);

// logout user
Route::post('/logout', [UserController::class, 'logout']);
