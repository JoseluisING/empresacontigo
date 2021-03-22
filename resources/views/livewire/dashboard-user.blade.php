<link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
<div>
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
</div>
