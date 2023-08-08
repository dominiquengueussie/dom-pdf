<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\userController;

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

// EXPORT PDF AVEC LARAVEL 9
Route::resource('users', userController::class);
Route::get('list', [userController::class, 'showUser']);
Route::get('user/pdf', [userController::class, 'createPDF'])->name('export.pdf');


// EXPORT PDF AVEC LARAVEL 8
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('show-info', function () {
    return view('info');
});
//Route::get('send', [PDFController::class, 'sendInfo']);