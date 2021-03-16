<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1 p-5">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Envía tus sugerencia</h3>
                            <p class="mt-1 text-sm text-gray-600 text-red-600">
                                <small>*Recuerda tus sugerencias son anónimas</small>
                                <br>
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
                                        <div class="col-span-6 sm:col-span-5">
                                            <label for="tema" class="block text-sm font-medium text-gray-700">
                                                Tema</label>
                                            <input type="text" id="tema"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.tema" name="tema">

                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6 py-3">
                                        <div class="sm:col-span-5">
                                            <div class="flex flex-wrap mb-6">
                                                <div class="relative w-full appearance-none label-floating">
                                                    <label for="message">
                                                        Queja o Sugerencia
                                                    </label>
                                                    <textarea
                                                        class="autoexpand tracking-wide py-4 px-4 mb-3 leading-relaxed appearance-none block w-full  rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="message" type="text" placeholder="Ej. Hola Ing..."
                                                        wire:model="informacionC.sugerencias"></textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-4 py-3  text-right sm:px-6">
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
            '¡Felicidades!',
            'Tu sugerencia fue enviada correctamente',
            'success'
        );

    </script>

@endif
