<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
    return view('welcome');
});
Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-voter',[CustomAuthController::class,'registerVoter'])->name('register-voter');
Route::post('login-voter',[CustomAuthController::class,'loginVoter'])->name('login-voter');
Route::post('login-admin',[CustomAuthController::class,'loginAdmin'])->name('login-admin');
Route::get('/voting',[CustomAuthController::class,'voting']);
Route::get('/profile',[CustomAuthController::class,'profile']);
Route::get('/stat',[CustomAuthController::class,'statistics']);
Route::get('/voterstat',[CustomAuthController::class,'voterstat']);
Route::post('finished',[CustomAuthController::class,'finished'])->name('finished');