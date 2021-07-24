<?php

use App\Http\Controllers\namesController;
use App\Http\Controllers\usersController;
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

//Route::middleware(['auth:api'=> function(){
//
//}]);



Route::get('names',[namesController::class,'index']);
Route::get('recent-names',[namesController::class,'recentnames']);
Route::get('recent-contributors',[usersController::class,'recentPeople']);
