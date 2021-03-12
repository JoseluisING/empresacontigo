    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
            @foreach ($listaMail as $item)
            <div class="">
                <div class="max-w-bg py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                    <div class="flex justify-center md:justify-end -mt-16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-gray-800 text-3xl font-semibold">{{ $item->tema }}</h2>
                        <p class="mt-2 text-gray-600">{{ $item->sugerencias }}</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <small class="font-medium text-indigo-500"> {{ $item->created_at }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

