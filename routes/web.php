<?php

use App\Http\Livewire\Avisos;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Empleado;
use App\Http\Livewire\EspecificAvisos;
use App\Http\Livewire\GuardaAvisos;
use App\Http\Livewire\InformacionClinica;
use App\Http\Livewire\ListaAvisos;
use App\Http\Livewire\ListaEmpleados;
use App\Http\Livewire\ListaMailbox;
use App\Http\Livewire\RegistrarEmpleado;
use App\Http\Livewire\RegistrerCompanies;
use App\Http\Livewire\mailbox;
use App\Http\Livewire\RegistraMailbox;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\ReporteController;

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
/*Route::get('/', function () {
    return view('welcome');
});*/
//Rutas estaticas
Route::view("/", 'index')->name('index');
Route::view("/contact", 'contact')->name('contact');
Route::view("/about", 'about')->name('acercade');
Route::view("/elementos", 'elementos')->name('elementos');
Route::view("/aviso", 'aviso')->name('aviso');

//Rutas usuario
Route::get('/user', Empleado::class)->middleware(['auth', 'isUser'])->name('user');
Route::get('/NewMailbox', RegistraMailbox::class)->middleware(['auth', 'isUser'])->name('NewMailbox');

//Rutas admin
Route::get('/MyEmpleados', ListaEmpleados::class)->middleware(['auth', 'isAdmin'])->name('misempleados');
Route::get('/NewEmpleado', RegistrarEmpleado::class)->middleware(['auth', 'isAdmin'])->name('registrarEmpleado');
Route::get('/RegistraEmpresa', RegistrerCompanies::class)->middleware(['auth', 'isAdmin'])->name('registraCompañia');
Route::get('/NewNotifications', Avisos::class)->middleware(['auth', 'isAdmin'])->name('notificacionAdmin');
Route::get('/NewNotifications/{id}', Avisos::class)->middleware(['auth', 'isAdmin'])->where('id', '[0-9]+')->name('notificacionAdmin.edit');
Route::get('/NewNotifications/Elininar/{id_eliminar}', Avisos::class)->middleware(['auth', 'isAdmin'])->where('id', '[0-9]+')->name('notificacionAdmin.eliminar');
Route::get('/Mailbox', ListaMailbox::class)->middleware(['auth', 'isAdmin'])->name('mailbox');

//Rutas Ambos
Route::get('/RegistraClinicaInformation', InformacionClinica::class)->middleware(['auth'])->name('clinicalInformation');
Route::get('/ListaNotifications', ListaAvisos::class)->middleware(['auth'])->name('listanNotificacion');
Route::post('/EspecificNotifications', EspecificAvisos::class)->middleware(['auth'])->name('especificNotificacion');
Route::post('/GuardaAviso', GuardaAvisos::class)->middleware(['auth'])->name('guardaAviso');

//Dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Registro de empleados 2

Route::resource('/registro/empleado', EmpleadosController::class);

Route::resource('/cuestionario/uno', CuestionarioController::class);

Route::get('resultados', [CuestionarioController::class, 'resultados'])->name('resultados');

Route::get('/reporte/empresas', [ReporteController::class, 'reporteEmpresarios'])->name('reportempresarios');

Route::get('/compilar/empresas', [ReporteController::class, 'compilarEmpresarios'])->name('compilarempresarios');