<?php

use App\Http\Controllers\FrontEndController;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [FrontEndController::class, 'index'])->name('frontend.home');
Route::get('/about', [FrontEndController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('frontend.contact');
