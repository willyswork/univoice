<x-app-layout>


    <x-slot name="titles">
     Activity Reports
    </x-slot>

    <x-sidebar/>

 <main>
     <div class="container-fluid">
         <div class="row  ">
             <div class="col-12">

                 <h1>Activity Reports</h1>

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
                                 <h5 class="d-inline">Client Data</h5>
                                 <span class="text-muted text-small d-block">New Clients Registered</span>
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
                                 <h5 class="d-inline">Sales Data</h5>
                                 <span class="text-muted text-small d-block">Per Session</span>
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

             <div class="col-md-12 col-lg-6 col-xl-6 mb-4">
                <h5 class="card-title">Activity Status</h5>

                <div class="card " style="height:350px; overflow-y:scroll; ">
                    <div class="card-header p-0 position-relative">
                        <div class="position-absolute handle card-icon">
                            <i class="simple-icon-shuffle"></i>
                        </div>
                    </div>

                     <div class="card-body">

                         <div class="mb-4">
                             <p class="mb-2">Basic Information
                                 <span class="float-right text-muted">12/18</span>
                             </p>
                             <div class="progress">
                                 <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                             </div>
                         </div>

                         <div class="mb-4">
                             <p class="mb-2">Portfolio
                                 <span class="float-right text-muted">1/8</span>
                             </p>
                             <div class="progress">
                                 <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                             </div>
                         </div>

                         <div class="mb-4">
                             <p class="mb-2">Billing Details
                                 <span class="float-right text-muted">2/6</span>
                             </p>
                             <div class="progress">
                                 <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                             </div>
                         </div>

                         <div class="mb-4">
                             <p class="mb-2">Interests
                                 <span class="float-right text-muted">0/8</span>
                             </p>
                             <div class="progress">
                                 <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                             </div>
                         </div>

                         <div class="mb-4">
                             <p class="mb-2">Legal Documents
                                 <span class="float-right text-muted">1/2</span>
                             </p>
                             <div class="progress">
                                 <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-12 col-xl-6">
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


         <div class="row sortable">
             <div class="col-xl-3 col-lg-6 mb-4">
                 <div class="card">
                     <div class="card-header p-0 position-relative">
                         <div class="position-absolute handle card-icon">
                             <i class="simple-icon-shuffle"></i>
                         </div>
                     </div>
                     <div class="card-body d-flex justify-content-between align-items-center">
                         <h6 class="mb-0">Profile Status</h6>
                         <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                             data-show-percent="true">
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-6 mb-4">
                 <div class="card">
                     <div class="card-header p-0 position-relative">
                         <div class="position-absolute handle card-icon">
                             <i class="simple-icon-shuffle"></i>
                         </div>
                     </div>
                     <div class="card-body d-flex justify-content-between align-items-center">
                         <h6 class="mb-0">Work Progress</h6>
                         <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="64"
                             data-show-percent="true">
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-6 mb-4">
                 <div class="card">
                     <div class="card-header p-0 position-relative">
                         <div class="position-absolute handle card-icon">
                             <i class="simple-icon-shuffle"></i>
                         </div>
                     </div>
                     <div class="card-body d-flex justify-content-between align-items-center">
                         <h6 class="mb-0">Tasks Completed</h6>
                         <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="75"
                             data-show-percent="true">
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-6 mb-4">
                 <div class="card">
                     <div class="card-header p-0 position-relative">
                         <div class="position-absolute handle card-icon">
                             <i class="simple-icon-shuffle"></i>
                         </div>
                     </div>
                     <div class="card-body d-flex justify-content-between align-items-center">
                         <h6 class="mb-0">Payments Done</h6>
                         <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="32"
                             data-show-percent="true">
                         </div>
                     </div>
                 </div>
             </div>
         </div>



     </div>

 </main>






 </x-app-layout>
