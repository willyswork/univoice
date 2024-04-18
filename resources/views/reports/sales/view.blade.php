<x-app-layout>


    <x-slot name="titles">
     Sales Summary
    </x-slot>

    <x-sidebar/>

 <main>
     <div class="container-fluid">
         <div class="row  ">
             <div class="col-12">

                 <h1>Sales Summary</h1>

                 <div class="top-right-button-container">
                    <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" > <i class="simple-icon-printer align-middle"></i>  PRINT PDF</button>

                </div>



                 <div class="separator mb-5"></div>
             </div>
         </div>

         <div class="row">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Monthly Sales</h5>
                        <div class="dashboard-line-chart chart">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>




         <div class="row">
             <div class="col-md-12 col-lg-6 col-xl-4 mb-4">
                 <div class="card h-100">
                     <div class="card-body">
                         <h5 class="card-title">Product Categories</h5>
                         <div class="dashboard-donut-chart chart">
                             <canvas id="categoryChart"></canvas>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="col-md-12 col-lg-12 col-xl-8">
                 <div class="row">
                     <div class="col-6 mb-4">
                         <div class="card dashboard-small-chart-analytics">
                             <div class="card-body">
                                 <p class="lead color-theme-1 mb-1 value"></p>
                                 <p class="mb-0 label text-small"></p>
                                 <div class="chart">
                                     <canvas id="smallChart1"></canvas>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-6 mb-4">
                         <div class="card dashboard-small-chart-analytics">
                             <div class="card-body">
                                 <p class="lead color-theme-1 mb-1 value"></p>
                                 <p class="mb-0 label text-small"></p>
                                 <div class="chart">
                                     <canvas id="smallChart2"></canvas>
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="col-6 mb-4">
                         <div class="card dashboard-small-chart-analytics">
                             <div class="card-body">
                                 <p class="lead color-theme-1 mb-1 value"></p>
                                 <p class="mb-0 label text-small"></p>
                                 <div class="chart">
                                     <canvas id="smallChart3"></canvas>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-6 mb-4">
                         <div class="card dashboard-small-chart-analytics">
                             <div class="card-body">
                                 <p class="lead color-theme-1 mb-1 value"></p>
                                 <p class="mb-0 label text-small"></p>
                                 <div class="chart">
                                     <canvas id="smallChart4"></canvas>
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
