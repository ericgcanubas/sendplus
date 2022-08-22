<?php $title = "Subscription - SEND iT+"; ?>
<!DOCTYPE html>
<?php include_once("temp/head.php"); ?>
<style>


</style>
    <body class="bg-custom">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 text-center" style="padding-top:100px;" >
                          
                            <h1  class="text-white title_font" ><i class="fa fa-paper-plane" aria-hidden="true"></i> sendiT+</h1>
                            <p class="text-white title_font">Automated Sending Machine.</p>
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                       
                                    <div class="card-header"><h5 class="text-center font-weight-light my-4">Build your subscription!</h5></div>
                                    <div class="card-body">

                          <form>
                                    <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Basic Info</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Account Info</button>
  </li>

</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

  <div class="row">
                <div class="col-md-12 form-floating mb-3">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Company Name</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-6 form-floating mb-3">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Description</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-6 form-floating mb-3">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Contact Number</label>
                    <input class="form-control" type="number" >
                  </div>
                </div>
                <div class="col-md-6 form-floating mb-3">
                  <div class="form-group z">
                    <label for="example-text-input" class="form-control-label">Contact Person</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-6 form-floating mb-3">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email Address</label>
                    <input class="form-control" type="email" >
                  </div>
                </div>
                <div class="col-md-6 form-floating mb-3">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Website</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-6 form-floating mb-3">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Address</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="ol-md-12  text-end">
                <div class="form-group py-4">
            
                <a class="btn btn-lg btn-secondary" href="clients.php">Cancel</a>
                <a class="btn btn-lg bg-custom text-white" href="index.php">Create</a>

            </div>

  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>

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
