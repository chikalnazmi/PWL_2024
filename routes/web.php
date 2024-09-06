<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JS02TugasController;


Route::get('/', [JS02TugasController::class, 'home']);
Route::get('/category', [JS02TugasController::class, 'category']);


Route::prefix('category') ->group(function () {
    Route::get('food-beverage', [JS02TugasController::class, 'foodBeverage'])->name('JS02Tugas.foodBeverage');
    Route::get('beauty-health', [JS02TugasController::class, 'beautyHealth'])->name('JS02Tugas.beautyHealth');
    Route::get('baby-kid', [JS02TugasController::class, 'babyKid'])->name('JS02Tugas.babyKid');
    Route::get('home-care', [JS02TugasController::class, 'homeCare'])->name('JS02Tugas.homeCare');
});

Route::get('/user/{id}/name/{name}', [JS02TugasController::class, 'user']);
Route::get('/sales', [JS02TugasController::class, 'sales']);



// use App\Http\Controllers\WelcomeController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;

// use App\Http\Controllers\PhotoController;        


// // Jobsheet 1
// Route::get('/', function () {
//     return view('datadiri');
// });

// // Jobsheet 2 Praktikum 1   
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
                        
// // Jobsheet 2 Praktikum 2
// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/index', [WelcomeController::class,'index']);
// Route::get('/about', [WelcomeController::class,'about']);
// Route::get('/articles/{id}', [WelcomeController::class,'articles']);

// Route::get('/index', [HomeController::class,'index']);
// Route::get('/about', [AboutController::class,'about']);
// Route::get('/articles/{id}', [ArticleController::class,'articles']);

// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//     ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
//     ]);


// // Jobsheet 2 Praktikum 3
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Chikal']);
// });

// Route::get('/greeting', [WelcomeController::class, 'greeting']);





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


