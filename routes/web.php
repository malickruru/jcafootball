<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PalmaresController;

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

Route::get('/', [Controller::class, 'home']);

Route::get('/contact', function () {
    return view('page.contact');
});

Route::get('/a_propos', [PalmaresController::class, 'about']);


Route::get('/test', function () {
    return view('page.test');
});

Route::post('/contact', [ContactController::class, 'sendEmail']);