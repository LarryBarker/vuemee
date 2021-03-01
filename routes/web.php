<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GiftController;

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

Route::get('/', [WelcomeController::class, 'show'])->name('welcome');

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/movies/{movie:slug}', [MovieController::class, 'show'])->name('movies');

Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/gifts', [GiftController::class, 'create'])->name('gifts.create');

Route::post('/gifts', [GiftController::class, 'store'])->name('gifts.store');

require __DIR__.'/auth.php';
