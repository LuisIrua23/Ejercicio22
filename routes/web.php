<?php
namespace App\Http\CustomerController;

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('customer/listar', [CustomerController::class, 'listar'])->name('customer.listar');
Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::get('customer/{customer}', [CustomerController::class, 'show'])->name('customer.show');
Route::put('customer/{customer}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('customer/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');