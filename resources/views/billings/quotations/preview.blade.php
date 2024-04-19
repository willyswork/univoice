<x-app-layout>


    <x-slot name="titles">
       Preview Invoice
       </x-slot>
    <x-sidebar/>




    <main>
        <div class="container-fluid ">

            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Create Invoice</h1>
                    </div>



            <div class="container-fluid">



                <div class="row mb-4 overflow-y-scroll">

                    <div class="col-12">
                        <div class="card m-5">
                            <div class="card-body m-5">



                                <div class="row flex-auto">

                                    <div class="col-6">


                                    <h4 class="text-left " style="font-size:30px;font-weight:700;">Invoice #DS0204 <span class="badge bg-success font-size-12 ms-2" style="color:white;">Paid</span></h4>
                                     </div>

                                    <div class="col-6">
                                    <div class="mb-4">
                                       <h2 class="mb-1 text-muted text-right"><img src="assets/logos/fulllogo.png" height="100"/></h2>
                                    </div>
                                    <div class="text-muted text-right">
                                        <p class="mb-1">3184 Spruce Drive Pittsburgh, PA 15201</p>
                                        <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> xyz@987.com</p>
                                        <p><i class="uil uil-phone me-1"></i> 012-345-6789</p>
                                    </div>
                                </div>
                                </div>


                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="text-muted">
                                            <h5 class="font-size-16 mb-3">Billed To:</h5>
                                            <h5 class="font-size-15 mb-2">Preston Miller</h5>
                                            <p class="mb-1">4068 Post Avenue Newfolden, MN 56738</p>
                                            <p class="mb-1">PrestonMiller@armyspy.com</p>
                                            <p>001-234-5678</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-sm-6" style="background-color:#e6e6e6">
                                        <div class="text-black mt-4" style="text-align: right;">
                                            <div class="flex-row">
                                                <h5 class="font-size-15 mb-1"><span style="font-weight:800;">Invoice No:</span> #DZ0112</h5>

                                            </div>
                                            <div class="flex-row">
                                                <h5 class="font-size-15 mb-1"><span style="font-weight:800;">Invoice Date:</span> 12 Oct, 2020</h5>

                                            </div>
                                            <div class="flex-row">
                                                <h5 class="font-size-15 mb-1"><span style="font-weight:800;">Order No:</span> #1123456</h5>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mt-5 ">
                                <h5 class="font-size-15 mb-4">Order Summary</h5>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 70px;">No.</th>
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th class="text-end" style="width: 120px;">Total</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <th scope="row">01</th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14 mb-1">Black Strap A012</h5>
                                                        <p class="text-muted mb-0">Watch, Black</p>
                                                    </div>
                                                </td>
                                                <td>$ 245.50</td>
                                                <td>1</td>
                                                <td class="text-end">$ 245.50</td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <th scope="row">02</th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14 mb-1">Stainless Steel S010</h5>
                                                        <p class="text-muted mb-0">Watch, Gold</p>
                                                    </div>
                                                </td>
                                                <td>$ 245.50</td>
                                                <td>2</td>
                                                <td class="text-end">$491.00</td>
                                            </tr>
                                            <!-- end tr -->

                                            <!-- end tr -->
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div><!-- end table responsive -->

                            </div>

                              <div class="row d-flex justify-content-end mt-5" >
                            <div class="col-4 col-right " style="text-align: right;">

                                <div class="row">
                                    <div class="col-8">
                                       <p style="font-size:15px; font-weight:500;">Subtotal :</p>
                                    </div>
                                    <div class="col-4">
                                        100 USD
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <p class="text-end" style="font-size:15px; font-weight:500;">Tax :</p>
                                    </div>
                                    <div class="col-4">
                                        100 USD
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-8">
                                        <p style="font-size:15px; font-weight:500;">Discount :</p>
                                    </div>
                                    <div class="col-4">
                                        100 USD
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-8">
                                       <p style="font-size:25px; font-weight:500;"> Total :</p>
                                    </div>
                                    <div class="col-4">
                                        100 USD
                                    </div>



                                </div>
                            </div>
                            </div>

                            <div class="row d-flex justify-content-end"">
                            <div class="d-print-none mt-4">
                            <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary w-md">Send</a>
                            </div>
                            </div>

                            </div>

                                </div>


                        </div>




                    </div>


                </div>
            </div>
        </div>
            </div>
        </div>


    </main>







</x-app-layout>
