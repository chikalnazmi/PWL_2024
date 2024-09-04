<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);


// Jobsheet 1
// Route::get('/', function () {
//     return view('datadiri');

// Jobsheet 2 Praktikum 1   
// Route::get('/hello', function () 
//     { return 'Hello World';
// });
// Route::get('/world', function () {
//     return 'World';
// });
// Route::get('/welcome', function () {
//     return 'Selamat Datang';
// });
// Route::get('/about', function () {
//     return 'Chikal Nazmi Mahira - 2241760122';
// });
// Route::get('/user/{Chikal}', function ($Chikal) {
//     return 'Nama saya '.$Chikal;
//     });
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID' .$id;
// });

// Route::get('/user/{name?}', function ($name='Chikal') {
//     return 'Nama saya '.$name;
//     });
                        
// Jobsheet 2 Praktikum 2
// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/index', [WelcomeController::class,'index']);
// Route::get('/about', [WelcomeController::class,'about']);
// Route::get('/articles/{id}', [WelcomeController::class,'articles']);

// Route::get('/index', [HomeController::class,'index']);
// Route::get('/about', [AboutController::class,'about']);
// Route::get('/articles/{id}', [ArticleController::class,'articles']);




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


