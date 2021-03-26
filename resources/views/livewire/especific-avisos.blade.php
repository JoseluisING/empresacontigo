<br>
<div class="w-full mx-auto rounded-lg bg-white shadow p-5 text-gray-800" style="max-width: 800px">
    @foreach ($li as $lis)
        <div class="w-full flex mb-4">

            <div class="overflow-hidden rounded-full w-20 h-20 px-2">
                {{-- Foto de perfil --}}
                @if ($lis->profile_photo_path == [])
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                @else
                    <img class="w-16 h-16 object-cover rounded-full" src="/storage/{{ $lis->profile_photo_path }}">
                @endif
                {{-- Fin foto de perfil --}}
            </div>
            <div class="flex-grow pl-2">
                <h4 class="font-bold text-md"> {{ $lis->name . ' ' . $lis->ap_p . ' ' . $lis->ap_m }}</h4>
                <p class="text-xs text-gray-600"> {{ $lis->email }}</p>
            </div>
        </div>
        <div class="w-full mb-5">
            <p class="text-sm">{{ $lis->comentario }}</p>
        </div>
        <div class="w-full">
            <p class="text-xs text-gray-500 text-right">
                {{ Carbon\Carbon::parse($lis->created_at)->diffForHumans() }}
            </p>
        </div>
    @endforeach
    {{-- Formulario para responder Comentario --}}
    @foreach ($li as $list)
        <br>
        <center>
            <form action="{{ route('guardaAviso') }}" method="POST">
                @csrf
                <input type="hidden" name="txtIdNotificacion" id="" value="{{ $list->id }}">
                <input type="text" name="txtResponder"
                    class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none"
                    placeholder="Responder..." />
                <button
                    class="bg-blue-600 text-white text-base font-semibold rounded-md shadow-md hover:bg-indigo-600 p-3">Publicar</button>
            </form>
        </center>
    @endforeach
    {{-- Fin de formulario de respuesta --}}





    @foreach ($informacionC as $lista)
        <div class="container mx-auto max-w-bg p-2 space-y-4 justify-center items-center">
            <div class="bg-white items-center p-2 rounded-xl shadow border">


                <div class="w-full flex mb-4">

                    <div class="overflow-hidden rounded-full w-20 h-20 px-2">
                        {{-- Foto de perfil --}}
                        @if ($lista->profile_photo_path == [])
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        @else
                            <img class="w-16 h-16 object-cover rounded-full"
                                src="/storage/{{ $lista->profile_photo_path }}">
                        @endif
                        {{-- Fin foto de perfil --}}
                    </div>
                    <div class="flex-grow pl-2">
                        <h4 class="font-bold text-md"> {{ $lista->name . ' ' . $lista->ap_p . ' ' . $lista->ap_m }}
                        </h4>
                        <p class="text-xs text-gray-600"> {{ $lista->email }}</p>
                    </div>
                </div>
                <div class="w-full mb-5">
                    <p class="text-sm px-12">{{ $lista->comentario }}</p>
                </div>
                <div class="w-full">
                    <p class="text-xs text-gray-500 text-right">
                        {{ Carbon\Carbon::parse($lista->created_at)->diffForHumans() }}
                    </p>
                </div>

            </div>
        </div>
    @endforeach
</div>
