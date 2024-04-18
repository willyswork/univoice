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

Route::get('/invoices', function () {
    return view('billings.invoices.list');
});
Route::get('/invoices_create', function () {
    return view('billings.invoices.create');
});

Route::get('/invoices_preview', function () {
    return view('billings.invoices.preview');
});


Route::get('/receipts', function () {
    return view('billings.receipts.list');
});
Route::get('/receipts_create', function () {
    return view('billings.receipts.create');
});

Route::get('/quotations', function () {
    return view('billings.quotations.list');
});
Route::get('/quotations_create', function () {
    return view('billings.quotations.create');
});
Route::get('/reports_activity', function () {
    return view('reports.activity.view');
});
Route::get('/reports_sales', function () {
    return view('reports.sales.view');
});
Route::get('/reports_purchase', function () {
    return view('reports.purchase.view');
});
Route::get('/reports_stock', function () {
    return view('reports.stock.view');
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
