<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Empleado;
use App\Http\Livewire\ListaEmpleados;
use App\Http\Livewire\RegistrarEmpleado;
use App\Http\Livewire\RegistrerCompanies;

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
Route::get('/user', Empleado::class)->middleware(['auth','isUser'])->name('user');

//Rutas admin
Route::get('/MyEmpleados', ListaEmpleados::class)->middleware(['auth','isAdmin'])->name('misempleados');

Route::get('/NewEmpleado', RegistrarEmpleado::class)->middleware(['auth','isAdmin'])->name('registrarEmpleado');

Route::get('/RegistraEmpresa', RegistrerCompanies::class)->middleware(['auth','isAdmin'])->name('registraCompañia');

//Dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
