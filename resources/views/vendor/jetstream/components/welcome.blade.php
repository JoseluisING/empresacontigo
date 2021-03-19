<link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
@if (Auth::user()->id_rol == 1)
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
                    <p class="lg:w-1/2 w-full leading-relaxed text-base">
                        Enseigner c'est apprendre deux fois. J'aime partager mes connaissances et mes découvertses.
                    </p>
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
                                <div class="text-sm text-gray-500">Users</div>
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
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="text-sm text-gray-500">Orders</div>
                                <div class="font-bold text-lg">230</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="flex flex-row shadow-sm rounded p-4 border border-gray-300 p-6 rounded-lg">
                            <div
                                class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="text-sm text-gray-500">New Clients</div>
                                <div class="font-bold text-lg">190</div>
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
                                <svg class=" fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z" />
                                </svg>
                            </div>
                            <h2 class="text-lg  font-medium title-font mb-2">L'essentiel du HTML5 </h2>
                            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co,
                                subway tile poke farm.</p>

                            <div class="text-center mt-2 leading-none flex justify-between w-full">
                                <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                                    <svg class=" fill-current w-4 h-4 mr-2 text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                                    </svg>
                                    40 min
                                </span>
                                <span class=" inline-flex items-center leading-none text-sm">
                                    <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#D8D8D8"
                                                d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z" />
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
                                    <svg class=" fill-current w-4 h-4 mr-2 text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                                    </svg>
                                    40 min
                                </span>
                                <span class=" inline-flex items-center leading-none text-sm">
                                    <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#D8D8D8"
                                                d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z" />
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
                                <svg class=" fill-current h-6 w-6 " viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
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
                                    <svg class=" fill-current w-4 h-4 mr-2 text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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


    <!-- DASHBOARD Usuario -->
@elseif(Auth::user()->id_rol==2)

    <!-- component -->
    <div class="w-full">
        <div class="flex bg-white" style="height:600px; ">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Bienvenido(a) <span
                            class="text-indigo-600">{{ Auth::user()->name }}</span></h2>
                    <p class="mt-2 text-sm text-gray-500 md:text-base">
                        Lo único que tienes que hacer es realizar las guías de referencia que te ayudarán a saber,
                        identificar y
                        tomar medidas de prevención ante estas situaciones para propiciar un buen ambiente de trabajo.

                    </p>

                    @if (!App\Models\InfoClinica::where('user_id', '=', Auth::user()->id)->first())
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


                    @endif

                    <div class="flex justify-center lg:justify-start mt-6">
                        <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800"
                            href="{{ route('infoEncuestas') }}">Comenzar encuesta</a>

                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover"
                    style="background-image: url(https://www.impulsapopular.com/wp-content/uploads/2016/06/gerencia.jpg)">
                    <div class="h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>
    </div>
@endif
