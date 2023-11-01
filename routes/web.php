<?php

use App\Http\Controllers\CompanyController;
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

// Route::get('company', function (){
//     return view('company.company');
// });

Route::group(['prefix' => '/'], function(){
    Route::resource('company', CompanyController::class);
});

Route::get('employee', function (){
    return view('employee.employee');
});
