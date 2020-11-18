<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;

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


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);
Route::get('/products/{slug}/edit', [ProductController::class, 'edit']);
Route::get('/products/{slug}/edit', [ProductController::class, 'update']);


Route::get('/clients', [ClientController::class, 'index']);
Route::post('/clients',[ ClientController::class, 'store']);
Route::get('/clients/create', [ClientController::class, 'create']);
Route::get('/clients/{slug}',[ ClientController::class, 'show']);
Route::get('/clients/{slug}/edit', [ClientController::class, 'edit']);