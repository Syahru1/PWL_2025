<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

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

Route::get('/hello', function () {
    return 'Hello World'; });

Route::get('/world', function () {
    return 'World';
});

Route::get('/p', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 2341720002 <br> Nama: Muhammad Syahrul Gunawan';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}    ', function ($name) {    
    return 'Nama saya '.$name; 
});

Route::get('/posts/{post}/comments/{comments}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articless/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});

Route::get('/user/{name?}', function($name = 'Guest') {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function($name = 'John') {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function() {
    //
})->name('profile');

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show']); 

Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' ]); 
    
//Route::get('/greeting', function () {  	
    //return view('hello', ['name' => 'Syahrul']); }); 

//Route::get('/greeting', function () {  	
//    return view('blog.hello', ['name' => 'Syahrul']); }); 

Route::get('/greeting', [WelcomeController::class, 
'greeting']); 
