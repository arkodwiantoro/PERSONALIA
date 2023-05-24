<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

//login//

Route::get('/login', function () {
    return view('Pengguna.login');
});

Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');

//Admin//

Route::get('/Admin', [AdminController::class, 'index'])->name('Admin'); 

//Dashboard//
Route::get('/homepage', function () {
    return view('Dashboard.main');
});

//User//

Route::get('User', function(){
    return view('User');
})->name('User');