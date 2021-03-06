@extends('layouts.links')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        {{ __('Dashboard') }} / Bienvenid@: {{ Auth::user()->name . ' ' . Auth::user()->ap_p . ' ' . Auth::user()->ap_m }}
        @if (Auth::user()->id_rol == 1)
            <div class="inline-block mr-2 mt-2">
                <button type="button"
                    class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 rounded-md hover:bg-blue-100">Admin</button>
            </div>
        @else
            <div class="inline-block mr-2 mt-2">
                <button type="button"
                    class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md hover:bg-green-100">Empleado</button>
            </div>
        @endif
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1 p-5">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Registro Empleado</h3>
                            <p class="mt-1 text-sm text-gray-600 text-red-600"> <br>
                                @error('name') <span>{{ $message }}</span> @enderror
                                @error('app_p') <span>{{ $message }}</span> @enderror <br>
                                @error('ap_m') <span>{{ $message }}</span> @enderror <br>
                                @error('email') <span>{{ $message }}</span> @enderror <br>
                                @error('cedula') <span>{{ $message }}</span> @enderror <br>
                                @error('rfc') <span>{{ $message }}</span> @enderror <br>
                                @error('rfc_company') <span>{{ $message }}</span> @enderror <br>
                                @error('curp') <span>{{ $message }}</span> @enderror <br>
                                @error('fecha_nacimiento') <span>{{ $message }}</span> @enderror <br>
                                @error('password') <span>{{ $message }}</span> @enderror <br>
                                @error('nombre') <span>{{ $message }}</span> @enderror
</ul>
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form method="POST" action="{{ url('registro/empleado') }}">
                            @csrf
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="name"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                 name="name" onkeypress="return sololetras(event)" value="{{ old('name') }}">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name"
                                                class="block text-sm font-medium text-gray-700">Apellido Paterno</label>
                                            <input type="text" name="ap_p" id="last_name" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                 onkeypress="return sololetras(event)" value="{{ old('ap_p') }}">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name"
                                                class="block text-sm font-medium text-gray-700">Apellido Materno</label>
                                            <input type="text" name="ap_m" id="last_name" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                 onkeypress="return sololetras(event)" value="{{ old('ap_m') }}">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="text" name="email" id="last_name" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('email') }}">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name"
                                                class="block text-sm font-medium text-gray-700">Cedula</label>
                                            <input type="text" name="cedula" id="last_name" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                 onkeypress="return solonumeros(event)"
                                                onKeyUp="return limitar(event,this.value,8)"
                                                onKeyDown="return limitar(event,this.value,8)" value="{{ old('cedula') }}">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name"
                                                class="block text-sm font-medium text-gray-700">RFC</label>
                                            <input type="text" name="rfc" id="last_name" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                 onKeyUp="return limitar(event,this.value,10)"
                                                onKeyDown="return limitar(event,this.value,13)" value="{{ old('rfc') }}">

                                        </div>



                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name"
                                                class="block text-sm font-medium text-gray-700">Curp</label>
                                            <input type="text" name="curp" id="last_name" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                 onKeyUp="return limitar(event,this.value,18)"
                                                onKeyDown="return limitar(event,this.value,18)" value="{{ old('curp') }}">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name" class="block text-sm font-medium text-gray-700">Fecha
                                                nacimiento</label>
                                            <input type="date" name="fecha_nacimiento" id="last_name"
                                                autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                 max="2003-12-31" value="{{ old('fecha_naciemiento') }}">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name"
                                                class="block text-sm font-medium text-gray-700">Contraseña</label>
                                            <input type="password" name="password" id="last_name"
                                                autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('password') }}"
                                                >

                                        </div>

                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        >
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Script para las aletras --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{-- Fin de scripts --}}

@if (session('btnCrear') == 'ok')
    <script>
        Swal.fire(
            '¡Exito!',
            'Tu información ha sido almacenada correctamente',
            'success'
        );

    </script>
@endif
            <script>
                function sololetras(e) {
                    key = e.keyCode || e.which;
                    teclado = String.fromCharCode(key);
                    name = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJQLMNOPQRSTUVWXYZ";
                    especiales = "8-37-38-46";
                    teclado_especial = false;
                    for (var i in especiales) {
                        if (key == especiales[i]) {
                            teclado_especial = true
                        }
                    }
                    if (name.indexOf(teclado) == -1 && !teclado_especial) {
                        return false;
                    }
                }

                function solonumeros(e) {
                    key = e.keyCode || e.which;
                    teclado = String.fromCharCode(key)
                    name = "0123456789";
                    especiales = "8-37-38-46";
                    teclado_especial = false;
                    for (var i in especiales) {
                        if (key == especiales[i]) {
                            teclado_especial = true
                        }
                    }
                    if (name.indexOf(teclado) == -1 && !teclado_especial) {
                        return false;
                    }
                }

                function limitar(e, contenido, caracteres) {
                    var unicode = e.keyCode ? e.keyCode : e.charCode;

                    if (unicode == 8 || unicode == 46 || unicode == 13 || unicode == 9 || unicode == 37 || unicode ==
                        39 || unicode == 38 || unicode == 40)
                        return true;

                    if (contenido.length >= caracteres)
                        return false;

                    return true;
                }

            </script>
            <!-- wire:click="store" -->
@endsection