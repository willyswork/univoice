<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $titles = 'laravel' }}</title>

    <!-- Links -->





    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    {{-- $links --}}


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="app-container" class="menu-sub-hidden show-spinner">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>




    <script src="asset('theme/js/vendor/jquery-3.3.1.min.js')"></script>
    <script src="asset('theme/js/vendor/bootstrap.bundle.min.js')"></script>
    <script src="asset('theme/js/vendor/perfect-scrollbar.min.js')"></script>
    <script src="asset('theme/js/vendor/mousetrap.min.js')"></script>
    <script src="asset('theme/js/dore.script.js')"></script>
    <script src="asset('theme/js/scripts.js')"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    {{-- $scripts --}}
</body>

</html>
