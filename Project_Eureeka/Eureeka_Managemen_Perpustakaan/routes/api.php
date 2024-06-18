<?php


use App\Http\Controllers\Api\BukuController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware(['auth:sanctum', 'admin'])->group(function () {
//     Route::get('buku', [BukuController::class, 'getall']);
//     Route::post('buku/insert', [BukuController::class, 'InsertBook']); 
//     Route::get('buku/{id}/update', [BukuController::class, 'GetById']);
//     Route::put('buku/{id}/update', [BukuController::class, 'UpdateBook']);
//     Route::delete('buku/{id}/delete', [BukuController::class, 'DeleteBook']);
// });

// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('User', [UserController::class, 'getallUser']);
//     Route::post('User/register', [UserController::class, 'Register']);
//     Route::post('User/login', [UserController::class, 'Login'])->name('login');  
// });

// Route::get('User', [UserController::class, 'getallUser']);
// Route::post('User/register', [UserController::class, 'Register']);
// Route::post('User/login', [UserController::class, 'Login'])->name('login');  

// Route::get('buku', [BukuController::class, 'getall']);
// Route::middleware('check.tipe:Admin')->group(function(){
//     Route::post('buku/insert', [BukuController::class, 'InsertBook']); 
//     Route::get('buku/{id}/update', [BukuController::class, 'GetById']);
//     Route::put('buku/{id}/update', [BukuController::class, 'UpdateBook']);
//     Route::delete('buku/{id}/delete', [BukuController::class, 'DeleteBook']);
// });

Route::get('User', [UserController::class, 'getallUser']);
Route::post('User/register', [UserController::class, 'Register']);
Route::post('User/login', [UserController::class, 'Login'])->name('login'); 

Route::middleware('checkTipe:Admin')->group(function () {
    Route::post('buku/insert', [BukuController::class, 'InsertBook']); 
    Route::get('buku/{id}/update', [BukuController::class, 'GetById']);
    Route::put('buku/{id}/update', [BukuController::class, 'UpdateBook']);
    Route::delete('buku/{id}/delete', [BukuController::class, 'DeleteBook']);
});

Route::get('buku', [BukuController::class, 'getall']);

