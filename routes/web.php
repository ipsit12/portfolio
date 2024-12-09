<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
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
//     return view('welcome');
// });


Route::get('/',[FrontendController::class,'index']);
Route::post('/post',[ContactController::class,'post']);
Route::get('/secretcontactshow',[ContactController::class,'secretcontactshow']);
Route::get('/secretcontactdelte/{id}',[ContactController::class,'secretcontactdelte']);
Route::get('/portfolio',[FrontendController::class,'portfolio']);