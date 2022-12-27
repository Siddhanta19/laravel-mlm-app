<!DOCTYPE html>
<html data-theme="forest" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        {{-- header variable uses the x-slot name='header' element if it is defined on the page where this layout component is used. --}}
        @if (isset($header))
            <header class="border-b border-primary shadow">
                <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer class="footer footer-center mt-5 bg-base-100 p-4 text-base-content">
            <div>
                <p>Copyright © 2023 - All rights reserved by LavEarn</p>
            </div>
        </footer>
    </div>


    @stack('modals')

    @livewireScripts
</body>

</html>
