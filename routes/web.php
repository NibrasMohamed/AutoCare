<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomerRegisterController;
use App\Http\Controllers\RepairsController;
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
    return view('pages.home-page', ['projects' => [], 'staffs' => []]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('role_check')->name('home');


Auth::routes();

Route::get('/customer-login', [CustomerRegisterController::class, 'login']);

Route::get('/register-customer', [CustomerRegisterController::class, 'index']);
Route::post('/register-customer', [CustomerRegisterController::class, 'store']);

Route::resource('employees', App\Http\Controllers\EmployeeController::class);


Route::resource('repairs', App\Http\Controllers\RepairsController::class);
Route::get('/repair/generate-pdf', [RepairsController::class, 'generatePdf']);


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

Route::post('post-appointment', [AppointmentController::class, 'makeAppointment']);
Route::get('make-appointment', [AppointmentController::class, 'getAppointment']);


// new routes
Route::get('/appointment/details/get/{id}', [AppointmentController::class, 'getAppointmentDetails']);
Route::post('/appointment/update-stats', [AppointmentController::class, 'updateStatus']);


Route::get('/appointment/activites/get/{project_id}', [AppointmentController::class, 'getAppointmentActivities']);
Route::get('/appointment/details/create', [AppointmentController::class, 'createAppointmentDetails']);
Route::post('/appointment/details/store', [AppointmentController::class, 'storeAppointmentDetails']);
Route::get('/appointment/details/get-image/{id}', [AppointmentController::class, 'getImageByFileMaster']);


