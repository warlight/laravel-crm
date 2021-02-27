<?php

use App\Http\Controllers\New\MainController;
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

Route::get('/', [MainController::class, 'index']);

Route::post('post', [MainController::class, 'testPost']);

Route::put('/', [MainController::class, 'testPut']);

Route::get('html', [MainController::class, 'html']);

Route::any('test', [MainController::class, 'testAny']);
