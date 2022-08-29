<?php $title = "Activity Logs - SEND iT+";?>
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
                        <h1 class="mt-4 text-primary"></h1>
                        <ol class="breadcrumb mb-4 ">
                            <li class="breadcrumb-item active  text-primary h6">Logs</li>
                        </ol>           
                        <div class="row">
                       
                            <!-- Modify Start -->
                            <div class="col-lg-6 text-start mb-3">
                                <h4 class="text-primary">View Details</h4>
                            </div>
                            <div class="col-lg-6 text-end mb-3">
                                <a href="activity-logs.php" class="btn btn-primary"> BACK TO ACTIVITY LOG</a>
                            </div>
<div class="col-lg-12">
                            <div class="card mb-4">
                                <!-- <div class="card-header ">
                                    <h6 class="text-uppercase text-sm text-start"></h4>   
                                </div> -->
                                
                                <div class="card-body">
                                        <div class="row"> 
                                        <div class="col-md-6">
                                            <table class="table table-bordered border-primary">
                                                                 <tr  class="bg-custom_side text-white">
                                                                    <th style="width:150px;">Activity</th>
                                                                    <th>Details</th>
                                                                </tr> 
                                                           
                                                                <tr>
                                                                    <td>Log ID</td>
                                                                    <td>505</td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Description</td>
                                                                    <td>Viewing Branch </td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Route</td>
                                                                    <td><a href="#"> http://laravel-auth.local/activity</a></td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Locate</td>
                                                                    <td> en_PH </td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Referer</td>
                                                                    <td><a href="#"> http://laravel-auth.local/activity/log/502 </a></td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Method Type</td>
                                                                    <td><span class="badge badge-sm bg-success">GET</span></td>            
                                                                </tr>
                                                              
                                                                <tr>
                                                                    <td>Time Passed</td>
                                                                    <td>2 minutes ago</td>            
                                                                </tr>

                                                                <tr>
                                                                    <td>Event TIme</td>
                                                                    <td>2022-08-10 5:22:32</td>            
                                                                </tr>

                                                            </table>    
                                            </div>
                                            <div class="col-md-6">
                                            <table class="table table-bordered border-primary">
                                                                 <tr  class="bg-custom_side text-white">
                                                                    <th style="width:150px;">User Details</th>
                                                                    <th></th>
                                                                </tr> 
                                                           
                                                                <tr>
                                                                    <td>Fullname</td>
                                                                    <td>Juan Dela Cruz</td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Company</td>
                                                                    <td> coreDev Solution Inc. </td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Country</td>
                                                                    <td>Philippines</td>            
                                                                </tr>
                                                        
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td>xyz@gmail.com</td>            
                                                                </tr>

                                                                <tr>
                                                                    <td>Username</td>
                                                                    <td>admin123</td>            
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td>Status</td>
                                                                    <td>Active </td>                                                                       
                                                                </tr>
                                                                <tr>
                                                                    <td>Created</td>
                                                                    <td>2022-04-19 15:27:13 </td>                                                                       
                                                                </tr>
                                                                <tr>
                                                                    <td>Updated</td>
                                                                    <td>2022-04-19 15:27:13 </td>                                                                       
                                                                </tr>
                                                            </table>    
                                            </div>
                                        
                                          
                                        </div>
                                </div>
                            </div>  
</div>
<div class="col-lg-12"> 
                            <div class="card mb-4">
                                <div class="card-header bg-custom_side text-white">
                                        <div class="row">    
                                            <div class= "col-md-6 col-lg-6 text-first"><h6 class="text-uppercase text-sm text-start">History Logs</h6></div>    
                                            <div class= "col-md-6 col-lg-6 text-end"> <a class="btn btn-info"> Export</a> </div>      
                                    </div>
                                  

                                </div>
                                <div class="card-body">
                                <table id="datatablesSimple" >
                                    <thead class="bg-custom text-white">
                                        <tr>
                                            <th>Id Log</th>
                                            <th>Time Log</th>
                                            <th>Description</th>
                                            <th>Method</th>      
                                            <th>Route</th>                                     
                                            <th>IP Address</th>
                                 
                                          
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Log</th>
                                            <th>Time Log</th>
                                            <th>Description</th>
                                            <th>Method</th>      
                                            <th>Route</th>                                     
                                            <th>IP Address</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?Php 
                                        $i=534;
                                         while($i>0) {
                                         
                                            ?>
                                        <tr>
                                        <td><?php echo $i;?></td>
                                        <td>08/11/22 02:10 AM</td>
                                        <td>Viewing Branch</td>
                                        <td><span class="badge badge-sm bg-success">GET</span></td>  
                                        <td><a href="#"> http://laravel-auth.local/activity</a></td> 
                                        <td>172.32.12.55</td>
                                         </tr>
                                            <?php
                                            $i--;
                                          }
                                        ?>
                                    <tr>
                                   
                                                                            
                                    </tr>
                                 

                                    </tbody>
                                </table>
                                </div>
                            </div>  
</div>
                            <!-- Modify End -->
                        </div>
                     
                    </div>
                </main>
                <?php include_once("temp/footer.php");?>
            </div>
        </div>
      <?php include_once("temp/script.php");?>
    </body>
</html>
