<?php $title = "Create Payment - SEND iT+";?>
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
                    <h1 class="mt-4 text-primary">Create Payment</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Bills Payment</li>
                        </ol>
                   
                     
                        <div class="row">
                            <!-- Modify Start -->
                            <div class=" col-md-6" >
                                <div class="card">
                                    <div class="card-header bg-custom_side text-white">
                                        <h4 class="text-uppercase text-sm "> <i class="fa fa-credit-card" aria-hidden="true"></i>  </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-12 form-group mb-3">
                                                <div class="form-floating">
                                               
                                                <select class="form-control" name="credentials_id"  required>
                                                                 <option> -- Select Client -- </option>
                                                                <option value="1">CebuCFICoop</option>
                                                                <option value="2">coreDev</option>
                                                                <option value="3">Mavenco</option>
                                                                <option value="4">NICO</option>
                                                                <option value="5">GSAC</option>
                                                                <option value="6">CEBU CFI COOP - OTP</option>
                                                                <option value="7">Silago MPC</option>
                                                                <option value="8">PHCCIMPCTAC</option>
                                                                <option value="9">COMAVEMCO21</option>
                                                                <option value="10">cebucficoop_smart</option>
                                                                <option value="11">SAMULCO</option>
                                                                <option value="12">cebucficoop_otp_smart</option>
                                                                <option value="13">Cebu CFI Coop (Billing)</option>
                                                                <option value="14">PATECI</option>
                                                                <option value="15">City Hall Employees Multi-Purpose Cooperative (CHEMCO)</option>
                                                                <option value="17">Cordova Multipurpose Cooperative (CMC)</option>
                                                                <option value="18">Damayan sa Cavite Community Multipurpose Cooperative (DACCO MPC)</option>
                                                                <option value="19">Abra Diocesan Teachers and Employees Multi-purpose Cooperative</option>
                                                </select>
                                                    <label for="inputClientName" >Client Name</label>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <div class="form-floating">
                                         
                                                    <input class="form-control" id="inputAmount" name="inputAmount" placeholder="Amount"  type="number" value="0.00">
                                                    <label for="inputAmount" class="form-control-label">Amount</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <div class="form-floating">
                                             
                                                    <input class="form-control" type="date" id="inputDateStarted" value="mm/dd/yyyy">
                                                    <label for="inputDateStarted" class="form-control-label">Date Started</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <div class="form-floating">
                                      
                                                    <input class="form-control" type="text" value="" id="inputDescripton" placeholder="Description" >
                                                    <label for="inputDescripton" class="form-control-label">Description</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <div class="form-floating">
                                               
                                                    <input class="form-control" type="date" id="inputDateExpired" value="mm/dd/yyyy">
                                                    <label for="inputDateExpired" class="form-control-label">Date Expired</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group mb-3">

                                          
                                               
                                                     <input type="submit" class="btn btn-primary btn-lg w-100 text-center" value="Make Payment" >

                                               

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
