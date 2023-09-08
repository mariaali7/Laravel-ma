<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admins\AdminsController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\AdminsController;

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('admin/login', function (){
    return 'hello';
})->name('view.login');
Route::post('admin/login', [AdminsController::class, 'checkLogin'])->name('check.login');

Route::get('admin', [AdminsController::class, 'index'])->name('admins.dashboard');
