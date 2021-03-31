<x-app-layout>

    @if (Auth::user()->id_rol == 1)
        <x-jet-welcome />

    @elseif(Auth::user()->id_rol == 2)

        @livewire('dashboard-user')

    @endif
    <p class="text-center p-4 text-gray-600 bg-white pt-10">
        Todos los derechos reservados |
        <span class="text-blue-800">EmpresaContigo S.A de C.V.<br> Copyright &copy;<script>
                document.write(new Date().getFullYear());

            </script> </span>
    <p>
</x-app-layout>
