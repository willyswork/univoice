<x-app-layout>


    <x-slot name="titles">
        Quotation Summary
    </x-slot>

    <x-sidebar/>

 <main>
     <div class="container-fluid">
         <div class="row  ">
             <div class="col-12">

                 <h1>Quotation Summary</h1>

                 <div class="top-right-button-container">
                    <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" > <i class="simple-icon-printer align-middle"></i>  PRINT PDF</button>

                </div>



                 <div class="separator mb-5"></div>
             </div>
         </div>



         <div class="row">
             <div class="col-md-6 col-sm-12 mb-4">
                 <div class="card dashboard-filled-line-chart">
                     <div class="card-body ">
                         <div class="float-left float-none-xs">
                             <div class="d-inline-block">
                                 <h5 class="d-inline">Stock Supplied</h5>
                                 <span class="text-muted text-small d-block">Stocks Supplied</span>
                             </div>
                         </div>
                         <div class="btn-group float-right float-none-xs mt-2">
                             <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 This Week
                             </button>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Last Week</a>
                                 <a class="dropdown-item" href="#">This Month</a>
                             </div>
                         </div>
                     </div>
                     <div class="chart card-body pt-0">
                         <canvas id="visitChart"></canvas>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 col-sm-12 mb-4">
                 <div class="card dashboard-filled-line-chart">
                     <div class="card-body ">
                         <div class="float-left float-none-xs">
                             <div class="d-inline-block">
                                 <h5 class="d-inline">Stocks Sold</h5>
                                 <span class="text-muted text-small d-block">This Month</span>
                             </div>
                         </div>
                         <div class="btn-group float-right mt-2 float-none-xs">
                             <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 This Week
                             </button>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Last Week</a>
                                 <a class="dropdown-item" href="#">This Month</a>
                             </div>
                         </div>
                     </div>
                     <div class="chart card-body pt-0">
                         <canvas id="conversionChart"></canvas>
                     </div>
                 </div>
             </div>
         </div>








         <div class="row">
             <div class="col-lg-6 col-12 mb-4">
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title">Supplied - Stock</h5>
                         <div class="chart-container chart">
                             <canvas id="radarChart"></canvas>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-12 mb-4">
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title">Sold Stock</h5>
                         <div class="chart-container chart">
                             <canvas id="polarChart"></canvas>
                         </div>
                     </div>
                 </div>
             </div>
         </div>



         <div class="row">
             <div class="col-12 mb-4">
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title">Stock Chart</h5>
                         <div class="dashboard-line-chart chart">
                             <canvas id="salesChart"></canvas>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </main>






 </x-app-layout>
