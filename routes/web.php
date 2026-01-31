<?php

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

Route::get('/', function () {
    return view('home');
});

// web.php
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank.you');



Route::get('/casa-frangipani-luxury-villa-rental-alibaug', function () {
    return view('homenew');
})->name('home.new');



use App\Http\Controllers\BookingController;

Route::post('/booking/enquire', [BookingController::class, 'enquire'])->name('booking.enquire');

// Admin: simple calendar view
Route::get('/admin/calendar', function () {
    return view('admin.calendar');
});

