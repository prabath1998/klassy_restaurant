<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/users',[AdminController::class,'user']);

Route::get('/foodmenu',[AdminController::class,'foodmenu']);

Route::post('/uploadfood',[AdminController::class,'upload']);

Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu']);

Route::get('/editmenu/{id}',[AdminController::class,'editmenu']);

Route::post('/updatefood/{id}',[AdminController::class,'updatefood']);

//make a reservation
Route::post('/reservation',[AdminController::class,'reservation']);

//show all reservations
Route::get('/viewreservations',[AdminController::class,'viewreservations']);

Route::get('/viewchef',[AdminController::class,'viewchef']);

Route::post('/uploadchef',[AdminController::class,'uploadchef']);

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

Route::get('/redirects',[HomeController::class,'redirects']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
