<?php

use App\Http\Controllers\CostumLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Login Routes
Route::get('/login', [CostumLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [CostumLoginController::class, 'login']);
Route::post('/logout', [CostumLoginController::class, 'logout'])->name('logout');



// User Route 
Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin', 'company:PT. XYZ'])->group(function () {
        Route::get('/xyz/users', [UserController::class, 'indexXYZ']);
    });

    Route::middleware(['role:manager', 'company:PT. XYZ'])->group(function () {
        Route::get('/xyz/manager', [UserController::class, 'managerView']);
    });

    Route::middleware(['role:admin', 'company:PT. XYZ-1'])->group(function () {
        Route::get('/xyz1/users', [UserController::class, 'indexXYZ1']);
    });

    Route::middleware(['role:supervisor', 'company:PT. XYZ-1'])->group(function () {
        Route::get('/xyz1/supervisor', [UserController::class, 'supervisorViewXYZ1']);
    });

    Route::middleware(['role:admin', 'company:PT. XYZ-2'])->group(function () {
        Route::get('/xyz2/users', [UserController::class, 'indexXYZ2']);
    });

    Route::middleware(['role:supervisor', 'company:PT. XYZ-2'])->group(function () {
        Route::get('/xyz2/supervisor', [UserController::class, 'supervisorViewXYZ2']);
    });
});
