<?php


use App\Http\Controllers\homeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VehicleController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get( 'home',[homeController::class,'home'])->name('home');
Route::get('reservation',[ReservationController::class,'reservation'])->name('reservation');
Route::get('vehicle',[VehicleController::class,'vehicle'])->name('vehicle');
Route::get('carinfo/{id}',[VehicleController::class,'getcarinfo'])->name('carinfo');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')
->middleware('is_admin');
Route::get('/admin/addcars',[homeController::class,'admincars'])->name('admin.cars');
// Route::post('/admin/addcars',[VehicleController::class,'uploadphoto'])->name('upload.photo');

Route::post('/admin/addcars', [VehicleController::class,'submitcars'])->name('submitcars');
