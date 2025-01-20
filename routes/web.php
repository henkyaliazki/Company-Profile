<?php

use App\Http\Controllers\CekOngkirController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestEmailController;
use App\Http\Controllers\TrackingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/tracking', function () {
    return view('company_profile.tracking');
})->name('track.shipment');

Route::get('/shipping-simulation', [CekOngkirController::class, 'shipping_simulation']);
Route::post('/simulation_done', [CekOngkirController::class, 'simulation_done'])->name('simulation_done');

Route::get('/track.shipment', [TrackingController::class, 'trackShipment'])->name('track.shipment');

//pesan-sekarang
Route::get('/order', [OrderController::class, 'showOrderForm'])->name('order.form');
Route::post('/order', [OrderController::class, 'submitOrder'])->name('order.submit');

//Route::get('/test',[TestEmailController::class,'index'])->name('test');

