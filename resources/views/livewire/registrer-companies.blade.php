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

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1 p-5">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Registra tu empresa</h3>
                            <p class="mt-1 text-sm text-gray-600 text-red-600"> <br>
                                @error('rfc_company') <span>{{ $message }}</span> @enderror
                                @error('name') <span>{{ $message }}</span> @enderror <br>
                                @error('cp') <span>{{ $message }}</span> @enderror <br>
                                @error('user_id') <span>{{ $message }}</span> @enderror <br>
                                @error('telefono') <span>{{ $message }}</span> @enderror
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" method="">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre *
                                                Empresa</label>
                                            <input type="text" id="name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="name" name="name">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="rfc_company" class="block text-sm font-medium text-gray-700">RFC *
                                                Empresa</label>
                                            <input type="text" name="rfc_company" id="rfc_company" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="rfc_company">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="cp"
                                                class="block text-sm font-medium text-gray-700">CP</label>
                                            <input type="text" name="cp" id="cp" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="cp">

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="telefono"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="text" name="telefono" id="telefono" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="telefono">

                                        </div>

                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            wire:click="store">
                                            Guardar
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
