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
                        <h1 class="mt-4 text-primary">Activity Logs</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active  text-info"></li>
                        </ol>           
                        <div class="row">
                            <!-- Modify Start -->
                            

                    <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header bg-custom_side text-white">
                                    <h6 class="text-uppercase text-sm text-start">User List</h4>   
                                </div>

                                <div class="card-body">
                                <table id="datatablesSimple" >
                                    <thead class="bg-custom text-white">
                                        <tr>
                                            <th>Latest Log</th>
                                            <th>Username</th>
                                            <th>Last Activity</th>                                           
                                            <th>IP Address</th>
                                 
                                            <th style="width: 10%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Latest Log</th>
                                            <th>Username</th>
                                            <th>Last Activity</th>                                           
                                            <th>IP Address</th>
                                 
                                            <th style="width: 10%;">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>08/11/22 02:10 AM</td>
                                        <td>admin123</td>
                                        <td>Viewing Branch</td>
                                        <td>172.32.12.55</td>
                                        <td><a href='activity-logs-details.php' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View Details</a></td>                                        
                                    </tr>
                                    <tr>
                                        <td>08/12/22 04:10 AM</td>
                                        <td>singk32</td>
                                        <td>Edit Branch</td>
                                        <td>122.42.12.55</td>
                                        <td><a href='activity-logs-details.php' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View Details</a></td>                                        
                                    </tr>

                                    <tr>
                                        <td>08/3/22 02:10 AM</td>
                                        <td>dosdos123</td>
                                        <td>Print Bill</td>
                                        <td>122.32.1.21</td>
                                        <td><a href='activity-logs-details.php' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View Details</a></td>                                        
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
