<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 py-12">

        <div class="flex items-center justify-center">
            <div class="m-3">
                <a href="{{ route('notificacionAdmin') }}"
                    class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"
                    href="#">
                    <span class="mr-2">Nuevo Aviso</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <x-table>
            <div class="px-6 py-4">
                <x-jet-input class="w-full" placeholder="Buscar por Tema..." type="text" wire:model="search" />
            </div>
            @if ($listaAdmin->count())

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="ordenar('tema')">
                                Temas
                                {{-- Icono ordena por --}}
                                @if ($ordenanaBy == 'tema')
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
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($listaAdmin as $lisAdmin)
                            <tr>
                                <td class="">
                                    <!-- component -->
                                    <article
                                        class="w-full mx-auto  md:p-4 bg-white "
                                        data-article-path="/hagnerd/setting-up-tailwind-with-create-react-app-4jd"
                                        data-content-user-id="112962">
                                        <div role="presentation">
                                            <div>
                                                <div class="m-2">
                                                    <div class="flex items-center">
                                                        <div class="mr-2">

                                                            @if ($lisAdmin->profile_photo_path == [])
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                                    height="40" fill="currentColor"
                                                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                                </svg>
                                                            @else
                                                                <img class="rounded-full w-8"
                                                                    src="/storage/{{ $lisAdmin->profile_photo_path }}">
                                                            @endif

                                                        </div>
                                                        <div>
                                                            <p class="text text-gray-700 text-sm hover:text-black">
                                                                {{ $lisAdmin->name . ' ' . $lisAdmin->ap_p . ' ' . $lisAdmin->ap_m }}
                                                            </p>
                                                            <p class="text-xs text-gray-600 hover:text-black">
                                                                {{ $lisAdmin->fecha }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pl-12 md:pl-10 xs:pl-10">
                                                    <h2 class="text-2xl font-bold mb-2 hover:text-blue-600 leading-7">
                                                        {{ $lisAdmin->tema }}
                                                    </h2>
                                                    <div class="mb-1 leading-6">
                                                        {{ $lisAdmin->comentario }}
                                                    </div>
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex">

                                                            <a href="{{ route('notificacionAdmin.edit', $lisAdmin->id) }}"
                                                                class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                                                                Editar
                                                            </a>

                                                            <a href="{{ route('notificacionAdmin.eliminar', $lisAdmin->id) }}"
                                                                class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black"
                                                                id="btnEliminar">
                                                                Eliminar
                                                            </a>

                                                        </div>
                                                        <div class="flex items-center">
                                                            <small class="mr-2 text-gray-600">
                                                                {{ Carbon\Carbon::parse($lisAdmin->created_at)->diffForHumans() }}
                                                            </small>
                                                            <form action="{{ route('especificNotificacion') }}"
                                                                method="POST">
                                                                @csrf
                                                                <input type="hidden" name="txtIdNotificacion" id=""
                                                                    value="{{ $lisAdmin->id }}">
                                                                <button type="submit" name="" id=""
                                                                    class="bg-gray-400 rounded text-sm px-3 py-2 text-current hover:text-black hover:bg-gray-500">
                                                                    Ver
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </td>
                            </tr>
                        @endforeach
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
