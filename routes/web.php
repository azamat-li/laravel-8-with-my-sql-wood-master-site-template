<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/feedback', [FeedbackController::class, 'main'])->name('feedback.main');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/careers', [CareerController::class, 'index'])->name('careers.index');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::get('/products/{product}/edit', [ProductController::class, 'update']);


Route::get('/clients', [ClientController::class, 'main'])->name('clients.main');
Route::post('/clients', [ClientController::class, 'store']);
Route::get('/clients/create', [ClientController::class, 'create']);
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('client.destroy');
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/{client}/edit', [ClientController::class, 'edit']);
Route::put('/clients/{client}', [ClientController::class, 'update']);
