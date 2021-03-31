<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 py-12">
    <x-table>
        <div class="px-6 py-4 flex items-center">
            {{-- <input type="text" name="" id="" wire:model="search"> --}}
            {{-- componente de LiveWire --}}
            <x-jet-input class="flex-1 mr-4" placeholder="Buscar..." type="text" wire:model="search" />
            @livewire('create-mailbox')
        </div>
        {{-- If valida si existe almenos un post para mostrar la tabla --}}
        @if ($lisMailbox->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="ordenar('tema')">
                            Tema

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
                        <th scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="ordenar('sugerencias')">
                            Sugerencia

                            {{-- Icono ordena por --}}
                            @if ($ordenanaBy == 'sugerencias')
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
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($lisMailbox as $post)

                        <tr>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">
                                    {{ $post->tema }}
                                </div>
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">
                                    {{ $post->sugerencias }}
                                </div>
                                <small class="mr-2 text-gray-600 float-right">
                                    {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
