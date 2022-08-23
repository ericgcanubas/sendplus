<?php $title = "User Profile - SEND iT+";?>
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
                        <h1 class="mt-4 text-primary">User Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                   
                     
                        <div class="row">
                            <!-- Modify Start -->


<div class="col-md-6 mb-3" >
                                <div class="card">
                                        <div class="card-header bg-custom_side text-white">
                                        <h6 class="text-uppercase text-sm ">Change Password</h6>
                                        </div>
                                        <div class="card-body">
                            
                                            <div class="row">
                                            
                                            <div class="row text-start">

                 
                 
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">                       
                            <input class="form-control" type="password" id="inputCurrent" placeholder="Current Password" value=""  >
                            <label for="inputCurrent" class="form-control-label">Current Password</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3"></div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">
                            <input  class="form-control" type="password" id="inputNewPassword" placeholder="New Password" value="" >
                            <label for="inputNewPassword" class="form-control-label">New Password</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3"></div>

                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">
                            <input  class="form-control" type="password" id="inputConfirmPassword" placeholder="Confirm Password" value="" >
                            <label for="inputConfirmPassword" class="form-control-label">Confirm Password</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3"></div>
             

                    <div class="col-md-6 form-group mb-3 text-end">
                    <a class="btn btn-lg bg-primary text-white" href="user-profile.php">Save Change</a>
                    
                    </div>
                    
                </div>  
                                                
                                            </div>
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
