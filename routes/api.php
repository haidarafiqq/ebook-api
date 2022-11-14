<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
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

//punblic route
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/books', [BookController::class, 'index']);
Route::post('/books/{id}', [BookController::class, 'show']);
Route::get('/authors', [AuthorController::class, 'index']);
Route::post('/authors/{id}', [AuthorController::class, 'show']);

//protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('books', BookController::class)->except('create', 'edit', 'show', 'index');
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('/authors', AuthorController::class)->except('index');
});

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
