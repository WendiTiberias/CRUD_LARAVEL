<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;

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


Route::get('/', [PostController::class, 'home']);

# Route::get('/about' , [PostController::class,'about']);


# Route::get('/blog' , [PostController::class, 'index']);


# Route::get('/posts/{slug}' , [PostController::class,'singlePost']);

Route::get('/book' ,[BookController::class,'index']);
Route::get('/book/add', [BookController::class , 'addPage']);
Route::get('/book/edit/{id}',[BookController::class, 'editPage']);
Route::get('/book/delete/{id}' , [BookController::class,'deleteHandler']);
Route::post('/book/update',[BookController::class,'putHandler']);
Route::post('/book/store' , [BookController::class , 'postHandler']);
