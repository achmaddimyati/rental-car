<?php

use App\Http\Controllers\Admin\CarController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessageController;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/detail/{car:slug}', [HomeController::class, 'detail'])->name('detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactStore'])->name('contact.store');

Route::group(['middleware' => 'is_admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('cars', CarController::class);
    Route::put('cars/update-image/{id}', [CarController::class, 'updateImage'])->name('cars.updateImage');

    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
