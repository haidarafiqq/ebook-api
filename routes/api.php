<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\heloController;
use App\Http\Controllers\SiswaController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*
* Task
* URL : http://localhost/apiq/halo
* METHOD: GET
* Exec: function
* Return: JSON => {"me": "Ganteng"}
*/
// Route::get('halo', function(){
//     return ["me" => "ganteng"];

//     //return $data;
// });

// Route::resource('helo', [heloController::clas, 'index']);

Route::resource('helocontroller', heloController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('book', BookController::class); 
