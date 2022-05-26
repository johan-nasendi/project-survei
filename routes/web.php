<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RespondentIdentityController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes([
    'register' => false
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form/Kuesioner/Tracer-Study-Alumni', [DashboardController::class, 'form'])->name('forum');


Route::group(['prefix' => 'dashboard','middleware' => ['web','auth']] , function() {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    Route::resource('/respondent-identity',RespondentIdentityController::class)->except(['create','edit','update']);


});
