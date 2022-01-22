<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CariMontirController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MontirHomeController;
use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('login');


Route::get('/bookings/mobil', [MobilController::class, 'index'])->name('booking.mobil');
Route::post('bookings/mobil/store',[MobilController::class,'store'])->name('mobil.store');
Route::get('/bookings/model-mobil/{id}', [MobilController::class, 'getModelAjax'])->name('booking.getModelAjax');
Route::get('/bookings/varian-mobil/{id}', [MobilController::class, 'getVarianAjax'])->name('booking.getVarianAjax');


Route::get('/bookings/motor', [MotorController::class, 'index'])->name('booking.motor');
Route::get('/bookings/tipe/{id}', [MotorController::class, 'getTipeAjax'])->name('booking.getTipeAjax');
Route::get('/bookings/varian/{id}', [MotorController::class, 'getVarianAjax'])->name('booking.getVarianAjax');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/bookings/motor/store', [MotorController::class, 'store'])->name('booking.store');

Route::get('/find', [CariMontirController::class, 'index'])->name('find.montir');

Route::get('/map-chat',[CariMontirController::class,'create'])->name('map-chat');

Route::get('/ordersum',[CariMontirController::class,'ordersum'])->name('ordersum');

Route::get('/montir', [MontirHomeController::class, 'index'])->name('home-montir');
Route::get('/find/user', [MontirHomeController::class, 'find'])->name('find-user');

Route::get('/map-chat/montir',[CariMontirController::class, 'mapmontir'])->name('map-montir');

Route::get('/input/order',[CariMontirController::class,'input'])->name('input-order');
Route::post('/input/order/store',[CariMontirController::class,'store'])->name('input-order.store');