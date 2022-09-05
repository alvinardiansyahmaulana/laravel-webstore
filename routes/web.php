<?php

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

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'middleware' => ['auth']
], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('index');

    Route::group([
        'prefix' => 'product',
        'as' => 'product.',
        'namespace' => '\App\Http\Livewire\Product'
    ], function () {
        Route::get('/', IndexProduct::class)->name('index');
        Route::get('/create', CreateProduct::class)->name('create');
        Route::get('/edit/{product}', EditProduct::class)->name('edit');
    });
});

require __DIR__.'/auth.php';
