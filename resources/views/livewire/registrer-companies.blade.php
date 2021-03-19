<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        {{ __('Dashboard') }} / Bienvenid@:
        {{ Auth::user()->name . ' ' . Auth::user()->ap_p . ' ' . Auth::user()->ap_m }}
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

<div class="">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
        <div class="mt-6 text-gray-500">
            @if (!App\Models\companies::where('user_id', '=', Auth::user()->id)->first())
                <div class="flex bg-red-lighter max-w-lg mb-4">
                    <div class="w-16 bg-red">
                        <div class="p-4">
                            <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M437.019 74.981C388.667 26.629 324.38 0 256 0S123.333 26.63 74.981 74.981 0 187.62 0 256s26.629 132.667 74.981 181.019C123.332 485.371 187.62 512 256 512s132.667-26.629 181.019-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.668-74.981-181.019zM256 470.636C137.65 470.636 41.364 374.35 41.364 256S137.65 41.364 256 41.364 470.636 137.65 470.636 256 374.35 470.636 256 470.636z"
                                    fill="#FFF" />
                                <path
                                    d="M341.22 170.781c-8.077-8.077-21.172-8.077-29.249 0L170.78 311.971c-8.077 8.077-8.077 21.172 0 29.249 4.038 4.039 9.332 6.058 14.625 6.058s10.587-2.019 14.625-6.058l141.19-141.191c8.076-8.076 8.076-21.171 0-29.248z"
                                    fill="#FFF" />
                                <path
                                    d="M341.22 311.971l-141.191-141.19c-8.076-8.077-21.172-8.077-29.248 0-8.077 8.076-8.077 21.171 0 29.248l141.19 141.191a20.616 20.616 0 0 0 14.625 6.058 20.618 20.618 0 0 0 14.625-6.058c8.075-8.077 8.075-21.172-.001-29.249z"
                                    fill="#FFF" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-auto text-black opacity-75 items-center p-4">
                        <span class="text-lg font-bold pb-4 ">
                            ¿Espera qué? <img src="{{ asset('assets/empre/img/icon-chemms.png') }}"
                                class="h-24 w-24  rounded-full object-cover" alt="">
                        </span>
                        <p class="leading-tight">
                            Al parecer no has terminado tu registro completo.
                        <p class="text-pink-600">
                            Completa
                            tus datos
                            empresariales y podras continuar
                        </p>
                        </p>
                    </div>
                </div>
        </div>
        @endif
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1 p-5">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Registra tu empresa</h3>
                            <p class="mt-1 text-sm text-gray-600 text-red-600"> <br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" wire:submit.prevent="save" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre
                                                *
                                                Empresa</label>
                                            <input type="text" id="name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.name" name="name">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="rfc_company" class="block text-sm font-medium text-gray-700">RFC
                                                *
                                                Empresa</label>
                                            <input type="text" name="rfc_company" id="rfc_company"
                                                autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.rfc_company">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="cp" class="block text-sm font-medium text-gray-700">CP</label>
                                            <input type="text" name="cp" id="cp" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.cp">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="telefono"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="text" name="telefono" id="telefono" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.telefono">

                                        </div>

                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Guardar
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
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
            '¡Información Guarda!',
            'Tu información ha sido almacenada correctamente',
            'success'
        );

    </script>

@endif
