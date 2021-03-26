<div>
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
                            <h2 class="text-xl font-semibold text-gray-800"> {{ $lis->tema }}
                                <small class="text-gray-500">
                                    {{ Carbon\Carbon::parse($lis->created_at)->diffForHumans() }}
                                </small>
                            </h2>
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
