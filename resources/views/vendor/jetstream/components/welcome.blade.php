<link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
@if (Auth::user()->id_rol == 1)
    <!-- component -->
    <div class="font-sans bg-white flex flex-col min-h-screen w-full">
        <div>

            <div class="bg-gray-200 md:overflow-hidden">
                <div class="px-4 py-16">
                    <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
                        <h1 class="font-bold text-gray-700 text-xl sm:text-2xl md:text-5xl leading-tight mb-6">
                            Bienvenido(a) {{ Auth::user()->name . ' ' . Auth::user()->ap_p . ' ' . Auth::user()->ap_m }}
                        </h1>

                        <p class="text-gray-600 md:text-xl md:px-18">
                            Evalúa035, es el sistema de evaluación
                            organizacional ideal para cumplir, implementar y administrar la
                            nueva NOM-035-STPS-2018 que te ayuda a llevar un control de
                            cada trabajador, y a prevenir riesgos psicosociales en tu empresa.
                        </p>

                        <div
                            class="hidden md:block h-40 w-40 rounded-full bg-blue-800 absolute right-0 bottom-0 -mb-64 -mr-48">
                        </div>

                        <div
                            class="hidden md:block h-5 w-5 rounded-full bg-yellow-500 absolute top-0 right-0 -mr-40 mt-32">
                        </div>
                    </div>
                </div>

                <svg class="fill-current bg-gray-200 text-white hidden md:block" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1440 320">
                    <path fill-opacity="1"
                        d="M0,64L120,85.3C240,107,480,149,720,149.3C960,149,1200,107,1320,85.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
                    </path>
                </svg>
            </div>

            <div class="max-w-4xl mx-auto bg-white shadow-lg relative z-20 hidden md:block"
                style="margin-top: -320px; border-radius: 20px;">
                <div class="h-20 w-20 rounded-full bg-yellow-500 absolute top-0 left-0 -ml-10 -mt-10"
                    style="z-index: -1;"></div>

                <div class="h-5 w-5 rounded-full bg-blue-500 absolute top-0 left-0 -ml-32 mt-12" style="z-index: -1;">
                </div>

                <div class="h-10 bg-white rounded-t-lg border-b border-gray-100"></div>
                <div class="flex" style="height: 550px;">
                    <div class="w-32 bg-gray-200 p-6 overflow-hidden rounded-bl-lg">
                        <div class="text-center mb-10">
                            <div class="w-10 h-10 rounded-full bg-blue-800 mb-4 mx-auto"></div>
                            <div class="h-2 rounded-full bg-blue-800"></div>
                        </div>

                        <div class="text-center mb-10">
                            <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                            <div class="h-2 rounded-full bg-gray-300"></div>
                        </div>

                        <div class="text-center mb-10">
                            <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                            <div class="h-2 rounded-full bg-gray-300"></div>
                        </div>

                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                            <div class="h-2 rounded-full bg-gray-300"></div>
                        </div>
                    </div>

                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <div class="mt-6 text-gray-500">
                            @if (!App\Models\companies::where('user_id', '=', Auth::user()->id)->first())
                                <div class="flex bg-red-lighter max-w-sm mb-4">
                                    <div class="w-16 bg-red">
                                        <div class="p-4">
                                            <svg class="h-8 w-8 text-white fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
                                            <a href="{{ route('registraCompañia') }}" class="text-pink-600">Completa
                                                tus datos
                                                Empresariales!!!</a>
                                        </p>
                                    </div>
                                </div>

                            @endif
                            @if (!App\Models\InfoClinica::where('user_id', '=', Auth::user()->id)->first())
                                <div class="flex bg-red-lighter max-w-md mb-4">
                                    <div class="w-16 bg-red">
                                        <div class="p-4">
                                            <svg class="h-8 w-8 text-white fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
                                            <a href="{{ route('clinicalInformation') }}"
                                                class="text-pink-600">Completa tus datos
                                                Clinicos!!!</a>
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="flex-1 py-6 px-8">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-2/3 px-4">
                                <div class="flex flex-wrap -mx-4 mb-10">
                                    <div class="w-1/4 px-4">
                                        <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                                            <div class="w-10 h-10 rounded-full bg-green-600 mb-4 mx-auto"></div>
                                            Hola
                                        </div>
                                    </div>
                                    <div class="w-1/4 px-4">
                                        <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                                            <div class="w-10 h-10 rounded-full bg-blue-600 mb-4 mx-auto"></div>
                                            <div class="h-2 rounded-full bg-gray-200"></div>
                                        </div>
                                    </div>
                                    <div class="w-1/4 px-4">
                                        <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                                            <div class="w-10 h-10 rounded-full bg-orange-400 mb-4 mx-auto"></div>
                                            <div class="h-2 rounded-full bg-gray-200"></div>
                                        </div>
                                    </div>
                                    <div class="w-1/4 px-4">
                                        <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                                            <div class="w-10 h-10 rounded-full bg-blue-800 mb-4 mx-auto"></div>
                                            <div class="h-2 rounded-full bg-gray-200"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="h-32 percentage mb-10 pt-2 text-justify">
                                    La nueva Normativa Oficial Mexicana: NOM-035
                                    proporciona a las directivas de las empresas la capacidad de identificar, prevenir,
                                    y en su caso, combatir, las situaciones de estrés laboral y riesgo psicológico que
                                    puedan desembocar en factores de riesgo psicosocial traducido en bajo desempeño y
                                    poco orden su entorno organizacional.
                                </div>

                                <div class="w-full flex flex-wrap mb-6">
                                    <div class="w-1/2">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                                            <div>
                                                <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                                <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                                            <div>
                                                <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                                <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full flex flex-wrap">
                                    <div class="w-1/2">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                                            <div>
                                                <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                                <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                                            <div>
                                                <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                                <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 px-4">
                                <div class="rounded-lg shadow-lg p-6">
                                    <div class="block w-12 h-2 rounded-full bg-gray-200 mb-6"></div>

                                    <svg height="150" width="150" viewBox="0 0 20 20" class="mx-auto mb-12">
                                        <circle r="10" cx="10" cy="10" fill="#4299e1" />
                                        <circle r="5" cx="10" cy="10" fill="transparent" stroke="#2b6cb0"
                                            stroke-width="10" stroke-dasharray="11 31.4"
                                            transform="rotate(-90) translate(-20)" />
                                    </svg>

                                    <div class="flex flex-wrap -mx-2 mb-10">
                                        <div class="w-1/3 px-2">
                                            <div class="block h-2 rounded-full bg-gray-200"></div>
                                        </div>
                                        <div class="w-1/3 px-2">
                                            <div class="block h-2 rounded-full bg-gray-200"></div>
                                        </div>
                                        <div class="w-1/3 px-2">
                                            <div class="block h-2 rounded-full bg-gray-200"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-between my-10">
                                    <div>
                                        <div class="h-2 w-10 bg-gray-300 rounded-full mb-2"></div>
                                        <div class="h-2 w-16 bg-gray-300 rounded-full mb-2"></div>
                                        <div class="h-2 w-8 bg-gray-300 rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="ml-auto h-2 w-5 bg-gray-300 rounded-full mb-2"></div>
                                        <div class="ml-auto h-2 w-6 bg-gray-300 rounded-full mb-2"></div>
                                        <div class="ml-auto h-2 w-8 bg-gray-300 rounded-full"></div>
                                    </div>
                                </div>

                                <div class="text-right flex justify-end">
                                    <div class="rounded-lg h-8 w-20 px-4 bg-gray-200 mr-2"></div>
                                    <div class="rounded-lg h-8 w-20 px-4 bg-green-400"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 md:hidden">
                <div class="-mt-10 max-w-4xl mx-auto bg-white shadow-lg relative z-20" style="border-radius: 20px;">
                    <div class="h-10 bg-white rounded-t-lg border-b border-gray-100"></div>
                    <div class="flex" style="height: 340px;">
                        <div class="w-16 bg-gray-200 px-2 py-6 overflow-hidden rounded-bl-lg">
                            <div class="text-center mb-6">
                                <div class="w-4 h-4 rounded-full bg-blue-800 mb-2 mx-auto"></div>
                                <div class="h-2 w-8 mx-auto rounded-full bg-blue-800"></div>
                            </div>
                            <div class="text-center mb-6">
                                <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                                <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                            </div>
                            <div class="text-center mb-6">
                                <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                                <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                            </div>
                            <div class="text-center">
                                <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                                <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                            </div>
                        </div>
                        <div class="flex-1 py-6 px-4">
                            <div class="flex flex-wrap -mx-2">
                                <div class="w-1/3 px-2">
                                    <div class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3">
                                        <div class="w-4 h-4 rounded-full bg-green-600 mb-2 mx-auto"></div>
                                        <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2">
                                    <div class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3">
                                        <div class="w-4 h-4 rounded-full bg-blue-600 mb-2 mx-auto"></div>
                                        <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2">
                                    <div class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3">
                                        <div class="w-4 h-4 rounded-full bg-orange-600 mb-2 mx-auto"></div>
                                        <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-2 mb-6">
                                <div class="w-1/2 px-2">
                                    <div class="shadow h-24 p-2 rounded-lg">
                                        <div class="h-20 percentage pt-2">
                                            <div class="h-2 bg-gray-200 w-24 mb-2 block"></div>
                                            <div class="h-2 bg-gray-200 w-12 mb-2 block"></div>
                                            <div class="h-2 bg-gray-200 w-20 mb-2 block"></div>
                                            <div class="h-2 bg-gray-200 w-8 mb-2 block"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2 px-2">
                                    <div class="rounded-lg shadow px-2 py-2">
                                        <div class="block w-8 h-2 rounded-full bg-gray-200 mb-2"></div>

                                        <div class="mb-2">
                                            <svg height="50" width="50" viewBox="0 0 20 20" class="mx-auto">
                                                <circle r="10" cx="10" cy="10" fill="#ddd" />
                                                <circle r="5" cx="10" cy="10" fill="transparent" stroke="#eee"
                                                    stroke-width="10" stroke-dasharray="11 31.4"
                                                    transform="rotate(-90) translate(-20)" />
                                            </svg>
                                        </div>

                                        <div class="flex flex-wrap -mx-2">
                                            <div class="w-1/3 px-2">
                                                <div class="block h-2 rounded-full bg-gray-200"></div>
                                            </div>
                                            <div class="w-1/3 px-2">
                                                <div class="block h-2 rounded-full bg-gray-200"></div>
                                            </div>
                                            <div class="w-1/3 px-2">
                                                <div class="block h-2 rounded-full bg-gray-200"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex flex-wrap mb-2">
                                <div class="w-1/2">
                                    <div class="flex items-center">
                                        <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                                        <div>
                                            <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <div class="flex items-center">
                                        <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                                        <div>
                                            <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex flex-wrap mb-6">
                                <div class="w-1/2">
                                    <div class="flex items-center">
                                        <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                                        <div>
                                            <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <div class="flex items-center">
                                        <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                                        <div>
                                            <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right flex justify-end">
                                <div class="rounded-lg h-6 w-16 px-4 bg-gray-200 mr-2"></div>
                                <div class="rounded-lg h-6 w-16 px-4 bg-green-400"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
