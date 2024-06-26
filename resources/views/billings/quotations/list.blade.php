<x-app-layout>


    <x-slot name="titles">
        Quotations
       </x-slot>
    <x-sidebar/>


    <main>
        <div class="container-fluid mt-(-10)">

            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Quotations</h1>
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">





                                                            <div >
                                                                <form>

                                                                        <div class="form-group col-md-12">
                                                                            <label for="client_name">Individual/Company/Organization Name</label>
                                                                            <input type="text" class="form-control" id="client_name" placeholder="Eg. John Doe, Startappz Limited">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="client_email">Individual/Company/Organization Email</label>
                                                                            <input type="email" class="form-control" id="client_email" placeholder="Eg. johndoe@gmail.com">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="client_address">Individual/Company/Organization Address</label>
                                                                            <input type="text" class="form-control" id="client_address" placeholder="Eg. 123 Saint Str">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="client_phone">Individual/Company/Organization Phone Number</label>
                                                                            <input type="tel" class="form-control" id="client_phone" placeholder="Eg. 0700000000">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="client_kra">KRA PIN</label>
                                                                            <input type="text" class="form-control" id="client_kra" placeholder="Eg. A0PASZY..">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="zip_code">Zip Code</label>
                                                                            <input type="text" class="form-control" id="zip_code" placeholder="Eg. 01000-90130">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="inputState">Logo</label>
                                                                            <input type="file" class="form-control" id="client_logo" >
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="client_type">Type</label>
                                                                            <select id="client_type" class="form-control">
                                                                                <option value="individual">Individual</option>
                                                                                <option value="company">Company</option>
                                                                                <option value="organisation">Organization</option>

                                                                            </select>
                                                                        </div>



                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                     </form>
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
                                            <a class="btn pt-2 pl-1 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
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
                                            <th>Quote No.</th>
                                            <th>Client</th>
                                            <th>Date</th>
                                            <th>Due</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>1.</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">#STW1234556</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Startappz Limited</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">05/05/24</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">25/05/24</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Pending..</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">2400 USD</p>
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
