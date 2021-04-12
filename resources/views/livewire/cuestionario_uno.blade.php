@extends('layouts.links')
@section('content')
    <style type="text/css">
        /*En tu hoja de estilos */
        a:link,
        a:visited,
        a:active {
            text-decoration: none;
        }

    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} / Bienvenid@:
            {{ Auth::user()->name . ' ' . Auth::user()->ap_p . ' ' . Auth::user()->ap_m }}
            @if (Auth::user()->id_rol == 2)
                <div class="inline-block mr-2 mt-2">
                    <button type="button"
                        class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 rounded-md hover:bg-blue-100">Admin</button>
                </div>
            @else
                <div class="inline-block mr-2 mt-2">
                    <button type="button"
                        class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md hover:bg-green-100">Empleado</button>
                </div>
            @endif
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container-fluid bg-gray-200">
                    @if ($resultado_s1 == 1 || $resultado_s1 == 2)
                        Cuestionario Completado
                    @else
                        <div class="tab-content" id="nav-tabContent">
                            @if ($resultado_s1 == 0)
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                @else
                                    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            @endif
                            <div class="row justify-center">
                                <h1 class="text-center  text-red-600 p-10 font-extrabold">Cuestionario Uno<br>
                                    <p class="text-black text-lg">Por favor responde a este cuestionario.</p>
                                    <p class="text-black text-lg">Ha presenciado o sufrido alguna vez, durante o con motivo
                                        del trabajo un acontecimiento como los siguientes:</p>
                                </h1>
                                <div class="col-md-6 text-center bg-gray-200 p-3 text-xl">
                                    <form action="{{ route('resultados1') }}" method="get"
                                        class="row g-3 text-center justify-center">
                                        @csrf
                                        @foreach ($seccion_uno as $preguntas)
                                            <div class="col-auto">
                                                <label>{{ $preguntas->pregunta }}</label>
                                                <div>
                                                    <input type="radio" name="{{ $preguntas->id }}" value=1 required>
                                                    <label class="mr-10">Si</label>
                                                    <input type="radio" name="{{ $preguntas->id }}" value=0 required>
                                                    <label class="mb-7">No</label>
                                                </div>
                                            </div>
                                            <br>
                                        @endforeach
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit">Continuar cuestionario</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @if ($resultado_s1 == 3)
                            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                            @else
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                        @endif
                        <div class="row justify-center">
                            <h1 class="text-center  text-red-600 p-10 font-extrabold">Cuestionario Uno<br>
                                <p class="text-black text-lg">Por favor responde a este cuestionario.</p>
                                <p class="text-black text-lg">Durante el último mes:</p>
                            </h1>
                            <div class="col-md-6 text-center bg-gray-200 p-3 text-xl">
                                <form action="{{ route('resultados2') }}" method="get"
                                    class="row g-3 text-center justify-center">
                                    @csrf
                                    @foreach ($seccion_dos as $preguntas)
                                        <div class="col-auto">
                                            <label>{{ $preguntas->pregunta }}</label>
                                            <div>
                                                <input type="radio" name="{{ $preguntas->id }}" value=1 required>
                                                <label class="mr-10">Si</label>
                                                <input type="radio" name="{{ $preguntas->id }}" value=0 required>
                                                <label class="mb-7">No</label>
                                            </div>
                                        </div>
                                        <br>
                                    @endforeach
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Continuar cuestionario</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
                @if ($resultado_s1 == 4)
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel"
                        aria-labelledby="nav-contact-tab">
                    @else
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                @endif
                <div class="row justify-center">
                    <h1 class="text-center  text-red-600 p-10 font-extrabold">Cuestionario Uno<br>
                        <p class="text-black text-lg">Por favor responde a este cuestionario.</p>
                        <p class="text-black text-lg">Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo
                            un acontecimiento como los siguientes:</p>
                    </h1>
                    <div class="col-md-6 text-center bg-gray-200 p-3 text-xl">
                        <form action="{{ route('resultados3') }}" method="get"
                            class="row g-3 text-center justify-center">
                            @csrf
                            @foreach ($seccion_tres as $preguntas)
                                <div class="col-auto">
                                    <label>{{ $preguntas->pregunta }}</label>
                                    <div>
                                        <input type="radio" name="{{ $preguntas->id }}" value=1 required>
                                        <label class="mr-10">Si</label>
                                        <input type="radio" name="{{ $preguntas->id }}" value=0 required>
                                        <label class="mb-7">No</label>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Continuar cuestionario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if ($resultado_s1 == 5)
                <div class="tab-pane fade show active" id="nav-defen" role="tabpanel" aria-labelledby="nav-defen-tab">
                @else
                    <div class="tab-pane fade" id="nav-defen" role="tabpanel" aria-labelledby="nav-defen-tab">
            @endif
            <div class="row justify-center">
                <h1 class="text-center  text-red-600 p-10 font-extrabold">Cuestionario Uno<br>
                    <p class="text-black text-lg">Por favor responde a este cuestionario.</p>
                    <p class="text-black text-lg">Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un
                        acontecimiento como los siguientes:</p>
                </h1>
                <div class="col-md-6 text-center bg-gray-200 p-3 text-xl">
                    <form action="{{ route('resultados4') }}" method="get" class="row g-3 text-center justify-center">
                        @csrf
                        @foreach ($seccion_cuatro as $preguntas)
                            <div class="col-auto">
                                <label>{{ $preguntas->pregunta }}</label>
                                <div>
                                    <input type="radio" name="{{ $preguntas->id }}" value=1 required>
                                    <label class="mr-10">Si</label>
                                    <input type="radio" name="{{ $preguntas->id }}" value=0 required>
                                    <label class="mb-7">No</label>
                                </div>
                            </div>
                            <br>
                        @endforeach
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Continuar cuestionario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
    </div>
    </div>
    </div>
    </div>


@endsection
