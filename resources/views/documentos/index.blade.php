<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de Documentos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        .custom-img {
            background-image: url("/img/bg-parallax.jpg");
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--
   ___   _             _           _ _                             _   _                     _
  /___\ | |_ _ __ __ _| |__   __ _| | |__   ___     ___ ___  _ __ | |_(_)_ __  _   _  __ _  / \
 //  // | __| '__/ _` | '_ \ / _` | | '_ \ / _ \   / __/ _ \| '_ \| __| | '_ \| | | |/ _` |/  /
/ \_//  | |_| | | (_| | |_) | (_| | | | | | (_) | | (_| (_) | | | | |_| | | | | |_| | (_| /\_/
\___/    \__|_|  \__,_|_.__/ \__,_|_|_| |_|\___/   \___\___/|_| |_|\__|_|_| |_|\__,_|\__,_\/

    -->
</head>
<body>


        {{-- Serviços --}}

        <div id="servicos" class="py-10 px-4 lg:px-12 xl:px-12 md:px-8 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">


                <div class="text-center items-center mt-8">
                    <dt class="mt-2  leading-8  tracking-tight text-gray-900 sm:text-4xl">
                        <div class=" text-2xl font-medium">
                            Documentos
                    </dt>

                </div>
            </div>

                @foreach ($documentos as $documento)
                        <div class="bg-white  flex items-center p-2 rounded-xl shadow border">
                            {{-- Ícone de Anexo com Link --}}
                            <div class="flex items-center space-x-4">
                                <a href="/docs/{{ $documento->path }}" target="blank">
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                        x-description="Heroicon name: solid/paper-clip" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                            {{-- Texto com Link --}}
                            <div class="flex-grow p-3">
                                <div class="font-semibold text-gray-700">
                                    <a href="/docs/{{ $documento->path }}"
                                        target="blank">{{ $documento->nome_arquivo }}</a>
                                </div>
                                {{-- <div class="text-sm text-gray-500">
                                        You: Thanks, sounds good! . 8hr
                                    </div> --}}
                            </div>
                            {{-- Ícone Setinha com Link --}}
                            <div class="p-2">
                                <a href="/docs/{{ $documento->path }}" target="blank">
                                    <svg class="stroke-current text-gray-500" fill="none" height="24" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                        </path>
                                        <polyline points="15 3 21 3 21 9">
                                        </polyline>
                                        <line x1="10" x2="21" y1="14" y2="3">
                                        </line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                @endforeach
        </div>
</body>
</html>