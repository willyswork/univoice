<x-app-layout>


    <x-slot name="titles">
       Create Receipt
       </x-slot>
    <x-sidebar/>


    <main>
        <div class="container-fluid ">

            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Create Receipt</h1>
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
                                            <label for="invoice_number">Receipt Number</label>
                                            <input type="text" class="form-control" id="invoice_number" placeholder="INV0004501">
                                        </div>


                                    <div class="form-row" style="margin-bottom:60px;">
                                        <div class="form-group col-md-6">
                                            <label>Issue Date</label>
                                            <input type="date" class="form-control text-uppercase" id="first_name" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Issue Due</label>
                                            <input type="date" class="form-control text-uppercase" id="surname" >
                                        </div>
                                    </div>




                                    <div class="form-row">


                                        <div class="form-group col-md-12">
                                            <label for="client_type">Select Invoice </label>
                                            <select class="form-control select2-multiple" multiple="multiple" data-width="100%">
                                                <optgroup>
                                                <option value="">--Select--</option>
                                                <option value="">#INV20240203</option>
                                                <option value="">#INV20240203</option>
                                                <option value="">#INV20240203</option>
                                                </optgroup>
                                            </select>
                                        </div>





                                    </div>

                                    <div class="separator mb-5"></div>

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
