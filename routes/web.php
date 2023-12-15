<?php

use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', [ServiceController::class, 'index'])->name('service.index');
    Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/create', [ServiceController::class, 'create'])->name('service.create');
    Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/reviews', [HomeController::class, 'reviews'])->name('reviews');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

require __DIR__ . '/auth.php';
