<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompraController;
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
 
Route::controller(CompraController::class)->group(function () {
    Route::get('/get-brazilian-products', 'getBrazilianProducts');
    Route::post('/get-european-products', 'getEuropeanProducts');
});

Route::get('/', function () {
    return view('welcome');
});
