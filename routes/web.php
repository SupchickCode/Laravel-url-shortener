<?php

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

Route::get('/',[\App\Http\Controllers\ShortUrlController::class ,'show_main_form']);
Route::post('/',[\App\Http\Controllers\ShortUrlController::class ,'get_url_and_return_json']);
Route::get('/{short_url}',[\App\Http\Controllers\ShortUrlController::class ,'redirect_on_right_url']);