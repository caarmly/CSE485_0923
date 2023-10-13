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

Route::get('/lara01/resources/views/welcome.blade.php', function () {
    return view(view:'welcome');
});

Route::get('/lara01/resources/views/home.blade.php', function () {
    return view(view:'home');
});

Route::get('/lara01/resources/views/categories/index.blade.php', function () {
    return view(view:'categories/index');
});