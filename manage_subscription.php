<?php $title = "Edit Client - SEND iT+";?>
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
                        <h1 class="mt-4 text-primary">Subscription</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-info h6">Manage Subscription</li>
                        </ol>
                   
                     
                        <div class="row">
                            <!-- Modify Start -->
                            <div class="col-md-10 mb-3" >
                                <div class="card">
                                        <div class="card-header bg-custom_side text-white">
                                        <h6 class="text-uppercase text-sm">User Information</h6>
                                        </div>
                                        <div class="card-body">
                            
                                            <div class="row">
                                            
                                            <div class="row text-start">
                    <div class="col-md-6 form-group mb-3">
                    <div class="form-floating">
                
                        <input readonly class="form-control" type="text" id ="inputFirstname" placeholder="First Name" value="JUAN" >
                        <label for="inputFirstname">First Name</label>            
                    </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                    <div class="form-floating">
                        <input readonly class="form-control" id="inputCompany" type="text" placeholder="Company" value="ABC COMPANY" >
                        <label for="inputCompany" class="form-control-label">Company</label>
                    </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                    <div class="form-floating">
                     
                        <input readonly class="form-control" type="text" id="inputLastname" placeholder="Last Name" value="DELA CRUZ" >
                        <label for="inputLastname" class="form-control-label">Last Name</label>
                    </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">
                    
                        <input readonly class="form-control" type="text" id="inputStreetAddress" placeholder="Street Address"  value="TONDO MANILA" >
                        <label for="inputStreetAddress" class="form-control-label">Street Address</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">               
                            <input readonly class="form-control" type="text" id ="inputContactNo" placeholder="Contact No." value="12345678990">
                            <label for="inputContactNo" class="form-control-label">Contact No.</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">
                           
                            <input readonly class="form-control" type="email" id="inputEmail" placeholder="Email Address" value="XYZ@www.com" >
                            <label for="inputEmail" class="form-control-label">Email Address</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">                           
                            <input readonly class="form-control" type="text" id="inputCity" placeholder="City" value="MANILA" >
                            <label for="inputCity" class="form-control-label">City</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">

                            <input readonly class="form-control" type="text" id="inputCountry" placeholder="Country" value="Philippines" >
                            <label for="inputCountry" class="form-control-label">Country</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                    <div class="form-floating">                       
                            <input readonly class="form-control" type="text" id="inputUsername" placeholder="Username" value="xyz123"  >
                            <label for="inputUsername" class="form-control-label">Username</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">
          
                            <input readonly class="form-control" type="text" id="inputZipCode" placeholder="Zip Code" value="143" >
                            <label for="inputZipCode" class="form-control-label">Zip Code</label>
                        </div>
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <div class="row">
                            <div class="col-md-6 text-first mb-3">
                            <label for="example-text-input" class="form-control-label ">Status</label>  
                            <select class="form-select" aria-label="Default select example">
                            <option selected value="0">Active</option>
                            <option value="1">Inactive</option>
                      
                      
                            </select>
                          
                            </div>
                            <div class="col-md-6 text-end mb-3">
                            <a class="btn btn-lg bg-custom text-white" href="subscription.php">Update </a>
                            </div>
                        </div>
                         
                    
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
