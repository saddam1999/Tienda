<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerArticulo;
use App\Http\Controllers\ControllerMarca;
use App\Http\Controllers\ControllerUsuario;
use App\Http\Controllers\ControllerServicio;
use App\Http\Controllers\ControllerSucursal;
use App\Http\Controllers\ControllerSettings;

use App\Http\Controllers\FileUploadController;

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
    return view('welcome', ['Articulo' => App\Models\Articulo::all(),'Marca' => App\Models\Marca::all(),'Usuario' => App\Models\User::all(),'Servicio' => App\Models\Servicio::all(),'Sucursal' => App\Models\Sucursal::all(),'Settings' => App\Models\Settings::all()]);
});
//Usuario
Route::get('/addusuario', [ControllerUsuario::class, 'store']);
Route::get('/editusuario/{id}', [ControllerUsuario::class, 'update']);
Route::get('/deleteusuario/{id}', [ControllerUsuario::class, 'destroy']);
//Articulo
Route::get('/store', [ControllerArticulo::class, 'store']);
Route::get('/editararticulo/{id}', [ControllerArticulo::class, 'update']);
Route::get('/deletearticulo/{id}', [ControllerArticulo::class, 'destroy']);
//Marca
Route::get('/marca', [ControllerMarca::class, 'marca']);
Route::get('/editmarca/{id}', [ControllerUsuario::class, 'update']);
Route::get('/deletemarca/{id}', [ControllerMarca::class, 'destroy']);
//Servicio
Route::get('/agregarservicio', [ControllerServicio::class, 'store']);
Route::get('/editservicio/{id}', [ControllerServicio::class, 'update']);
Route::get('/deleteservicio/{id}', [ControllerServicio::class, 'destroy']);
//Sucursal
Route::get('/agregarsucursal', [ControllerSucursal::class, 'store']);
Route::get('/editsucursal/{id}', [ControllerSucursal::class, 'update']);
Route::get('/deletesucursal/{id}', [ControllerSucursal::class, 'destroy']);
//Settings
Route::get('/agregarsettings', [ControllerSettings::class, 'store']);
Route::get('/editsettings/{id}', [ControllerSettings::class, 'update']);
Route::get('/deletesettings/{id}', [ControllerSettings::class, 'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard', ['Articulo' => App\Models\Articulo::all(),'Marca' => App\Models\Marca::all(),'Usuario' => App\Models\User::all(),'Servicio' => App\Models\Servicio::all(),'Sucursal' => App\Models\Sucursal::all(),'Settings' => App\Models\Settings::all()]);
})->name('dashboard');

Route::get('file-upload', [ FileUploadController::class, 'fileUpload' ])->name('file.upload');
Route::post('file-upload', [ FileUploadController::class, 'fileUploadPost' ])->name('file.upload.post');
