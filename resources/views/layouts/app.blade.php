<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $titles ?? ""}}</title>

    <!-- Links -->
    <link rel="stylesheet" href="{{ asset('assets/font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font/simple-line-icons/css/simple-line-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.rtl.only.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/component-custom-switch.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/select2.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/smart_wizard.min.css')}}" />


    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fullcalendar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/dropzone.min.css') }}" />
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

<body id="app-container" class="menu-default show-spinner">
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

            {{ $slot }}

    </div>










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
    <script src="{{ asset('assets/js/vendor/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.smartWizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/mousetrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/glide.min.js') }}"></script>
    <script src="{{ asset('assets/js/dore.script.js') }}"></script>
   <script src="{{ asset('assets/js/scripts.js') }}"></script>


    <script>
        $(document).ready(function(){
            var i=1;

            $('#add_input').click(function(){

                i++;
                html = ` <div class="col-md-12 form-row form_field" id="row${i}">
                                    <div class="form-group col-md-4">
                                        <label for="email">Select Item</label>
                                        <select id="product_select" class="form-control">
                                            <option value="">--Select--</option>
                                            <option value="">Iphone 6s</option>
                                            <option value="Joan Doe">Samsung Hard Disk</option>
                                            <option value="Melina Doe">Mac book</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Quantity</label>
                                        <input type="number" min="0" class="form-control" id="product_quantity" placeholder="">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label>Rate</label>
                                        <input type="number" min="0" class="form-control" id="product_rate" placeholder="">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="client_type">Tax</label>
                                        <select id="client_type" class="form-control">
                                            <option value="">--Select--</option>
                                            <option value="">VAT 6%</option>
                                            <option value="">VAT 16%</option>
                                            <option value="">VAT 20%</option>
                                        </select>
                                    </div>

                                    <div class="form-group px-3 col-md-1" >
                                        <label for="client_type">Subtotal(USD)</label>
                                        <p>100000</p>
                                    </div>

                                    <div class="form-group px-md-2 col-md-1 align-middle pt-md-3" style="margin-top:18px;" >
                                        <a class="text-white mx-md-3 mt-4 px-3 py-2 btn-primary remove_field" id="button${i}" style="border:none; border-radius:10px; "><i class="simple-icon-trash "></i></a>
                                    </div>

                                    </div>
`;
                $('#row1').append(html);


            });

            $(document).on('click','.remove_field', function(e){
                $(this).closest('.form_field').remove();

            });

        });
        </script>


    {{$scripts ?? ""}}


</body>

</html>
