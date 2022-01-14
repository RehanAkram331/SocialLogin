<?php
namespace App\Http\Controllers;
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

Route::get('/', [HomeController::class, 'HomePage']);



Route::get('/GitHubCallBack', [LoginRegistationController::class, 'GitHubCallBack']);

Route::get('/CallGitHub', [LoginRegistationController::class, 'CallGitHub']);

Route::get('/Dashboard', [DashBordCountroller::class, 'DashBordPage'])->middleware('check');

Route::get('/Logout', [LoginRegistationController::class,'Logout']);


