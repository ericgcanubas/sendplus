<?php $title = "Login - SEND iT+"; ?>
<!DOCTYPE html>
<?php include_once("temp/head.php"); ?>
<style>


.log-panel{
    width:500px;
}
.log-login{

}
</style>
    <body class="bg-custom bg-background">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container  just-center">
                        <div class="row"  style="min-height: 100vh">
                        <div class=" col-md-6 col-lg-6 text-center my-auto">
                            <h4 class="text-white txt_shadow">WELCOME TO</h4>
                            <h1  class="text-white title_font intro-title  txt_shadow"   ><i class="fa fa-paper-plane" aria-hidden="true"></i> sendiT+</h1>
                            <!-- <h3 class="text-white title_font txt_shadow">Automated Sending Machine.</h3> -->
                            <br/>
                        <h5 class="text-white title_font">Achieve better connection in sending message or email and assist you in a more satisfying expectation. </h5>
                        
                            <a class="btn btn-primary btn-lg  rounded-pill w-100    txt_shadow" href="registration.php">Subscribe Now.</a>
                        
                        </div>

                            <div class=" col-md-1 col-lg-1 text-center my-auto"  style="background-color:ffff;" >
                        </div>  
                        <div class="col-md-5 col-lg-5 text-center my-auto" >
                  
                                <div class="card shadow-lg border-0 rounded-lg mt-5 log-panel">
                       
                                    <div class="card-header bg-custom_side text-white"><h5 class="text-center font-weight-light my-4 title_font">LOGIN</h5></div>
                                    <div class="card-body ">

                          
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                                
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> -->
                                            <div class="text-center justify-content-between mt-4 mb-0 ">
                                                <!-- <a class="small" href="password.html"></a> -->
                                                <a class="btn btn-primary btn-lg  rounded-pill w-100    " href="index.php">Sign-In</a>
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
