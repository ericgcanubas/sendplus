<?php $title = "Dashboard - SEND iT+";?>
<!DOCTYPE html>
<html lang="en">
   <?php include_once("temp/head.php"); ?>
    <body class="sb-nav-fixed">
      <?php include_once("temp/header.php"); ?>
        <div id="layoutSidenav">
           <?php include_once("temp/side-menu.php");?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-primary">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                           <!-- Modify Start -->
                           
                           <div class="row">
                           <div class="col-lg-12">
                                <div class="card mb-4 bg-custom">
                                    <div class="card-header ">
                          
                                     <div class="text-end">
                                        <span class="text-white"> Transaction Date : </span>
                <a name=""  class="btn btn-primary btn-circle btn-sm" id="" href="#"><i class="fa fa-arrow-left"></i></a>
           
            <input type="date" class="date" id="datePicker" name="date">
                                <script>
                    document.getElementById('datePicker').valueAsDate = new Date();
                                </script>
              <a name="" class="btn btn-primary info btn-circle  btn-sm" id="" href="#" role="button"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                             <!-- Add Button -->
</div>
                                </div>
                            </div>
                           
                           </row>
                        <div class="row">
                

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-custom text-white mb-4">
                          
                                    <div class="card-body one-haft first trans">
                                           
                                
                                    <div class="text-end h3">7,225</div>
                                    <div class="text-end h6">Total Transaction</div>
                                     
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-custom text-white mb-4">
                                    <div class="card-body one-haft first ack">
                                    <div class="text-end h3">7,225</div>
                                    <div class="text-end h6">Total Acknowledge</div>
                                    
                                        </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side ">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white "><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-custom text-white mb-4">
                                    <div class="card-body one-haft first reject">
                               
                                        <div class="text-end h3">0</div>
                                    <div class="text-end h6">Totel Rejected</div>
                                </div>                           
                                    <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-custom text-white mb-4">
                                    <div class="card-body one-haft first mo">
                       
                                        <div class="text-end h3">0</div>
                                    <div class="text-end h6">Totel MO</div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- load -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-custom text-white mb-4">
                                    <div class="card-body one-haft first mobile">
                     
                                        <div class="text-end h3">2,225</div>
                                    <div class="text-end h6">Totel Globe</div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-custom text-white mb-4">
                                    <div class="card-body one-haft first mobile">
                          
                                        <div class="text-end h3">4,225</div>
                                    <div class="text-end h6">Totel Smart</div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-custom text-white mb-4">
                                    <div class="card-body one-haft first mobile">
                     
                                        <div class="text-end h3">172</div>
                                    <div class="text-end h6">Totel Sun</div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-custom text-white mb-4">
                                    <div class="card-body one-haft first mobile">
                                 
                                        <div class="text-end h3">0</div>
                                    <div class="text-end h6">Totel DITO</div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-custom text-white">
                                        <i class="fa fa-area-chart me-1"></i>
                                       Daily Chart 
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-custom text-white">
                                        <i class="fa  fa-bar-chart  me-1"></i>
                                      Monthly Chart
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                       
                           <!-- Modify End -->
                    </div>
                </main>
                <?php include_once("temp/footer.php");?>
            </div>
        </div>
      <?php include_once("temp/script.php");?>
    </body>
</html>
