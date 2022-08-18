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
                        <h1 class="mt-4">Client</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Client</li>
                        </ol>
                   
                     
                        <div class="row">
                            <!-- Modify Start -->
    <div class="col-md-10" >
          <div class="card">
            <div class="card-body">
              <p class="text-uppercase text-sm">Client Information</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Company Name</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Description</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Contact Number</label>
                    <input class="form-control" type="number" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Contact Person</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email Address</label>
                    <input class="form-control" type="email" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Website</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Address</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="row ">

<div class="form-group text-right">
            <div class="d-flex align-items-center justify-content-between mt-2 mb-0">
                <a class="btn btn-lg btn-warning" href="clients.php">Back</a>
                <a class="btn btn-lg btn-success" href="index.php">Create</a>
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
