<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ListListingController;
use App\Http\Controllers\ShowListingController;
use App\Http\Controllers\ApplyForListingController;
use App\Http\Controllers\ShowApplicationsController;
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
//Rute vidljive svima
//  Prikaz svih oglasa
Route::get('/',ListListingController::class )->name('listings.all'); 

//Forma za prijavu na oglas, sa jedinstvenim URL
Route::get('/listings/{listing}', ShowListingController::class)->name('listings.show');   

Route::post('/{listing}/apply', ApplyForListingController::class)->name('listings.apply');  
//Rute vidljive korisnicima/firmama i adm


Route::resource('/account/listings', ListingController::class)->except('show');
Route::get('/account/listings/applications', ShowApplicationsController::class)->name('listings.application');
/* Route::get('/listings', [ListingController::class,'index'])->name('listings.index');
Route::get('/listings/create', [ListingController::class,'create'])->name('listings.create');
Route::post('/listings', [ListingController::class,'store'])->name('listings.store');
Route::get('/listings/{listing}/edit', [ListingController::class,'edit'])->name('listings.edit');
Route::put('/listings/{listing}', [ListingController::class,'update'])->name('listings.update');

Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->name('listings.destroy'); */ 

//Prijava na oglas, generisu se podaci u clicks tabeli


Auth::routes();

