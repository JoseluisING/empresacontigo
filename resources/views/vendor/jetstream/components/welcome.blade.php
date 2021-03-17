<link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
@if (Auth::user()->id_rol == 1)
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div>
            <x-jet-application-logo class="block h-12 w-auto" />
        </div>

        <div class="mt-8 text-2xl">
            Bienvenido a Empresa contigo!
        </div>

        <div class="mt-6 text-gray-500">


            @if (!App\Models\companies::where('user_id', '=', Auth::user()->id)->first())
                <div class="flex bg-red-lighter max-w-sm mb-4">
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
                            <a href="{{ route('registraCompañia') }}" class="text-pink-600">Completa tus datos
                                Empresariales!!!</a>
                        </p>
                    </div>
                </div>

            @endif
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
                            <a href="{{ route('clinicalInformation') }}" class="text-pink-600">Completa tus datos
                                Clinicos!!!</a>
                        </p>
                    </div>
                </div>
            @endif
        </div>




    </div>

    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
        <div class="p-6">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                    <path
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                    </path>
                </svg>
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                        href="https://laravel.com/docs">Documentation</a></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to
                    the framework or have previous experience, we recommend reading all of the documentation from
                    beginning to end.
                </div>

                <a href="https://laravel.com/docs">
                    <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Explore the documentation</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                    <path
                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                    </path>
                    <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                        href="https://laracasts.com">Laracasts</a></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check
                    them out, see for yourself, and massively level up your development skills in the process.
                </div>

                <a href="https://laracasts.com">
                    <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Start watching Laracasts</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                    <path
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                        href="https://tailwindcss.com/">Tailwind</a></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn't get in
                    your way. You'll be amazed how easily you can build and maintain fresh, modern designs with this
                    wonderful framework at your fingertips.
                </div>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 md:border-l">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                    <path
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                    </path>
                </svg>
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Authentication</div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Authentication and registration views are included with Laravel Jetstream, as well as support for
                    user email verification and resetting forgotten passwords. So, you're free to get started what
                    matters most: building your application.
                </div>
            </div>
        </div>
    </div>

    <!-- DASHBOARD Usuario -->
@elseif(Auth::user()->id_rol==2)

    <!-- component -->
    <div class="w-full">
        <div class="flex bg-white" style="height:600px;">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Build Your New <span
                            class="text-indigo-600">Idea</span></h2>
                    <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio
                        quam quasi, quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>

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
                            href="{{route('infoEncuestas')}}">Comenzar encuesta</a>
                        <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400"
                            href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover"
                    style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80)">
                    <div class="h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>
    </div>

@endif
