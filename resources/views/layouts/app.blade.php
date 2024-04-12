<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $titles ?? ''}}</title>

    <!-- Links -->
    <link rel="stylesheet" href="{{ asset('assets/font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font/simple-line-icons/css/simple-line-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.rtl.only.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/component-custom-switch.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dore.light.bluenavy.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fullcalendar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/datatables.responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap-stars.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/component-custom-switch.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}" />








    {{ $links ?? ""}}


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="app-container" class="menu-sub-hidden ">
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








    {{$scripts ?? ""}}

    <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/chartjs-plugin-datalabels.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/select2.full.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/Sortable.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/mousetrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/glide.min.js') }}"></script>
    <script src="assets/js/dore.script.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>
