<link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">

<!-- component -->
<!-- This is an example component -->
<div>
    <section class=" text-gray-200 bg-gray-900">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1
                    class="title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl">
                    @if ($nomEmpresa = App\Models\companies::select('name')
        ->where('user_id', '=', Auth::user()->id)
        ->get())
                        @foreach ($nomEmpresa as $item)
                            {{ $item->name }}
                        @endforeach

                    @endif
                </h1>
                <h3 class="">
                    -{{ Auth::user()->ap_p . ' ' . Auth::user()->ap_m . ' ' . Auth::user()->name }}
                </h3>
            </div>



            @if (!App\Models\InfoClinica::where('user_id', '=', Auth::user()->id)->first())
                <div class="p-6 sm:px-20 border-b border-gray-200">
                    <div class="flex bg-red-lighter max-w-md mb-4">
                        <div class="w-16 bg-red">
                            <div class="p-4">
                                <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M437.019 74.981C388.667 26.629 324.38 0 256 0S123.333 26.63 74.981 74.981 0 187.62 0 256s26.629 132.667 74.981 181.019C123.332 485.371 187.62 512 256 512s132.667-26.629 181.019-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.668-74.981-181.019zM256 470.636C137.65 470.636 41.364 374.35 41.364 256S137.65 41.364 256 41.364 470.636 137.65 470.636 256 374.35 470.636 256 470.636z"
                                        fill="#FFF" />
                                    <path
                                        d="M341.22 170.781c-8.077-8.077-21.172-8.077-29.249 0L170.78 311.971c-8.077 8.077-8.077 21.172 0 29.249 4.038 4.039 9.332 6.058 14.625 6.058s10.587-2.019 14.625-6.058l141.19-141.191c8.076-8.076 8.076-21.171 0-29.248z"
                                        fill="#FFF" />
                                    <path
                                        d="M341.22 311.971l-141.191-141.19c-8.076-8.077-21.172-8.077-29.248 0-8.077 8.076-8.077 21.171 0 29.248l141.19 141.191a20.616 20.616 0 0 0 14.625 6.058 20.618 20.618 0 0 0 14.625-6.058c8.075-8.077 8.075-21.172-.001-29.249z"
                                        fill="#FFF" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-auto text-black opacity-75 items-center p-4">
                            <span class="text-lg font-bold pb-4">
                                !Detente!
                            </span>
                            <p class="leading-tight">
                                Al parecer no has terminado tu registro completo.
                                <a href="{{ route('clinicalInformation') }}" class="text-pink-600">Completa tus
                                    datos
                                    Clinicos!!!</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            <!-- component -->
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row shadow-sm rounded p-4 border border-gray-300 p-6 rounded-lg">
                        <div
                            class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>

                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Usuarios</div>
                            <div class="font-bold text-lg">

                                @if ($numUser = App\Models\Empleado::select('id_rol')
        ->where('user_id', '=', Auth::user()->id)
        ->count('id_rol', '=', '2'))
                                    {{ $numUser }}


                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row shadow-sm rounded p-4 border border-gray-300 p-6 rounded-lg">
                        <div
                            class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                            <svg class="w-6 h-6" stroke="currentColor" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M467.819,431.851l-36.651-61.056c-16.896-28.181-25.835-60.437-25.835-93.312V224
                                       c0-82.325-67.008-149.333-149.333-149.333S106.667,141.675,106.667,224v53.483c0,32.875-8.939,65.131-25.835,93.312
                                       l-36.651,61.056c-1.984,3.285-2.027,7.403-0.149,10.731c1.899,3.349,5.461,5.419,9.301,5.419h405.333
                                       c3.84,0,7.403-2.069,9.301-5.419C469.845,439.253,469.803,435.136,467.819,431.851z M72.171,426.667l26.944-44.907
                                       C118.016,350.272,128,314.219,128,277.483V224c0-70.592,57.408-128,128-128s128,57.408,128,128v53.483
                                       c0,36.736,9.984,72.789,28.864,104.277l26.965,44.907H72.171z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M256,0c-23.531,0-42.667,19.136-42.667,42.667v42.667C213.333,91.221,218.112,96,224,96s10.667-4.779,10.667-10.667
                                       V42.667c0-11.776,9.557-21.333,21.333-21.333s21.333,9.557,21.333,21.333v42.667C277.333,91.221,282.112,96,288,96
                                       s10.667-4.779,10.667-10.667V42.667C298.667,19.136,279.531,0,256,0z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M302.165,431.936c-3.008-5.077-9.515-6.741-14.613-3.819c-5.099,2.987-6.805,9.536-3.819,14.613
                                       c2.773,4.715,4.288,10.368,4.288,15.936c0,17.643-14.357,32-32,32c-17.643,0-32-14.357-32-32c0-5.568,1.515-11.221,4.288-15.936
                                       c2.965-5.099,1.259-11.627-3.819-14.613c-5.141-2.923-11.627-1.259-14.613,3.819c-4.715,8.064-7.211,17.301-7.211,26.731
                                       C202.667,488.085,226.581,512,256,512s53.333-23.915,53.376-53.333C309.376,449.237,306.88,440,302.165,431.936z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Notificaciones</div>
                            @if ($numUser = App\Models\Notificaciones::select('user_id')
        ->where('reply', '=', '0')
        ->where('user_id', '=', Auth::user()->id)
        ->count('user_id', '=', '2'))
                                {{ $numUser }}


                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row shadow-sm rounded p-4 border border-gray-300 p-6 rounded-lg">
                        <div
                            class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">

                            <svg class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M320,162.133h34.133c4.713,0,8.533-3.821,8.533-8.533c0-4.713-3.82-8.533-8.533-8.533h-25.6v-76.8h85.333
    c3.451-0.001,6.562-2.08,7.882-5.268s0.591-6.858-1.849-9.298l-19.567-19.567L419.9,14.566c2.442-2.44,3.173-6.112,1.852-9.301
    c-1.322-3.188-4.434-5.266-7.885-5.265H320c-4.713,0-8.533,3.82-8.533,8.533V153.6C311.467,158.313,315.287,162.133,320,162.133z
    M328.533,17.067h64.734L382.234,28.1c-3.331,3.332-3.331,8.734,0,12.066L393.267,51.2h-64.734V17.067z" />
                                            <path d="M371.2,85.333h-17.067c-4.713,0-8.533,3.821-8.533,8.533c0,4.713,3.82,8.533,8.533,8.533H371.2
    c56.538,0.038,102.362,45.862,102.4,102.4v128H328.533c-4.713,0-8.533,3.821-8.533,8.533s3.82,8.533,8.533,8.533H473.6v17.067
    H302.933V204.8c0.09-31.703-12.508-62.124-34.987-84.48c-6.965-6.897-14.748-12.915-23.177-17.92h41.097
    c4.713,0,8.533-3.821,8.533-8.533c0-4.713-3.82-8.533-8.533-8.533h-102.4C127.48,85.658,79.125,124.577,66.842,179.2H46.933
    c-14.138,0-25.6,11.461-25.6,25.6v119.467c0,14.138,11.462,25.6,25.6,25.6H64v25.6c0,4.713,3.82,8.533,8.533,8.533H192v17.067
    c0,14.138,11.461,25.6,25.6,25.6h34.133v76.8c0,4.713,3.82,8.533,8.533,8.533H294.4c4.713,0,8.533-3.82,8.533-8.533v-76.8h34.133
    c14.138,0,25.6-11.462,25.6-25.6V384h119.467c4.713,0,8.533-3.82,8.533-8.533V204.8C490.624,138.838,437.162,85.376,371.2,85.333
    z M81.067,366.933v-17.067H217.6c4.713,0,8.533-3.82,8.533-8.533s-3.821-8.533-8.533-8.533H46.933
    c-4.713,0-8.533-3.82-8.533-8.533V204.8c0-4.713,3.82-8.533,8.533-8.533H217.6c4.713,0,8.533-3.82,8.533-8.533
    s-3.821-8.533-8.533-8.533H84.309c11.906-45.062,52.55-76.542,99.157-76.8c56.538,0.038,102.362,45.862,102.4,102.4v162.133
    H81.067z M285.867,494.933H268.8v-68.267h17.067V494.933z M345.6,401.067c0,4.713-3.821,8.533-8.533,8.533H217.6
    c-4.713,0-8.533-3.82-8.533-8.533V384H345.6V401.067z" />
                                            <path d="M202.377,214.955l-70.11,50.978l-70.076-50.97c-3.813-2.771-9.15-1.927-11.921,1.886
    c-2.771,3.813-1.927,9.15,1.886,11.921l75.093,54.605c0.274,0.161,0.56,0.304,0.853,0.427c0.273,0.161,0.559,0.301,0.853,0.418
    c1.039,0.486,2.165,0.756,3.311,0.794c1.158-0.033,2.296-0.303,3.345-0.794c0.295-0.118,0.58-0.257,0.853-0.418
    c0.294-0.123,0.579-0.265,0.853-0.427l75.093-54.613c3.813-2.771,4.657-8.108,1.886-11.921
    C211.526,213.028,206.189,212.184,202.377,214.955z" />
                                            <path d="M90.159,271.533c-2.984-0.781-6.156,0.109-8.299,2.327l-30.72,30.72c-2.44,2.44-3.169,6.11-1.849,9.298
    c1.32,3.188,4.431,5.267,7.882,5.268c2.263,0,4.433-0.9,6.033-2.5l30.72-30.72c2.218-2.143,3.108-5.315,2.327-8.299
    S93.143,272.314,90.159,271.533z" />
                                            <path d="M182.673,273.86c-2.143-2.218-5.315-3.108-8.299-2.327c-2.983,0.781-5.313,3.111-6.094,6.094
    c-0.781,2.984,0.109,6.156,2.327,8.299l30.72,30.72c3.348,3.234,8.671,3.188,11.962-0.104c3.292-3.292,3.338-8.614,0.104-11.962
    L182.673,273.86z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>


                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Sugerencias</div>
                            @if ($numUser = App\Models\mailbox::select('boss_id')
        // ->where('estado', '=', '0')
        ->where('boss_id', '=', Auth::user()->id)
        ->count('boss_id', '=', '2'))
                                {{ $numUser }}


                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row shadow-sm rounded p-4 border border-gray-300 p-6 rounded-lg">
                        <div
                            class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">

                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Revenue</div>
                            <div class="font-bold text-lg">$ 32k</div>
                        </div>
                    </div>
                </div>
            </div><br>

            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg class=" fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path
                                    d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z" />
                            </svg>
                        </div>
                        <h2 class="text-lg  font-medium title-font mb-2">L'essentiel du HTML5 </h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co,
                            subway tile poke farm.</p>

                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                                <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                                </svg>
                                40 min
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">
                                <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#D8D8D8" d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z" />
                                        <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z" />
                                    </g>
                                </svg>
                                Débutant
                            </span>
                        </div>

                    </div>
                </div>

                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 italic">
                            <span class="font-bold text-sm ">
                                Php
                            </span>
                        </div>
                        <h2 class="text-lg  font-medium title-font mb-2">Guide complet des dates en PHP</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co,
                            subway tile poke farm.</p>

                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                                <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                                </svg>
                                40 min
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">
                                <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#D8D8D8" d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z" />
                                        <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z" />
                                    </g>
                                </svg>
                                Débutant
                            </span>
                        </div>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg class=" fill-current h-6 w-6 " viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>CSS3 icon</title>
                                <path
                                    d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
                            </svg>
                        </div>
                        <h2 class="text-lg  font-medium title-font mb-2">CSS avancé</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co,
                            subway tile poke farm.</p>

                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                                <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                                </svg>
                                2h 40 min
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">

                                <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#D8D8D8" d="M15.6 17.667h3.5V3h-3.5z" />
                                        <path fill="#667EEA" d="M9.2 6.583v11.08h3.5V6.583z" />
                                        <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z" />
                                    </g>
                                </svg>
                                Débutant
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
