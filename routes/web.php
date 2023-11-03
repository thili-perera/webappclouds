<?php

use App\Http\Controllers\ClientController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('client')->prefix('client')->group(function(){
    Route::get('/index',[ClientController::class,'index'])->name('.index');
    Route::get('/create',[ClientController::class,'create'])->name('.create');
    Route::post('/store',[ClientController::class,'store'])->name('.store');
    Route::get('/show/{client}',[ClientController::class,'show'])->name('.show');
    Route::get('/edit/{client}',[ClientController::class,'edit'])->name('.edit');
    Route::put('/update/{client}',[ClientController::class,'update'])->name('.update');
    Route::get('/destroy/{client}',[ClientController::class,'destroy'])->name('.destroy');
});
