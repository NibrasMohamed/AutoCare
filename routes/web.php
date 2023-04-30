<?php

use App\Http\Controllers\SparePartController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Route::resource('employees', App\Http\Controllers\EmployeeController::class);


Route::resource('repairs', App\Http\Controllers\RepairsController::class);


Route::resource('inventories', App\Http\Controllers\InventoryController::class);


Route::resource('suppliers', App\Http\Controllers\SupplierController::class);

Route::get('get-spare-parts', [SparePartController::class, "getSpareParts"]);

Route::resource('spareParts', App\Http\Controllers\SparePartController::class);


Route::resource('orders', App\Http\Controllers\OrderController::class);


Route::resource('repairTypes', App\Http\Controllers\RepairTypeController::class);


Route::resource('supplierInventories', App\Http\Controllers\SupplierInventoryController::class);


Route::resource('manufacturers', App\Http\Controllers\ManufacturerController::class);


Route::resource('appointments', App\Http\Controllers\AppointmentController::class);


Route::resource('vehicles', App\Http\Controllers\VehicleController::class);


Route::resource('spareParts', App\Http\Controllers\SparePartController::class);
