<?php

use Illuminate\Support\Facades\Route;
use Database\Factories\ListingFactory;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//All listings
Route::get('/', [ListingController::class, 'index']);


//Show create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);


//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class,'show']);


//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

//Create New User
Route::post('/users', [UserController::class, 'store']);
