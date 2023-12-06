<?php

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

Route::get('/price',[Postcontroller::class, 'price']);

Route::get('/dashboard',[dashboardcontroller::class, 'index']);

Route::get('/dashboard/{nama}',[Dashboardcontroller::class, 'show']);

Route::get('/hubungi', [DashboardController::class, 'hubungi'])->name('hubungi');
