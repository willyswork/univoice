<x-app-layout>


    <x-slot name="titles">
        Payment Settings
       </x-slot>
    <x-sidebar/>


    <main>
        <div class="container-fluid mt-(-10)">

            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Payment Modes</h1>
                        <div class="top-right-button-container">
                            <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal"
                            data-target="#addTax"> <i class="simple-icon-plus align-middle"></i> ADD NEW</button>

                        </div>


                        <div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="addTax" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Payment Mode</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">


                                                        <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                                                                    aria-controls="first" aria-selected="true">BANK ACCOUNT</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab"
                                                                    aria-controls="second" aria-selected="false">MPESA ACCOUNT</a>
                                                            </li>

                                                        </ul>

                                                        <div class="tab-content">
                                                            <div class="tab-pane show active overflow-scroll" id="first" role="tabpanel" aria-labelledby="first-tab">
                                                                <form>

                                                                        <div class="form-group col-md-12">
                                                                            <label for="inputEmail4">Bank Name</label>
                                                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Eg. KCB">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="inputEmail4">Bank Account Owner</label>
                                                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Eg. John Doe">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="inputState">Bank Account No.</label>
                                                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Eg. 123252572767">
                                                                        </div>



                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Add Bank Account</button>
                                                     </form>
                                                    </div>
                                                </div>

                                                    <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">

                                                        <h5 >Coming Soon !</h5>






                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>


                                        </div>


                                                    </div>


                                                </div>
                                                    </div>
                                                </div>
                                            </div>





                                            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                                                <ol class="breadcrumb pt-0">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                                </ol>
                                            </nav>
                                        </div>

                                        <div class="mb-2">
                                            <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                                                role="button" aria-expanded="true" aria-controls="displayOptions">
                                                Display Options
                                                <i class="simple-icon-arrow-down align-middle"></i>
                                            </a>
                                            <div class="collapse dont-collapse-sm" id="displayOptions">


                                                <div class="d-block d-md-inline-block">
                                                    <div class="btn-group float-md-left mr-1 mb-1">
                                                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Order By
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                        </div>
                                                    </div>
                                                    <div class="search-sm calendar-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                                        <input class="form-control datepicker" placeholder="Search by day">
                                                    </div>

                                                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                                                <input class="form-control" placeholder="Search Table" id="searchDatatable">
                                                            </div>



                                                </div>

                                                <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                                                    <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                                                    <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        10
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">5</a>
                                                        <a class="dropdown-item active" href="#">10</a>
                                                        <a class="dropdown-item" href="#">20</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="separator mb-5"></div>
                                    </div>
            </div>



            <div class="container-fluid">



                <div class="row mb-4 overflow-y-scroll">
                    <div class="col-12 data-tables-hide-filter">
                        <div class="card">
                            <div class="card-body">

                                <table class="data-table data-tables-pagination responsive nowrap"
                                    data-order="[[ 1, &quot;desc&quot; ]]">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Percentage(%)</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>1.</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">VAT</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">16</p>
                                            </td>
                                            <td>
                                                <div class="btn-group  mb-1">

                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete </a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>


                                            </td>
                                        </tr>






                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
