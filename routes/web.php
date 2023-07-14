<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//Route::get('/', [HomeController::class, 'index'] );
//Route::get('/', function () {
 //   return view('dashoguz.app.main');
//});

//Route::get('/', [HomeController::class, 'index'])->name('home.page')->middleware('guest');
Route::get('/m', [HomeController::class, 'index'])->middleware('main.page');
Route::redirect('/', '/m');



Route::get('/services', [HomeController::class, 'service'] );
Route::get('/traffics', [HomeController::class, 'traffic'] );

