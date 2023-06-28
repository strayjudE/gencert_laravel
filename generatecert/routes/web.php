<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\IndigencyController;
use App\Http\Controllers\PermitController;

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
    return view('welcome');
});

Route::get('/generate-certificate', [GenerateController::class,'generate'])->name('generate-certificate');
Route::get('/generate-indicertificate', [IndigencyController::class,'generate'])->name('generate-indicertificate');
Route::get('/generate-permitcertificate', [PermitController::class,'generate'])->name('generate-permitcertificate');
