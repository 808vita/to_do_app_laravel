<?php

use App\Http\Controllers\ItemController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[ItemController::class,'showItem']);
Route::get('/add',[ItemController::class,'addItem']);
Route::get('/delete/{sno}',[ItemController::class,'deleteItem']);
Route::get('/edit/{sno}',[ItemController::class,'editItem']);
Route::get('/update',[ItemController::class,'updateItem']);