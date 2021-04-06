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
        {{ __('Dashboard') }} / Bienvenid@: {{ Auth::user()->name . ' ' . Auth::user()->ap_p . ' ' . Auth::user()->ap_m }}
        @if (Auth::user()->id_rol == 2)
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
                @if($resultado_c1 == 0)
                FAVOR DE RESPONDER EL CUESTIONARIO 1
                @elseif($resultado_c1 == 3 || $resultado_c1 == 4 || $resultado_c1 == 5)
                FAVOR DE CULMINAR EL CUESTIONARIO 1
                @elseif($resultado_c1 == 1 || $resultado_c1 == 2)
                        @if($resultado_c2 == 6)
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sección 1</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Sección 2</button>
                        <button class="nav-link" id="nav-defen-tab" data-bs-toggle="tab" data-bs-target="#nav-defen" type="button" role="tab" aria-controls="nav-defen" aria-selected="false">Sección 3</button>
                        <button class="nav-link" id="nav-sec6-tab" data-bs-toggle="tab" data-bs-target="#nav-sec6" type="button" role="tab" aria-controls="nav-sec6" aria-selected="false">Sección 4</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row justify-center">
                            <h1 class="text-center  text-red-600 p-10 font-extrabold">Cuestionario Dos Sección 1<br>
                                <p class="text-black text-lg">Por favor responde a este cuestionario.</p>
                                <p class="text-black text-lg">Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.</p>
                            </h1>
                            <div class="col-md-12 text-center bg-gray-200 text-xl">
                                <form action="{{ route('resultado1') }}" method="get" class="row g-3 text-center justify-center">
                                    @csrf
                                    @foreach ($seccion_uno as $preguntas)
                                    <div class="col-auto">
                                        <label>{{ $preguntas->pregunta }}</label>
                                        <div>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_siempre }} required>
                                            <label class="mr-10 mb-7">Siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_siempre }} required>
                                            <label class="mb-7 mr-10">Casi siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_algunas_veces }} required>
                                            <label class="mr-10">Algunas veces</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_nunca }} required>
                                            <label class="mb-7 mr-10">Casi nunca</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_nunca }} required>
                                            <label class="mb-7 mr-10">Nunca</label>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row justify-center">
                            <h1 class="text-center  text-red-600 p-10 font-extrabold">Cuestionario Dos Sección 2<br>
                                <p class="text-black text-lg">Por favor responde a este cuestionario.</p>
                                <p class="text-black text-lg">Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</p>
                            </h1>
                            <div class="col-md-12 text-center bg-gray-200 p-3 text-xl">
                                    @foreach ($seccion_dos as $preguntas)
                                    <div class="col-auto">
                                        <label>{{ $preguntas->pregunta }}</label>
                                        <div>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_siempre }} required>
                                            <label class="mr-10 mb-7">Siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_siempre }} required>
                                            <label class="mb-7 mr-10">Casi siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_algunas_veces }} required>
                                            <label class="mr-10">Algunas veces</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_nunca }} required>
                                            <label class="mb-7 mr-10">Casi nunca</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_nunca }} required>
                                            <label class="mb-7 mr-10">Nunca</label>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                                    <p class="text-black text-lg font-bold">Las preguntas siguientes están relacionadas con el tiempo destinado a su trabajo y sus responsabilidades familiares.</p>
                                    @foreach ($seccion_tres as $preguntas)
                                    <div class="col-auto">
                                        <label>{{ $preguntas->pregunta }}</label>
                                        <div>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_siempre }} required>
                                            <label class="mr-10 mb-7">Siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_siempre }} required>
                                            <label class="mb-7 mr-10">Casi siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_algunas_veces }} required>
                                            <label class="mr-10">Algunas veces</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_nunca }} required>
                                            <label class="mb-7 mr-10">Casi nunca</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_nunca }} required>
                                            <label class="mb-7 mr-10">Nunca</label>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-defen" role="tabpanel" aria-labelledby="nav-defen-tab">
                        <div class="row justify-center">
                            <h1 class="text-center  text-red-600 p-10 font-extrabold">Cuestionario Dos Sección 3<br>
                                <p class="text-black text-lg">Por favor responde a este cuestionario.</p>
                                <p class="text-black text-lg">Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo</p>
                            </h1>
                            <div class="col-md-12 text-center bg-gray-200 p-3 text-xl">
                                    @foreach ($seccion_cuatro as $preguntas)
                                    <div class="col-auto">
                                        <label>{{ $preguntas->pregunta }}</label>
                                        <div>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_siempre }} required>
                                            <label class="mr-10 mb-7">Siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_siempre }} required>
                                            <label class="mb-7 mr-10">Casi siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_algunas_veces }} required>
                                            <label class="mr-10">Algunas veces</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_nunca }} required>
                                            <label class="mb-7 mr-10">Casi nunca</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_nunca }} required>
                                            <label class="mb-7 mr-10">Nunca</label>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                                    <p class="text-black text-lg font-bold">Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su tabajo.</p>
                                    @foreach ($seccion_cinco as $preguntas)
                                    <div class="col-auto">
                                        <label>{{ $preguntas->pregunta }}</label>
                                        <div>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_siempre }} required>
                                            <label class="mr-10 mb-7">Siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_siempre }} required>
                                            <label class="mb-7 mr-10">Casi siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_algunas_veces }} required>
                                            <label class="mr-10">Algunas veces</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_nunca }} required>
                                            <label class="mb-7 mr-10">Casi nunca</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_nunca }} required>
                                            <label class="mb-7 mr-10">Nunca</label>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-sec6" role="tabpanel" aria-labelledby="nav-defen-tab">
                        <div class="row justify-center">
                            <h1 class="text-center  text-red-600 p-10 font-extrabold">Cuestionario Dos Sección 4<br>
                                <p class="text-black text-lg">Por favor responde a este cuestionario.</p>
                                <p class="text-black text-lg">Las preguntas siguientes se refieren a las relaciones con sus compañeros y su jefe.</p>
                            </h1>
                            <div class="col-md-12 text-center bg-gray-200 p-3 text-xl">
                                    @foreach ($seccion_seis as $preguntas)
                                    <div class="col-auto">
                                        <label>{{ $preguntas->pregunta }}</label>
                                        <div>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_siempre }} required>
                                            <label class="mr-10 mb-7">Siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_siempre }} required>
                                            <label class="mb-7 mr-10">Casi siempre</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_algunas_veces }} required>
                                            <label class="mr-10">Algunas veces</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_nunca }} required>
                                            <label class="mb-7 mr-10">Casi nunca</label>
                                            <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_nunca }} required>
                                            <label class="mb-7 mr-10">Nunca</label>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                                    <div class="col-md-12">
                                        <p class="text-black text-lg font-bold">Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</p>
                                        <p class="text-black text-lg">¿En mi trabajo debo brindar servicio a clientes o usuarios?</p>
                                        <input type="radio" name="preg1" value=1 onclick="ver()" required>
                                        <label class="mb-7" >SI</label>
                                        <input type="radio" name="preg1" id="nover" value=2 onclick="funciones()" checked="true" required>
                                        <label class="mb-7">NO</label>
                                        <script type="text/javascript">
                                            function ver(){
                                                var x = document.getElementById("mostrar");
                                                if (x.style.display === "none") {
                                                    x.style.display = "block";
                                                }
                                            }
                                            function ocultar(){
                                                var x = document.getElementById("mostrar");
                                                if (x.style.display === "block") {
                                                    x.style.display = "none";
                                                }
                                            }
                                            function ver_dos(){
                                                var x = document.getElementById("mostrar2");
                                                if (x.style.display === "none") {
                                                    x.style.display = "block";
                                                }
                                            }
                                            function ocultar_dos(){
                                                var x = document.getElementById("mostrar2");
                                                if (x.style.display === "block") {
                                                    x.style.display = "none";
                                                }
                                            }
                                            function funciones(){
                                                radi();
                                                ocultar();
                                            }
                                            function funciones_dos() {
                                                radi_dos();
                                                ocultar_dos();
                                            }
                                            function radi() {
                                                if (document.getElementById('nover').checked) {
                                                    var elemento = document.querySelectorAll("#ejemplo");
                                                        for (var i = 0; i < elemento.length; i++) {
                                                          elemento[i].checked = true;
                                                        }
                                                    // document.querySelector('#ejemplo').checked = true;
                                                }else{
                                                   document.querySelector('#ejemplo').checked = false;
                                                }
                                            }
                                            function radi_dos() {
                                                if (document.getElementById('nover_dos').checked) {
                                                    var elemento = document.querySelectorAll("#ejemplo_dos");
                                                        for (var i = 0; i < elemento.length; i++) {
                                                          elemento[i].checked = true;
                                                        }
                                                    // document.querySelector('#ejemplo').checked = true;
                                                }else{
                                                   document.querySelector('#ejemplo_dos').checked = false;
                                                }
                                            }
                                        </script>
                                        <div class="col-auto" id="mostrar" style="display: none;">
                                            @foreach ($opcion_uno as $preguntas)
                                            <label>{{ $preguntas->pregunta }}</label>
                                            <div>
                                                <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_siempre }} required>
                                                <label class="mr-10 mb-7">Siempre</label>
                                                <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_siempre }} required>
                                                <label class="mb-7 mr-10">Casi siempre</label>
                                                <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_algunas_veces }} required>
                                                <label class="mr-10">Algunas veces</label>
                                                <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_nunca }} required>
                                                <label class="mb-7 mr-10">Casi nunca</label>
                                                <input type="radio" id="ejemplo" name="{{ $preguntas->id }}" value={{ $preguntas->valor_nunca }} required>
                                                <label class="mb-7 mr-10">Nunca</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <br>
                                        <p class="text-black text-lg font-bold">Las siguientes preguntas están relacionadas con las actitudes de los trabajadores que supervisa.</p>
                                        <p class="text-black text-lg">¿Soy jefe de otros trabajadores?</p>
                                        <input type="radio" name="preg2" value=1 onclick="ver_dos()" required>
                                        <label class="mb-7" >SI</label>
                                        <input type="radio" name="preg2" id="nover_dos" value=2 onclick="funciones_dos()" checked="true" required>
                                        <label class="mb-7">NO</label>
                                        <div class="col-auto" id="mostrar2" style="display: none;">
                                            @foreach ($opcion_dos as $preguntas)
                                            <label>{{ $preguntas->pregunta }}</label>
                                            <div>
                                                <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_siempre }} required>
                                                <label class="mr-10 mb-7">Siempre</label>
                                                <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_siempre }} required>
                                                <label class="mb-7 mr-10">Casi siempre</label>
                                                <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_algunas_veces }} required>
                                                <label class="mr-10">Algunas veces</label>
                                                <input type="radio" name="{{ $preguntas->id }}" value={{ $preguntas->valor_casi_nunca }} required>
                                                <label class="mb-7 mr-10">Casi nunca</label>
                                                <input type="radio" id="ejemplo_dos" name="{{ $preguntas->id }}" value={{ $preguntas->valor_nunca }} required>
                                                <label class="mb-7 mr-10">Nunca</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Finalizar Cuestionario</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    @elseif($resultado_c2 != 6)
                        Cuestionario Completado
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
@endsection