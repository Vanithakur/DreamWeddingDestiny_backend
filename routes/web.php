<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PayPalController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class,'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/services', [HomeController::class,'services'])->name('services');
Route::get('/reviews', [HomeController::class,'reviews'])->name('reviews');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');

require __DIR__.'/auth.php';
Route::get('payment', [PayPalController::class,'payment'])->name('payment');
Route::get('cancel', [PayPalController::class,'cancel'])->name('payment.cancel');
Route::get('payment/success', [PayPalController::class,'success'])->name('payment.success');
