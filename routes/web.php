<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BagController;
use App\Models\Product;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'trendingProducts' => Product::whereIn('id', [7, 10, 13])->get(),
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/about', [AboutController::class, 'show'])->name('about.show');
Route::get('/faq', [FaqController::class, 'show'])->name('faq.show');

Route::get('/buy/{product}', [BuyController::class, 'show'])->name('buy.show');
Route::get('/bag', [BagController::class, 'show'])->name('bag.show');

Route::get('/products', function () {
    return Inertia::render('Products', [
        'products' => Product::all()
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
