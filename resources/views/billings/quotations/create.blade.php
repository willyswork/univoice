<x-app-layout>


    <x-slot name="titles">
       Create Quote
       </x-slot>
    <x-sidebar/>


    <main>
        <div class="container-fluid ">

            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Create Quote</h1>
                    </div>



            <div class="container-fluid">



                <div class="row mb-4 overflow-y-scroll">

                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-body">


                                <form>
                                    <div class="form-group mb-5">
                                        <label for="client_type">Select Customer</label>
                                        <select id="client_type" class="form-control">
                                            <option value="">--Select--</option>
                                            <option value="">John Doe</option>
                                            <option value="Joan Doe">Joan Doe</option>
                                            <option value="Melina Doe">Melina Doe</option>

                                        </select>
                                    </div>

                                    <div class="form-group ">
                                        <label >Quote Title</label>
                                        <input type="text" class="form-control" id="quote_title" placeholder="Construction Quotation">
                                    </div>

                                    <div class="form-group ">
                                            <label >Quote Number</label>
                                            <input type="text" class="form-control" id="quote_number" placeholder="QT0004501">
                                        </div>

                                        <div class="form-group ">
                                            <label>Reference Number</label>
                                            <input type="text" class="form-control" id="reference_number" placeholder="REF0004501">
                                        </div>


                                    <div class="form-row" style="margin-bottom:60px;">
                                        <div class="form-group col-md-6">
                                            <label>Issue Date</label>
                                            <input type="date" class="form-control text-uppercase" id="issue_date" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Expiry Date</label>
                                            <input type="date" class="form-control text-uppercase" id="expiry_date" >
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <h1 style="font-size:30px;">Add Items</h1>
                                                <div class="top-right-button-container">
                                                    <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" id="add_input"> <i class="simple-icon-plus align-middle"></i> ADD ITEM</button>



                                                                </div>


                                                                </div>
                                                                <div class="separator mb-5"></div>
                                                            </div>
                                    </div>





                                        <div class="row " id="row1">
                                            <div class="col-md-12 form-row form_field" >
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

                                            <div class="form-group px-md-3 col-md-1" >
                                                <label for="client_type">Subtotal(USD)</label>
                                                <p>100000</p>
                                            </div>

                                            <div class="form-group px-md-2 col-md-1 align-middle pt-md-3" style="margin-top:18px;" >
                                                <a class="text-white mx-md-3 mt-4 px-3 py-2 btn-primary remove_field" id="button1" style="border:none; border-radius:10px; "><i class="simple-icon-trash "></i></a>
                                            </div>

                                            </div>

                                        </div>

                                    <div class="separator mb-5"></div>

                                    <div class="row flex-auto">
                                        <div class="col-8 col-right  right-0 ">
                                            <div class="row">
                                                <div class="col-8">
                                                     <label style="font-size:15px;font-weight:800;">Invoice terms & message</label><br/>
                                                   <textarea class="form-control" >
                                                   </textarea>
                                                </div>




                                            </div>

                                        </div>

                                        <div class="col-4 col-right  right-0 ">
                                            <div class="row">
                                                <div class="col-6">
                                                   <p style="font-size:15px; font-weight:500;"> Subtotal</p>
                                                </div>
                                                <div class="col-6">
                                                    100 USD
                                                </div>



                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <p style="font-size:15px; font-weight:500;">Discount</p>
                                                </div>
                                                <div class="col-6">
                                                    100 USD
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                   <p style="font-size:25px; font-weight:500;"> Total </p>
                                                </div>
                                                <div class="col-6">
                                                    100 USD
                                                </div>



                                            </div>
                                        </div>

                                    </div>


                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn  btn-primary">Submit</button>
                                            <button type="button" class="btn  btn-primary">Preview</button>
                                            <button type="button" class="btn  btn-primary">Cancel</button>
                                        </div>


                                </form>
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
