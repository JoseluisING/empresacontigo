<?php

use App\Http\Livewire\Avisos;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\EspecificAvisos;
use App\Http\Livewire\GuardaAvisos;
use App\Http\Livewire\InformacionClinica;
use App\Http\Livewire\ListaAvisos;
use App\Http\Livewire\ListaEmpleados;
use App\Http\Livewire\ListaMailbox;
use App\Http\Livewire\RegistrarEmpleado;
use App\Http\Livewire\RegistrerCompanies;
use App\Http\Livewire\RegistraMailbox;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\ReporteController;
use App\Http\Livewire\InfoEncuestas;

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
Route::get('/NewMailbox', RegistraMailbox::class)->middleware(['auth', 'isUser'])->name('NewMailbox');
Route::get('/InfoEncuestas', InfoEncuestas::class)->middleware(['auth', 'isUser'])->name('infoEncuestas');

//Rutas admin
Route::get('/MyEmpleados', ListaEmpleados::class)->middleware(['auth', 'isAdmin', 'verfyCompany'])->name('misempleados');
Route::get('/NewEmpleado', RegistrarEmpleado::class)->middleware(['auth', 'isAdmin', 'verfyCompany'])->name('registrarEmpleado');
Route::get('/RegistraEmpresa', RegistrerCompanies::class)->middleware(['auth', 'isAdmin'])->name('registraCompañia');
Route::get('/NewNotifications', Avisos::class)->middleware(['auth', 'isAdmin', 'verfyCompany'])->name('notificacionAdmin');
Route::get('/NewNotifications/{id}', Avisos::class)->middleware(['auth', 'isAdmin', 'verfyCompany'])->where('id', '[0-9]+')->name('notificacionAdmin.edit');
Route::get('/NewNotifications/Elininar/{id_eliminar}', Avisos::class)->middleware(['auth', 'isAdmin', 'verfyCompany'])->where('id', '[0-9]+')->name('notificacionAdmin.eliminar');
Route::get('/Mailbox', ListaMailbox::class)->middleware(['auth', 'isAdmin', 'verfyCompany'])->name('mailbox');
Route::get('/MyEmpleados/Eliminar/{id_eliminar}', ListaEmpleados::class)->middleware(['auth', 'isAdmin', 'verfyCompany'])->where('id', '[0-9]+')->name('lista.eliminar');

//Rutas Ambos
Route::get('/RegistraClinicaInformation', InformacionClinica::class)->middleware(['auth', 'verfyCompany'])->name('clinicalInformation');
Route::get('/ListaNotifications', ListaAvisos::class)->middleware(['auth', 'verfyCompany'])->name('listanNotificacion');
Route::post('/EspecificNotifications', EspecificAvisos::class)->middleware(['auth', 'verfyCompany'])->name('especificNotificacion');
Route::post('/GuardaAviso', GuardaAvisos::class)->middleware(['auth', 'verfyCompany'])->name('guardaAviso');

//Dashboard
Route::middleware(['auth:sanctum', 'verified', 'verfyCompany'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Registro de empleados 2

Route::resource('/registro/empleado', EmpleadosController::class);

Route::resource('/cuestionario/uno', CuestionarioController::class);

Route::get('resultados', [CuestionarioController::class, 'resultados'])->name('resultados');

// Route::get('/reporte/empresas', [ReporteController::class, 'reporteEmpresarios'])->name('reportempresarios');

// Route::get('/compilar/empresas', [ReporteController::class, 'compilarEmpresarios'])->name('compilarempresarios');

Route::get('/compilar/empresas', [ReporteController::class, 'compilarEmpresarios'])->name('compilarempresarios');
