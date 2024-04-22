<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceiptsController;
use App\Http\Controllers\ReportsController;
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
    return view('auth.login');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
});*/

Route::get('/clients', function () {
    return view('clients.list');
});





Route::get('/quotations', function () {
    return view('billings.quotations.list');
});
Route::get('/quotations_create', function () {
    return view('billings.quotations.create');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [SettingsController::class, 'profile'])->name('settings.profile');
    Route::get('/tax', [SettingsController::class, 'tax'])->name('settings.tax');
    Route::get('/currency', [SettingsController::class, 'currency'])->name('settings.currency');
    Route::get('/payment', [SettingsController::class, 'payment'])->name('settings.payment');
});

Route::middleware('auth')->group(function () {
    Route::get('/invoices', [InvoicesController::class, 'list'])->name('invoices.list');
    Route::get('/invoices_create', [InvoicesController::class, 'create'])->name('invoices.create');
    Route::get('/invoices_preview', [InvoicesController::class, 'preview'])->name('invoices.preview');

});

Route::middleware('auth')->group(function () {
    Route::get('/receipts', [ReceiptsController::class, 'list'])->name('receipts.list');
    Route::get('/receipts_create', [ReceiptsController::class, 'create'])->name('receipts.create');
    Route::get('/receipts_preview', [ReceiptsController::class, 'preview'])->name('receipts.preview');

});






Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'view'])->name('products.view');
    Route::get('/categories', [ProductController::class, 'categories'])->name('products.categories');

});

Route::middleware('auth')->group(function () {
    Route::get('/reports_invoices', [ReportsController::class, 'invoices'])->name('reports.invoices');
    Route::get('/reports_receipts', [ReportsController::class, 'receipts'])->name('reports.receipts');
    Route::get('/reports_quotations', [ReportsController::class, 'quotations'])->name('reports.quotations');

});



//Route::get('/settings', [SettingsController::class, 'create']);
//Route::get('/settings/store', [SettingsController::class, 'store']);
//Route::get('/clients', [ClientsController::class, 'create']);

require __DIR__ . '/auth.php';
