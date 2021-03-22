@extends('layouts.links')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }} / Bienvenid@: {{ Auth::user()->name . ' ' . Auth::user()->ap_p . ' ' . Auth::user()->ap_m }}
        @if (Auth::user()->id_rol == 1)
        <div class="inline-block mr-2 mt-2">
            <button type="button" class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 rounded-md hover:bg-blue-100">Admin</button>
        </div>
        @else
        <div class="inline-block mr-2 mt-2">
            <button type="button" class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md hover:bg-green-100">Empleado</button>
        </div>
        @endif
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container-fluid bg-gray-200">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sección 1</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Sección 2</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Sección 3</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    	                <div class="row justify-center">
                    <h1 class="text-center  text-red-600 p-10 font-extrabold">Cuestionario Uno <br>
                        <p class="text-black text-lg">Por favor responde a este cuestionario.</p>
                        <p class="text-black text-lg">Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes:</p>
                    </h1>
                    <div class="col-md-6 text-center bg-gray-200 p-3 text-xl">
                        <form action="{{ route('resultados') }}" method="get" class="row g-3 text-center justify-center">
                            @csrf
                            @foreach ($pregunta as $preguntas)
                            <div class="col-auto">
                                <label>{{ $preguntas->pregunta }}</label>
                                <div>
                                    <input type="radio" name="{{ $preguntas->id }}" value=0 required>
                                    <label class="mr-10">Si</label>
                                    <input type="radio" name="{{ $preguntas->id }}" value=1 required>
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
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2</div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>
                </div>

            </div>
        </div>
    </div>
    @endsection
