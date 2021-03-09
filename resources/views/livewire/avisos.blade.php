<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1 p-5">
                        <div class="px-4 sm:px-0 ">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Avisos para tus Colaboradores</h3>
                            <p class="mt-1 text-sm text-gray-600">
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
                                        <div class="col-span-6 sm:col-span-6">
                                            <label for="txtTema"
                                                class="block text-sm font-medium text-gray-700">Tema</label>
                                            <input type="text" name="txtTema" id="txtTema"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.tema">
                                        </div>
                                    </div><br>
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="relative w-full appearance-none label-floating">
                                                <label for="txtDescripcion"
                                                    class="block text-sm font-medium text-gray-700">Descripción</label>
                                                <textarea
                                                    class="amt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    id="txtDescripcion" type="text"
                                                    wire:model="informacionC.comentario"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-4 py-3   text-right sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
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
