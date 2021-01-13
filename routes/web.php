<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerArticulo;
use App\Http\Controllers\ControllerMarca;
use App\Http\Controllers\ControllerUsuario;
use App\Http\Controllers\ControllerServicio;
use App\Http\Controllers\ControllerSucursal;
use App\Http\Controllers\ControllerSettings;
use App\Http\Controllers\ControllerCategoria;
use App\Http\Controllers\ControllerPromocion;
use App\Http\Controllers\ControllerEquipo;
use App\Http\Controllers\ControllerCaptura;
use App\Http\Controllers\ControllerCaja;
use App\Http\Controllers\ControllerPago_Equipo;
use App\Http\Controllers\imprimirController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Input;

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
    return view('welcome', ['Articulo' => App\Models\Articulo::all(),'Marca' => App\Models\Marca::all(),'Usuario' => App\Models\User::all()
    ,'Servicio' => App\Models\Servicio::all(),'Sucursal' => App\Models\Sucursal::all(),
    'Settings' => App\Models\Settings::all(),'Categoria' => App\Models\Categoria::all(),'Promocion' => App\Models\Promocion::all(),'Equipo' => App\Models\Equipo::all(),'Captura' => App\Models\Captura::all()]);
});
Route::get('/galleria/{id}', [ControllerCaptura::class, 'galleria']);
//Usuario
Route::get('/addusuario', [ControllerUsuario::class, 'store']);
Route::get('/editusuario/{id}', [ControllerUsuario::class, 'update']);
Route::get('/deleteusuario/{id}', [ControllerUsuario::class, 'destroy']);
//Articulo
Route::get('/store', [ControllerArticulo::class, 'store'])->name('subir');
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
//Categoria
Route::get('/agregarcategoria', [ControllerCategoria::class, 'store']);
Route::get('/editcategoria/{id}', [ControllerCategoria::class, 'update']);
Route::get('/deletecategoria/{id}', [ControllerCategoria::class, 'destroy']);

//ControllerPromocion
Route::get('/agregarpromocion', [ControllerPromocion::class, 'store']);
Route::get('/editpromocion/{id}', [ControllerPromocion::class, 'update']);
Route::get('/deletepromocion/{id}', [ControllerPromocion::class, 'destroy']);

//ControllerTaller ( EQUIPO)
Route::get('/agregarequipo', [ControllerEquipo::class, 'store']);
Route::get('/editequipo/{id}', [ControllerEquipo::class, 'update']);
Route::get('/deleteequipo/{id}', [ControllerEquipo::class, 'destroy']);
Route::get('/cambio_servicio/{id}', [ControllerEquipo::class, 'cambio_servicio']);

//ControllerCaptura ( EQUIPO)
Route::get('/agregarcaptura', [ControllerCaptura::class, 'store']);
Route::get('/editcaptura/{id}', [ControllerCaptura::class, 'update']);
Route::get('/deletecaptura/{id}', [ControllerCaptura::class, 'destroy']);
//status
Route::get('/cambio_status/{id}', [ControllerEquipo::class, 'status']);
//ControllerCaja
Route::get('/agregarcaja', [ControllerCaja::class, 'store']);
Route::get('/editcaja/{id}', [ControllerCaja::class, 'update']);
Route::get('/deletecaja/{id}', [ControllerCaja::class, 'destroy']);
//ControllerPagoEquipo( EQUIPO)
Route::get('/agregarpago/{id}', [ControllerPago_Equipo::class, 'store']);
Route::get('/editpago/{id}', [ControllerPago_Equipo::class, 'update']);
Route::get('/deletepago/{id}', [ControllerPago_Equipo::class, 'destroy']);
//imprimirController Ticket
Route::get('/imprimir/id={id}&csrf={csrf}', [imprimirController::class, 'update']);//para pagar un equipo ticket
Route::get('/QR/{id}', [imprimirController::class, 'QR']);//imprime un codigo de seguimiento  equipo QR
//mostrarEquipo
Route::get('/orden/{id}', [imprimirController::class, 'orden']);
//Creditos SMS
Route::get('/creditos/{id}', [creditosController::class, 'creditos']);
//Facebook ID
Route::get('/facebook', [SocialController::class, 'get_FacebookID']);

//ControllerPago Caja
Route::get('/agregarpagocaja', [ControllerPago_Equipo::class, 'caja']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard', ['Articulo' => App\Models\Articulo::all(),'Marca' => App\Models\Marca::all()
    ,'Usuario' => App\Models\User::all(),'Servicio' => App\Models\Servicio::all(),'Sucursal' => App\Models\Sucursal::all()
    ,'Settings' => App\Models\Settings::all(),'Categoria' => App\Models\Categoria::all(),'Promocion' => App\Models\Promocion::all()
    ,'Equipo' => App\Models\Equipo::all(),'Captura' => App\Models\Captura::all()
    ,'Galeria' => App\Models\Captura::all(),'Caja' => App\Models\Caja::all(),'Pago' => App\Models\Pago::all(),'Corte' => App\Models\Corte::all(),'Pago_Equipo' => App\Models\Pago_Equipo::all(),'MovimientoCaja' => App\Models\MovimientoCaja::all()]);
})->name('dashboard');

Route::get('file-upload', [ FileUploadController::class, 'fileUpload' ])->name('file.upload');
Route::post('file-upload', [ FileUploadController::class, 'fileUploadPost' ])->name('file.upload.post');
Route::get('/imprimir', 'imprimirController@imprimir')->name('imprimir');
Route::get('/carrito', function () {
    return view('carrito',  ['Articulo' => App\Models\Articulo::all(),'Marca' => App\Models\Marca::all()
    ,'Usuario' => App\Models\User::all(),'Servicio' => App\Models\Servicio::all(),'Sucursal' => App\Models\Sucursal::all()
    ,'Settings' => App\Models\Settings::all(),'Categoria' => App\Models\Categoria::all(),'Promocion' => App\Models\Promocion::all()
    ,'Equipo' => App\Models\Equipo::all(),'Captura' => App\Models\Captura::all()
    ,'Galeria' => App\Models\Captura::all(),'Caja' => App\Models\Caja::all(),'Pago' => App\Models\Pago::all(),'Corte' => App\Models\Corte::all(),'Pago_Equipo' => App\Models\Pago_Equipo::all(),'MovimientoCaja' => App\Models\MovimientoCaja::all()]);
});

