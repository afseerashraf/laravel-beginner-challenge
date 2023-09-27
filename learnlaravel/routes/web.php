<?php

use App\Http\Controllers\FrondEndcontroller;
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

Route::get('/',[FrondEndController::class, 'home'])->name('home');
Route::post('/user',[FrondEndcontroller::class, 'create'])->name('save-user');
Route::get('/{id}',[FrondEndcontroller::class,'userdelete'])->name('delete-user');