<?php

use App\Models\TableProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardTablePegawaiController;
use App\Http\Controllers\DashboardTableProductController;
use App\Http\Controllers\DashboardTablePemasukanController;
use App\Http\Controllers\DashboardTablePengeluaranController;
use App\Http\Controllers\DashboardUserController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/contact', function () {
    return view('dashboard.contact');
})->middleware('auth');

Route::resource('dashboard/user', DashboardUserController::class)->middleware('auth');
Route::resource('dashboard/tableproduct', DashboardTableProductController::class)->middleware('auth');
Route::resource('dashboard/tablepegawai', DashboardTablePegawaiController::class)->middleware('auth');
Route::resource('dashboard/tablepemasukan', DashboardTablePemasukanController::class)->middleware('auth');
Route::resource('dashboard/tablepengeluaran', DashboardTablePengeluaranController::class)->middleware('auth');
