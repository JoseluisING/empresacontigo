<div>
    {{-- Script para las aletras --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- Fin de scripts --}}
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">


    @if (Auth::user()->id_rol == 1)
        @livewire('lista-avisos-admin')

    @elseif(Auth::user()->id_rol == 2)

        @livewire('lista-avisos-empleado')

    @endif

    @if (session('btnEliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'Tu aviso ha sido eliminado',
                'success'
            );

        </script>

    @endif
    @if (session('btnCrear') == 'ok')
        <script>
            Swal.fire(
                '¡Aviso creado!',
                'Tu aviso ha sido publicado correctamente',
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
