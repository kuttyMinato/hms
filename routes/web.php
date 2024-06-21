<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('home');
    });
});

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth','verified')->name('home');


Route::get('/add_doctor_view', [AdminController::class, 'addview']);


Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::get('/showappointments', [AdminController::class, 'showappointments']);

Route::get('/showdoctor', [AdminController::class, 'showdoctor']);

Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);


Route::get('/approved/{id}', [HomeController::class, 'approved']);

Route::get('/canceled/{id}', [HomeController::class, 'cancelled']);


Route::post('/appointment', [HomeController::class, 'appointments']);

Route::get('/myappointment', [HomeController::class, 'myappointments']);

Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::get('/editdoctor/{id}',[AdminController::class,'editdoctor']);
