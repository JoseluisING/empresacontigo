<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex max-w-bg bg-white shadow-bg rounded-lg overflow-hidden">
                <div class="w-2 bg-gray-800"></div>
                <div class="flex items-center px-2 py-3">
                    <div class="mx-3">
                        @foreach ($li as $lis)
                            <h1 class="text-xl font-semibold text-dark-800">
                                {{ $lis->name . ' ' . $lis->ap_p . ' ' . $lis->ap_m }}</h1>
                            <h2 class="text-xl font-semibold text-gray-800"> {{ $lis->tema }}<small
                                    class="text-gray-500"> {{ $lis->fecha }}
                                    {{ $lis->hora }}</small></h2>
                            <p class="text-gray-600">{{ $lis->comentario }}.</p>
                        @endforeach<br>
                        <h3 class="text-xl font-semibold text-gray-800">RESPUESTAS</h3>

                        @foreach ($informacionC as $lista)
                            <b>Autor: {{ $lista->name . ' ' . $lista->ap_p . ' ' . $lista->ap_m }}</b>
                            <p class="text-gray-600"> {{ $lista->comentario }} <small class="text-gray-500">
                                    {{ $lista->fecha }}
                                    {{ $lista->hora }}</small></h2>
                            </p>
                        @endforeach



                        @foreach ($li as $list)
                            <form action="{{ route('guardaAviso') }}" method="POST">
                                @csrf
                                <input type="hidden" name="txtIdNotificacion" id="" value="{{ $list->id }}">
                                <input type="text" name="txtResponder"
                                    class="rounded-l-lg p-2 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white"
                                    placeholder="Responder..." />
                                <button
                                    class="px-8 rounded-r-lg bg-blue-400  text-gray-800 font-bold p-2 uppercase border-blue-500 border-t border-b border-r">Publicar</button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
