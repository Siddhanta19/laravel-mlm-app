<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="text-slate-50" x-data="{ openMenu: false }" :class="openMenu ? 'overflow-hidden' : 'overflow-visible'">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <header class="flex items-center justify-between bg-slate-700 py-4 px-8 drop-shadow-sm">

        <!-- Logo -->
        <a class="text-xl font-bold" href="/">Lavearn</a>

        <!-- Mobile Menu Toggle -->
        <button class="flex flex-col items-center align-middle md:hidden" aria-controls="mobile-navigation"
            aria-label="Navigation Menu" @click="openMenu = !openMenu" :aria-expanded="openMenu">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

        </button>

        <!-- Main Navigations -->
        <nav class="hidden md:flex">

            <ul class="flex flex-row gap-2">
                <li>
                    <a class="inline-flex rounded py-2 px-3 hover:text-slate-200" href="/"
                        aria-current="true">Home</a>
                </li>
                <li>
                    <a class="inline-flex rounded py-2 px-3 hover:text-slate-200"
                        href="{{ route('register') }}">Register</a>
                </li>
                <li>
                    <a class="inline-flex rounded py-2 px-3 hover:text-slate-200" href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a class="inline-flex rounded py-2 px-3 hover:text-slate-200" href="#">Contact</a>
                </li>
            </ul>

        </nav>

    </header>

    <!-- Pop Out Navigation -->
    <nav class="fixed top-0 right-0 bottom-0 left-0 z-10 backdrop-blur-sm" id="mobile-navigation"
        :class="openMenu ? 'visible' : 'invisible'" x-cloak>

        <!-- UL Links Mobile -->
        <ul class="absolute top-0 right-0 bottom-0 z-10 w-10/12 bg-slate-700 py-4 drop-shadow-2xl transition-all"
            :class="openMenu ? 'translate-x-0' : 'translate-x-full'">

            <li class="border-inherit">
                <a class="block p-4" href="/" aria-current="true">Home</a>
            </li>
            <li class="border-inherit">
                <a class="block p-4" href="{{ route('login') }}">Login</a>
            </li>
            <li class="border-inherit">
                <a class="block p-4" href="{{ route('register') }}">Register</a>
            </li>


        </ul>

        <!-- Close Button -->
        <button class="absolute top-0 right-0 bottom-0 left-0" aria-controls="mobile-navigation"
            aria-label="Close Navigation Menu" @click="openMenu = !openMenu" :aria-expanded="openMenu">
            <svg class="absolute top-2 left-2 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

    </nav>

    <main>
        <div class="mt-8 overflow-hidden sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center justify-center">

                        <div class="ml-4 text-lg font-semibold leading-7">About
                            Us</div>
                    </div>

                    <div class="md:ml-12">
                        <div class="mt-2 text-lg text-gray-300">
                            We are building one of the most trusted refer & earn network so that everybody can make some
                            side income by connecting with us. For
                            more details on our earning services, please register and check out.
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex items-center justify-center">

                        <div class="ml-4 text-lg font-semibold leading-7">Contact Us</div>
                    </div>

                    <div class="md:ml-12">
                        <div class="mt-2 text-lg text-gray-300">
                            We are 24/7 available to help you out with any queries. <br> If you would like your
                            questions
                            answered, please email us at <a class="font-bold underline underline-offset-4"
                                href="mailto:lavearn@gmail.com">lavearn@gmail.com.</a>
                        </div>
                    </div>
                </div>

                <div class="border-gray-200 p-6 dark:border-gray-700">
                    <div class="flex items-center justify-center">

                        <div class="ml-4 text-lg font-semibold leading-7">Our Services</div>
                    </div>

                    <div class="md:ml-12">
                        <div class="mt-2 text-lg text-gray-300">
                            <ul class="list-inside list-disc">
                                <li>Multi Level Refer & Earn System</li>
                                <li>Daily Passive Income System</li>
                                <li>Coming Soon : Watch Ads & Earn System</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="border-gray-200 p-6 dark:border-gray-700">
                    <div class="flex items-center justify-center">

                        <div class="ml-4 text-lg font-semibold leading-7 text-gray-900 dark:text-white">
                            Disclaimer</div>
                    </div>

                    <div class="md:ml-12">
                        <div class="mt-2 text-lg text-gray-300">
                            <ul class="list-inside list-disc">
                                <li>This web-app is still work in progress.</li>
                                <li>We are busy making this webapp as stable as possible</li>
                                <li>You might observe some ui/ux changes from time to time.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer>

        <div class="mt-4 flex justify-center">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">

                    Made with
                    <svg class="ml-2 -mt-px h-5 w-5 text-gray-400 md:mr-2" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </div>
            </div>

            <div class="ml-2 text-center text-sm text-gray-500 sm:ml-0 sm:text-right">
                Using
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </footer>
    </div>
    </div>
</body>

</html>
