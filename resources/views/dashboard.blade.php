<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Dashboard') }} / Bienvenid@: {{ Auth::user()->name .' '. Auth::user()->ap_p.' '. Auth::user()->ap_m}}
            @if(Auth::user()->id_rol==1)
            <div class="inline-block mr-2 mt-2">
                <button type="button" class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 rounded-md hover:bg-blue-100">Admin</button>
             </div>
            @else
            <div class="inline-block mr-2 mt-2">
                <button type="button" class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md hover:bg-green-100">Empleado</button>
             </div>
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
