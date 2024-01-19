<?php

use App\Http\Controllers\CapsterController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view ('home',[
//         "title" => "We Barber"
//     ]);
// });

Route::get('/',[Postcontroller::class, 'index']);

Route::resource('/info', crudController::class);

Route::resource('/dashboard', CapsterController::class);

Route::get('/price',[Postcontroller::class, 'price']);

Route::get('/tambah',[dashboardcontroller::class, 'plus']);

Route::post('/tambah',[dashboardcontroller::class, 'store']);

Route::put('/absensi',[dashboardcontroller::class, 'update']);

// Route::get('/dashboard',[dashboardcontroller::class, 'index']);

// Route::get('/dashboard/{nama}',[dashboardcontroller::class, 'show']);

Route::get('/hubungi', [dashboardController::class, 'hubungi'])->name('hubungi');

Route::get('/get-data/{nama}', [crudController::class, 'getData'])->name('get.data');

Route::get('/ubah/{nama}',[Postcontroller::class, 'edit']);

Route::put('/ubah',[Postcontroller::class, 'update']);

