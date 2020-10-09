<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerArticulo;
use App\Http\Controllers\ControllerMarca;
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
    return view('welcome');
});
Route::get('/store', [ControllerArticulo::class, 'store']);
Route::get('/marca', [ControllerMarca::class, 'marca']);
//Route::get('/marca','ControllerMarca@marca');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard', ['Articulo' => App\Models\Articulo::all(),'Marca' => App\Models\Marca::all()]);

})->name('dashboard');

Route::get('file-upload', [ FileUploadController::class, 'fileUpload' ])->name('file.upload');
Route::post('file-upload', [ FileUploadController::class, 'fileUploadPost' ])->name('file.upload.post');
