<?php

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

Route::get('/about', function() {
    return "About";
});


Route::view('/contact', 'contact', ['name' => 'fajar']);
Route::redirect('/contactus', '/contact');

Route::get('product/{id}', function ($id) {
    return view('product.detail', ['id' => $id]);
});

Route::prefix('admin')->group(function () {
    Route::get('/profil', function () {
        return 'profil admin';
    });
    Route::get('/about', function () {
        return 'about admin';
    });
    Route::get('/contact', function () {
        return 'contact admin';
    });
});