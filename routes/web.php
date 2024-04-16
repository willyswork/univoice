<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/settings', function () {
    return view('profile.profiles');
});
Route::get('/tax', function () {
    return view('settings.tax');
});
Route::get('/currency', function () {
    return view('settings.currency');
});

Route::get('/payment', function () {
    return view('settings.payment');
});
Route::get('/clients', function () {
    return view('clients.clients');
});


Route::get('/products', function () {
    return view('products.products');
});

Route::get('/products_categories', function () {
    return view('products.product_categories');
});

Route::get('/products_units', function () {
    return view('products.product_units');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/settings', [SettingsController::class, 'create']);
//Route::get('/settings/store', [SettingsController::class, 'store']);
//Route::get('/clients', [ClientsController::class, 'create']);

require __DIR__ . '/auth.php';
