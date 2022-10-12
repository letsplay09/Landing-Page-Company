<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\LoginController;
use App\Models\Kelurahan;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('welcome', 'welcome');
// Route::view('contact', 'contact');

// Route::get('/', [HomeController::class, 'index']);
// Route::get('contact/{id}', [ContactController::class, 'create']);
// Route::post('contact', [ContactController::class, 'store']);

Route::get('/', [LoginController::class, 'index'])->name('login');
