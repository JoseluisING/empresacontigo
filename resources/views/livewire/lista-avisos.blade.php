<link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
<div class="py-12">

    @if (Auth::user()->id_rol == 1)
        <div class="flex items-center justify-center">
            <div class="m-3">
                <a href="{{ route('notificacionAdmin') }}"
                    class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"
                    href="#">
                    <span class="mr-2">Nuevo Aviso</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                    </svg>
                </a>
            </div>
        </div>
        @foreach ($li as $lis)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex max-w-bg bg-white shadow-bg rounded-lg overflow-hidden">
                        <div class="w-2 bg-gray-800"></div>
                        <div class="flex items-center px-2 py-3">

                            @if ($lis->profile_photo_path == [])
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            @else
                                <img class="w-16 h-16 object-cover rounded-full"
                                    src="/storage/{{ $lis->profile_photo_path }}">
                            @endif
                            <div class="mx-3">
                                <h1 class="text-xl font-semibold text-dark-800">
                                    {{ $lis->name . ' ' . $lis->ap_p . ' ' . $lis->ap_m }}</h1>
                                <h2 class="text-xl font-semibold text-gray-800"> {{ $lis->tema }}<small
                                        class="text-gray-500"> {{ $lis->fecha }}
                                        {{ $lis->hora }}</small></h2>
                                <p class="text-gray-600">{{ $lis->comentario }}.</p>

                                <form action="{{ route('especificNotificacion') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="txtIdNotificacion" id="" value="{{ $lis->id }}">
                                    <button type="submit" name="" id=""
                                        class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                                        Ver
                                    </button>
                                </form>
                                @if (Auth::user()->id_rol == 1)
                                    <br>
                                    <a href="{{ route('notificacionAdmin.edit', $lis->id) }}"
                                        class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                                        Editar
                                    </a>

                                    <a href="{{ route('notificacionAdmin.eliminar', $lis->id) }}"
                                        class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                        Eliminar
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div><br>
            </div>
        @endforeach
    @endif

    @foreach ($listaE as $lis)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex max-w-bg bg-white shadow-bg rounded-lg overflow-hidden">
                    <div class="w-2 bg-gray-800"></div>
                    <div class="flex items-center px-2 py-3">
                        @if ($lis->profile_photo_path == [])
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        @else
                            <img class="w-16 h-16 object-cover rounded-full"
                                src="/storage/{{ $lis->profile_photo_path }}">
                        @endif
                        <div class="mx-3">
                            <h1 class="text-xl font-semibold text-dark-800">
                                {{ $lis->name . ' ' . $lis->ap_p . ' ' . $lis->ap_m }}</h1>
                            <h2 class="text-xl font-semibold text-gray-800"> {{ $lis->tema }}<small
                                    class="text-gray-500"> {{ $lis->fecha }}
                                    {{ $lis->hora }}</small></h2>
                            <p class="text-gray-600">{{ $lis->comentario }}.</p>

                            <form action="{{ route('especificNotificacion') }}" method="POST">
                                @csrf
                                <input type="hidden" name="txtIdNotificacion" id="" value="{{ $lis->id }}">
                                <button type="submit" name="" class="text-blue-500" id="">Ver</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div><br>
        </div>
    @endforeach
</div>
