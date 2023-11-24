<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zoonoses</title>

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


    <div class="min-h-screen bg-gray-100">


        {{-- navbar --}}
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="/">
                                <x-application-logo class="block h-9 w-auto" />
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-6 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link href="/" active>
                                Início
                            </x-nav-link>
                            <x-nav-link href="#servicos">
                                Serviços
                            </x-nav-link>
                            {{-- <x-nav-link href="/">
                                Campanhas
                            </x-nav-link>
                            <x-nav-link href="/">
                                Notícias
                            </x-nav-link> --}}

                        </div>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-6 lg:-my-px lg:flex">
                        <x-nav-link href="/login" active="" title="Login">
                            Entrar
                        </x-nav-link>
                        <x-nav-link href="/cadastro" active="" title="Cadastro">
                            Cadastro
                        </x-nav-link>

                    </div>

                    <!-- Hamburger -->
                    <div class="sm:-my-px sm:ml-10 mt-1 sm:hidden sm:flex">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-10 w-10" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="sm:hidden">
                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="space-y-3">
                        <x-responsive-nav-link href="#servicos">
                            Serviços
                        </x-responsive-nav-link>
                        {{-- <x-responsive-nav-link href="/">
                            Campanhas
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="/">
                            Notícias
                        </x-responsive-nav-link> --}}

                        <x-responsive-nav-link href="/login" title="Login">
                            Login
                        </x-responsive-nav-link>
                    </div>
                </div>
            </div>
        </nav>
        <header class=" ">
            <div class="mb-10 mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-4xl md:text-5xl">
                        <span class="block xl:inline">Centro de Zoonoses agora</span>
                        <span class="block text-indigo-600 xl:inline">na palma da sua mão</span>
                    </h1>
                    <p
                        class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Realize seu cadastro e solicite os serviços sem sair de casa!
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="/cadastro"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Cadastrar
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="/login"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                Entrar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- Corpo --}}
        <main class="mb-10 mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">




        </main>

        {{-- Serviços --}}

        <div id="servicos" class="py-10 px-4 lg:px-12 xl:px-12 md:px-8 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    {{-- <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Serviços</h2> --}}
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Guia de castração
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Cadastre-se na plataforma, complete seu perfil, cadastre seu animal de estimação
                        e
                        solicite a guia para castração!
                    </p>
                </div>


                <div class="text-center items-center mt-8">
                    <dt class="mt-2  leading-8  tracking-tight text-gray-900 sm:text-4xl">
                        <div class=" text-2xl font-medium">
                            <a href="/documentos" class="text-2xl font-medium bg-blue-500 text-white px-4 py-2 rounded-full inline-block hover:bg-blue-700">
                                Documentos
                            </a>
                    </dt>

                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}


    <div class="bg-gray-100 px-4 py-12 sm:px-6 sm:flex sm:flex-row-reverse">

        <div class="mx-auto text-center text-sm">
            <div class="items-center mb-5">

                <img class="ml-3 h-20 inline-flex" src="{{ asset('/img/logos/logo_v.svg') }}" height="98"
                    alt="Prefeitura Municipal de Boa Vista, Trabalhar e Cuidar das pessoas"
                    title="Prefeitura Municipal de Boa Vista, Trabalhar e Cuidar das pessoas">

                <img class="pl-3 h-20 inline-flex" src="{{ asset('/img/logos/logo_trabalho_colorido.svg') }}"
                    height="60" alt="Prefeitura Municipal de Boa Vista, Trabalhar e Cuidar das pessoas"
                    title="Prefeitura Municipal de Boa Vista, Trabalhar e Cuidar das pessoas">

            </div>
            <p>Prefeitura Municipal de Boa Vista</p>
            <p> Palácio 9 de Julho | Rua General Penha Brasil, 1011 - São Francisco | CEP: 69.305-130 TELEFONE: 156 | Boa
                Vista - Roraima - Brasil</p>
            <p>Secretaria Municipal de Saúde</p>
            <p>Superintendência de Vigilância em Saúde</p>
            <p>Unidade de Vigilância e Controle de Zoonoses - UVCZ</p>
            <p>Avenida Centenário, 469 - Centenário | CEP: 69.312-377 TELEFONE: 3623-1585 | Boa
               Vista - Roraima - Brasil</p>
            <p> Desenvolvido na Secretaria Municipal de Tecnologia e Inclusão Digital {{ \Carbon\Carbon::now()->year }}
            </p>
        </div>

    </div>

</body>

</html>