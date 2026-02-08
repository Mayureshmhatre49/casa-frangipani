<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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
    return view('homenew');
});

// web.php
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank.you');



Route::get('/casa-frangipani-luxury-villa-rental-alibaug', function () {
    return view('homenew');
})->name('home.new');

Route::get('/homev2', function () {
    return view('homev2');
})->name('home.v2');



Route::get('/chatbot', function () {
    return view('home');
})->name('home.chatbot');


Route::post('/booking/enquire', [BookingController::class, 'enquire'])->name('booking.enquire');

// Admin: simple calendar view
Route::get('/admin/calendar', function () {
    return view('admin.calendar');
});

