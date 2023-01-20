<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [ HomeController::class, 'index' ])->name('home');

Route::group(['prefix' => 'productos', 'as' => 'product.'], function () {

    Route::get('/categoria/{id}', [ ProductController::class, 'list' ])->name('list');

    // Route::get('/{name}', [ ProductController::class, 'index'])->name('index');
});
