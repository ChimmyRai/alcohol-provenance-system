<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StillController;
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



Route::get('/supplierdashboard', function () {
    return view('supplierdashboard');
})->middleware(['auth', 'verified'])->name('supplierdashboard');

Route::get('/dashboard', function () {
    return view('supplierdashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/infoview', function () {
    return view('infoview');
})->name('infoview');

Route::get('/alcoholview', function () {
    return view('alcoholview');
})->name('alcoholview');


Route::middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');

    Route::get('/liststill', function () {
        return view('liststills');
    })->name('liststills');
    Route::get('/editStill', [StillController::class, 'edit'])->name('still.edit');
    Route::get('/editAccount', [AccountController::class, 'edit'])->name('account.edit');
    Route::patch('/updateAccount', [AccountController::class, 'update'])->name('account.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/listusers', function () {
        return view('listusers');
    })->name('listusers')->middleware(['auth','admin']);
      


require __DIR__.'/auth.php';
