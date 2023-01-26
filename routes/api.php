<?php

use App\Http\Controllers\imageController;

use App\Models\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('images', [imageController::class, 'getAllImages']);
Route::get('image/{path}', [imageController::class, 'getImage'])->where('path', '.*');
Route::post('image', [imageController::class, 'uploadImage']);
