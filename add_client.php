<?php $title = "Add Client - SEND iT+";?>
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
                        <h1 class="mt-4 text-primary">Clients</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Client</li>
                        </ol>
                   
                     
                        <div class="row">
                            <!-- Modify Start -->
    <div class="col-md-10" >
          <div class="card">
            <div class="card-header bg-custom_side text-white">
              <h4 class="text-uppercase text-sm">Client Information</h4>
            </div>
            <div class="card-body">
  
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
