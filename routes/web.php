<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

Route::get('/', [ListingController::class, 'index']);

Route::post('/listings/', [ListingController::class, 'store']);

Route::get('/listings/create', [ListingController::class, 'create']);

// should be declared last, to avoid path conflict after /listings/
Route::get('/listings/{listing}', [ListingController::class, 'show']);
