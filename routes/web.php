<?php

use App\Http\Controllers\CekOngkirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);
//Route::get('/tracking', [PagesController::class, 'tracking']);

Route::get('/tracking', function () {
    return view('company_profile.tracking');
})->name('track.shipment');

Route::get('/shipping-simulation', [CekOngkirController::class, 'shipping_simulation']);
//Route::post('/simulation-done', [CekOngkirController::class, 'simulation_done']);
Route::post('/simulation_done', [CekOngkirController::class, 'simulation_done'])->name('simulation_done');




