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
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// show create listing form
// middleware for user owned listings
// auth middlewear for route protection
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// manage user
// auth middlewear for route protection
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// show listing edit form
// auth middlewear for route protection
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// update listing
// auth middlewear for route protection
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// delete listing
// auth middlewear for route protection
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// show individual listing by id
// should be declared last, to avoid path conflict after /listings/
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show new user register form
// guest middlewear for route protection
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// create new user
Route::post('/users', [UserController::class, 'store']);

// logout user
// auth middlewear for route protection
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show login form
// middleware route name login
// guest middlewear for route protection
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
