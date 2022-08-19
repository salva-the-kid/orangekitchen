<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


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









// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/home',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);

Route::get('/make_reservations',[AdminController::class,'make_reservations']);
Route::get('/menu_view',[AdminController::class,'menu_view']);
Route::get('/chefs',[AdminController::class,'chefs']);
Route::get('/allchefs',[AdminController::class,'allchefs']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/reservations',[HomeController::class,'reservations']);
Route::get('/book_chef',[HomeController::class,'book_chef']);

Route::get('/deletereservations/{id}',[AdminController::class,'deletereservations']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::post('/upload_chefs',[AdminController::class,'upload_chefs']);

Route::get('/deletechef/{id}',[AdminController::class,'deletechef']);

Route::get('/updatechef/{id}',[AdminController::class,'updatechef']);

Route::post('/editchef/{id}',[AdminController::class,'editchef']);
