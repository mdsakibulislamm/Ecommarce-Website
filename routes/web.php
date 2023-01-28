<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CuponController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix'=>'/cupon'],function() {
    route::get('/add',[CuponController::class,'index' ])->name('add');
    route::post('/store',[CuponController::class,'store' ]);
    Route::get('/show',[CuponController::class,'show'])->name('show');
    Route::get('/delete/{id}',[CuponController::class,'destroy']);
    Route::get('/edit/{id}',[CuponController::class,'edit']);
   Route::post('/updateCupon/{id}',[CuponController::class,'update']);
   //Route::get('/status/{id}',[CuponController::class,'status'])->name('status');

});

