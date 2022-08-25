<?php $title = "Subscription - SEND iT+"; ?>
<!DOCTYPE html>
<?php include_once("temp/head.php"); ?>
<style>


</style>
    <body class="bg-custom bg-background">
        <div class="container" style="margin-left:0px;z-index:999999;">
            <div class="row" style="margin-left:0px;">
                <div class="xs-hidden" style="float:left;margin-top:50px;margin-left:0px;">
                    <a href="login.php" class="btn btn-md btn-warning text-white title-font" style="background-color:royalblue;float:left; margin-left:-20px;" > <i class="fa fa-arrow-left"></i>  BACK TO SIGN-IN </a>
                </div>
            </div>
        </div>
        <div id="layoutAuthentication"  style="float:clear; z-index:-990;">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">

               
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center" style="padding-top:100px;" >
                          
                            <!-- <h1  class="text-white intro-title title_font" ><i class="fa fa-paper-plane" aria-hidden="true"></i> sendiT+</h1>
                            <p class="text-white title_font">Automated Sending Machine.</p> -->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                       
                                    <div class="card-header bg-custom_side text-white"><h5 class="text-center font-weight-light my-4">Build your subscription!</h5></div>
                                    <div class="card-body">

                        <form>
                                    <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
                                        <li class="nav-item bg-secondary" role="presentation" >
                                            <button class="nav-link active text-white" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Basic Info</button>
                                        </li>
                                        <li class="nav-item bg-secondary" role="presentation">
                                            <button class="nav-link text-white" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Account Info</button>
                                        </li>

                                    </ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row text-start">
                    <div class="col-md-6 form-group mb-3">
                    <div class="form-floating">
                
                        <input class="form-control" type="text" id ="inputFirstname" placeholder="First Name" >
                        <label for="inputFirstname">First Name</label>            
                    </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                    <div class="form-floating">
                        <input class="form-control" id="inputCompany" type="text" placeholder="Company" >
                        <label for="inputCompany" class="form-control-label">Company</label>
                    </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                    <div class="form-floating">
                     
                        <input class="form-control" type="text" id="inputLastname" placeholder="Last Name" >
                        <label for="inputLastname" class="form-control-label">Last Name</label>
                    </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">
                    
                        <input class="form-control" type="text" id="inputStreetAddress" placeholder="Street Address" >
                        <label for="inputStreetAddress" class="form-control-label">Street Address</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">               
                            <input class="form-control" type="text" id ="inputContactNo" placeholder="Contact No.">
                            <label for="inputContactNo" class="form-control-label">Contact No.</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">
                           
                            <input class="form-control" type="email" id="inputEmail" placeholder="Email Address" >
                            <label for="inputEmail" class="form-control-label">Email Address</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">                           
                            <input class="form-control" type="text" id="inputCity" placeholder="City" >
                            <label for="inputCity" class="form-control-label">City</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">

                            <input class="form-control" type="text" id="inputCountry" placeholder="Country" >
                            <label for="inputCountry" class="form-control-label">Country</label>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3"></div>
                    <div class="col-md-6 form-group mb-3">
                        <div class="form-floating">
          
                            <input class="form-control" type="text" id="inputZipCode" placeholder="Zip Code" >
                            <label for="inputZipCode" class="form-control-label">Zip Code</label>
                        </div>
                    </div>

                    <div class="col-md-12 form-group mb-3 text-end">
                    <a class="btn btn-md bg-custom text-white" href="#">Next</a>
                    
                    </div>
                    
                </div>   
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row text-start">
                    <div class="col-md-12 form-group mb-3">
                        <div class="form-floating">                     
                            <select class="form-select" aria-label="Default select example">
                            <option selected value="0">--type--</option>
                            <option value="1">Postpaid</option>
                            <option value="2">Prepaid</option>
                         
                            </select>
                            <label for="example-text-input" class="form-control-label ">Subscription Type</label>  
                        </div>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <div class="form-floating">                       
                            <input class="form-control" type="text" id="inputUsername" placeholder="Username" >
                            <label for="inputUsername" class="form-control-label">Username</label>
                        </div>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <div class="form-floating">
                            <input class="form-control" type="password" id="inputPassword" placeholder="Password" >
                            <label for="inputPassword" class="form-control-label">Password</label>
                        </div>
                    </div>
                
                    
                    <div class="col-md-12 form-floating mb-3 ">
                        <div class="row"> 
                        <div class="col-md-6 text-start">  <a class="btn btn-md bg-secondary text-white text-start" href="#">Previous</a></div>
         
                      <div class="col-md-6 text-end">  <a class="btn btn-md bg-primary text-white text-end" href="login.php">Finish</a> </div>
        </div>
                    </div>
                    
                </div>   
    </div>
    
    </div>     
</form>



                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
