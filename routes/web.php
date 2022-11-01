<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\teskepriController;
use App\Http\Controllers\DashboardHTInController;
use App\Http\Controllers\teskbdController;
use App\Http\Controllers\DashboardJenisController;
use App\Http\Controllers\DashboardMainController;
use App\Http\Controllers\DashboardSoalController;
use App\Http\Controllers\DashboardTSController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "image1" => "alurprogramtestee.png",
        "name1" => "Alur Program Testee",
        "image2" => "alurprogramadmin.png",
        "name2" => "Alur Program Admin"
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', function() {
//     return view('dashboard.index');
// })->middleware('auth');
Route::resource('/dashboard/bio', DashboardMainController::class)->middleware('auth');

// Route::get('/teskepribadian', [teskepriController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/hasiltes', DashboardHTInController::class)->middleware('auth');

Route::resource('/dashboard/tes', teskbdController::class)->middleware('auth');
Route::resource('/dashboard/hasiltes', DashboardHTInController::class)->middleware('auth');

Route::resource('/dashboard/jenis', DashboardJenisController::class)->middleware('admin')->except('show');
Route::resource('/dashboard/soal', DashboardSoalController::class)->middleware('auth')->except('show');
Route::resource('/dashboard/tipesoal', DashboardTSController::class)->middleware('auth')->except('show');


