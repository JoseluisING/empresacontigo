<div>
    {{-- Script para las aletras --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- Fin de scripts --}}
    <div class="py-5">
        <div class="flex items-center justify-center">
            <div class="m-3">
                <a href="{{ url('registro/empleado') }}"
                    class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                    <span class="mr-2">Nuevo Empleado</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24">
                        <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-table>
                <div class="px-6 py-4">
                    <x-jet-input class="w-full" placeholder="Buscar..." type="text" wire:model="search" />
                </div>
                @if ($li->count())
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    wire:click="ordenar('name')">
                                    Nombre

                                    {{-- Icono ordena por --}}
                                    @if ($ordenanaBy == 'name')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                    {{-- Fin icono ordena por --}}
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    wire:click="ordenar('cedula')">
                                    Cedula

                                    {{-- Icono ordena por --}}
                                    @if ($ordenanaBy == 'cedula')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                    {{-- Fin icono ordena por --}}
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    wire:click="ordenar('rfc')">
                                    Rfc
                                    {{-- Icono ordena por --}}
                                    @if ($ordenanaBy == 'rfc')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                    {{-- Fin icono ordena por --}}
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    wire:click="ordenar('curp')">
                                    Curp
                                    {{-- Icono ordena por --}}
                                    @if ($ordenanaBy == 'curp')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                    {{-- Fin icono ordena por --}}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Acciones
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            @foreach ($li as $lis)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                @if ($lis->profile_photo_path == [])
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="32"
                                                        fill="currentColor" class="bi bi-person-circle"
                                                        viewBox="0 0 16 16">
                                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                        <path fill-rule="evenodd"
                                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                    </svg>
                                                @else
                                                    <img class="h-8 w-8 rounded-full object-cover"
                                                        src="/storage/{{ $lis->profile_photo_path }}">
                                                @endif

                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $lis->name . ' ' . $lis->ap_p . ' ' . $lis->ap_m }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $lis->email }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $lis->cedula }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $lis->rfc }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $lis->curp }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <!-- <a href=" 
                                                class="text-indigo-600 hover:text-indigo-900">Eliminar</a> -->
                                        @if (Auth::user()->id_rol == 1)
                                            <a href="{{ route('lista.eliminar', $lis->id) }}"
                                                class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline "
                                                id="btnEliminar">
                                                Eliminar
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            <!-- More items... -->

                        </tbody>
                    </table>
                @else
                    <div class="px-6 py-4">
                        ¡No hay registros coinsidentes!
                    </div>
                @endif
            </x-table>

        </div>
    </div>

    @if (session('btnEliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'Tu empleado ha sido eliminado',
                'success'
            );

        </script>
    @endif
    <script>
        $(document).ready(function() {
            $(document).on('click', '#btnEliminar', function(e) {

                e.preventDefault();

                Swal.fire({
                    title: '¿Estas seguro?',
                    text: "No podras revertir cambios!",
                    icon: 'Cuidado',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Si, eliminar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = $(this).attr('href');

                    }
                })
            });
        });

    </script>


</div>
