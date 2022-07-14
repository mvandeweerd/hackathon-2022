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

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/company/{slug}', [App\Http\Controllers\CompanyController::class, 'show'])->name('company');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('company');
Route::get('/company/{slug}/claim', [App\Http\Controllers\CompanyController::class, 'claim'])->name('company.claim');
