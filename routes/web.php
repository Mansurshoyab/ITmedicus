<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->prefix('admin')->group(function () {
    
    Route::resource('company', CompanyController::class);

    Route::resource('employee', EmployeeController::class);

});

Route::middleware('auth')->prefix('/')->group(function () {
    // ... Other admin routes
    // Route::get('/company', [CompanyController::class, 'index'])->name('company.company');
    // Add the CompanyController routes here
    Route::resource('company', CompanyController::class);
    Route::resource('employee', EmployeeController::class);
});


require __DIR__.'/auth.php';
