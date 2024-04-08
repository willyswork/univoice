<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $titles = 'laravel' }}</title>

    <!-- Links -->
    <link rel="stylesheet" href="asset('theme/font/iconsmind-s/css/iconsminds.css')" />
    <link rel="stylesheet" href="asset('theme/font/simple-line-icons/css/simple-line-icons.css')" />

    <link rel="stylesheet" href="asset('theme/css/vendor/bootstrap.min.css')" />
    <link rel="stylesheet" href="asset('theme/css/vendor/bootstrap.rtl.only.min.css')" />
    <link rel="stylesheet" href="asset('theme/css/vendor/component-custom-switch.min.css')" />
    <link rel="stylesheet" href="asset('theme/css/vendor/perfect-scrollbar.css')" />
    <link rel="stylesheet" href="asset('theme/css/main.css')" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="app-container" class="menu-sub-hidden show-spinner">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
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
