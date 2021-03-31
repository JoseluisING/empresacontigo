<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 py-12">
        <x-table>
            <div class="px-6 py-4 flex items-center">
                <x-jet-input class="flex-1 mr-4" placeholder="Busqueda por Título..." type="text" wire:model="search" />
            </div>
            {{-- If valida si existe almenos un post para mostrar la tabla --}}
            @if ($listaMail->count())
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="ordenar('id')">
                                Ultimo publicado

                                {{-- Icono ordena por --}}
                                @if ($ordenanaBy == 'id')
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
                        @foreach ($listaMail as $item)

                            <tr>
                                <td class="px-6 py-4 ">
                                    <h2 class="text-gray-800 text-3xl font-semibold">{{ $item->tema }}</h2>
                                    <p class="mt-2 text-gray-600">{{ $item->sugerencias }}</p>

                                    @if ($item->estado == 0)
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white-800">
                                            Autor: Anónimo
                                        </span>

                                    @else
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Autor: {{ $item->name . ' ' . $item->ap_p . ' ' . $item->ap_m }}
                                        </span>

                                    @endif
                                    <small class="mr-2 text-gray-600 float-right">
                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                    </small>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4 text-red-600">
                    ¡No hay registros coinsidentes!
                </div>
            @endif
        </x-table>
    </div>
</div>
