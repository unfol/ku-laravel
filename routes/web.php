<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');
Route::resource('cars', CarController::class);

Route::group(['middleware' => ['role']], function () {
    Route::get('/owner/{id}/delete/', [OwnerController::class, 'delete'])->name('owner.delete');
    Route::get('/owner/{id}/edit/', [OwnerController::class, 'edit'])->name('owner.edit');
    Route::post('/owner/{id}/update/', [OwnerController::class, 'update'])->name('owner.update');
    Route::get('/owner/create', [OwnerController::class, 'create'])->name('owner.create');
    Route::post('/owner/store', [OwnerController::class, 'store'])->name('owner.store');
});

Route::get('setlanguage/{lang}', [LanguageController::class, 'setLanguage'])->name('setLanguage');
