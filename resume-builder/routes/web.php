<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/template', function(){
    return view('template');
});
Route::get('/register', function(){
    return view('register');
});
Route::get('/login', function(){
    return view('login');
});
Route::post('/register', [UserController::class, 'register']);
Route::post('/resume', [ResumeController::class, 'resume']);
Route::post('/login', [LoginController::class, 'login']);