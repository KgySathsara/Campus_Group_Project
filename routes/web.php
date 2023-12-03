<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FirstController;

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

Route::get('/', [MainController::class, 'index'])->name('index');

/*Route::get('/log', [LoginController::class, 'login'])->name('login');
Route::get('/sign', [LoginController::class, 'signup'])->name('sign');
Route::post('/store', [LoginController::class, 'store'])->name('store');
Route::post('/report', [FirstController::class, 'report'])->name('report');

Route::prefix('/main')->group(function(){
    Route::post('/report', [FirstController::class, 'report'])->name('report');
});*/
Route::post('/report', [FirstController::class, 'report'])->name('report');

Route::prefix('/uoj')->group(function(){
    Route::get('/log', [LoginController::class, 'login'])->name('login');
    Route::get('/sign', [LoginController::class, 'signup'])->name('sign');
    Route::post('/store', [LoginController::class, 'store'])->name('store');
    Route::post('/main', [LoginController::class, 'main'])->name('main');

});

Route::prefix('/admin')->group(function(){
    Route::get('/home', [AdminController::class, 'home'])->name('home');
    Route::get('/facultyLoding', [AdminController::class, 'facultyLoding'])->name('facultyLoding');
    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::post('/ADstore', [AdminController::class, 'ADstore'])->name('ADstore');
    Route::get('/note', [AdminController::class, 'note'])->name('note');
    Route::get('/todo', [AdminController::class, 'todo'])->name('todo');
    Route::get('/events', [AdminController::class, 'events'])->name('events');
    Route::post('/ADevent', [AdminController::class, 'ADevent'])->name('ADevent');
    Route::get('/accounts', [AdminController::class, 'accounts'])->name('accounts');
});




