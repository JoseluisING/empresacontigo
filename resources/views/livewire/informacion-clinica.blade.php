<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1 p-5">
                        <div class="px-4 sm:px-0 ">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Información Clinica Personal </h3>
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
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="txtAlergias"
                                                class="block text-sm font-medium text-gray-700">Alergias</label>
                                            <input type="text" name="txtAlergias" id="txtAlergias"
                                                autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.alergias">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="txtDiscapacidades"
                                                class="block text-sm font-medium text-gray-700">Discapacidades</label>
                                            <input type="text" name="txtDiscapacidades" id="txtDiscapacidades"
                                                autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.discapacidades">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="txtSeguro"
                                                class="block text-sm font-medium text-gray-700">Seguro</label>
                                            <input type="text" name="txtSeguro" id="txtSeguro" autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.seguro">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="txtNSS"
                                                class="block text-sm font-medium text-gray-700">NSS</label>
                                            <input type="text" name="txtNSS" id="txtNSS" autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                wire:model="informacionC.nss">
                                        </div>
                                    </div>

                                    <div class="px-4 py-3   text-right sm:px-6">
                                        <button type="submit" onclick="test()"
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

