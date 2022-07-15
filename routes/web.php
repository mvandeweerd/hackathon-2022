<?php

use App\Models\Company;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->back();
});

Route::get('/home', function () {
    if (Auth::user()) {
        $company = Company::whereUserId(Auth::user()->id)->first();
        if ($company) {
            return redirect()->to('/company/'.$company['slug'].'/edit');
        }
    }
})->middleware(['auth', 'verified']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', [App\Http\Controllers\CompanyController::class, 'create']);
Route::post('/create', [App\Http\Controllers\CompanyController::class, 'store']);

\Illuminate\Support\Facades\Auth::routes();

Route::get('/company/{slug}', [App\Http\Controllers\CompanyController::class, 'show'])->name('company');
Route::get('/company/{slug}/edit', [App\Http\Controllers\CompanyController::class, 'edit'])->name('company.edit')->middleware(['auth', 'verified']);
Route::post('/company/{slug}/edit', [App\Http\Controllers\CompanyController::class, 'update'])->name('company.update')->middleware(['auth', 'verified']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'store']);

////Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('company');
//Route::get('/company/{slug}/claim', [App\Http\Controllers\CompanyController::class, 'claim'])->name('company.claim');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    $company = Company::where('user_id', $request->user()->id)->first();
    if ($company) {
        return redirect('/company/' . $company['slug'] . '/edit');
    }
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
