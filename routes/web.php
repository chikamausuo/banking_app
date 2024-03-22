<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





////////////////////////////////////////////transfer route///////////////////////////////////////

//create route
Route::get('/create_trf', [TransferController::class, 'create_trf'])->name('create_trf');
//store route
Route::get('/store_trf', [TransferController::class, 'store_trf'])->name('store_trf');
//update route
Route::get('/update_trf', [TransferController::class, 'update_trf'])->name('update_trf');
//reciept route
Route::get('/reciept_trf', [TransferController::class, 'reciept_trf'])->name('reciept_trf');