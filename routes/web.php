<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TypeaheadController;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\UserController;
  
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
 
Route::controller(UserController::class)->group(function () {
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});

Route::controller(SearchController::class)->group(function () {
    Route::get('demo-search', 'index');
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
});


Route::get('/home', [TypeaheadController::class, 'index']);
Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);

Route::get('produc/create', [ProductController::class, 'show_product_form']);
Route::post('produc/create', [ProductController::class, 'store'])->name('product.create');
Route::get('produc', [ProductController::class, 'index'])->name('product.index');
