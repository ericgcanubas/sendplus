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
                            <li class="breadcrumb-item active"></li>
                        </ol>
                 <style>
                    .profile-pic-wrapper {

  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.pic-holder {
  text-align: center;
  position: relative;
  border-radius: 50%;
  width: 150px;
  height: 150px;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px;
}

.pic-holder .pic {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  -o-object-position: center;
  object-position: center;
}

.pic-holder .upload-file-block,
.pic-holder .upload-loader {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(90, 92, 105, 0.7);
  color: #f8f9fc;
  font-size: 12px;
  font-weight: 600;
  opacity: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s;
}

.pic-holder .upload-file-block {
  cursor: pointer;
}

.pic-holder:hover .upload-file-block,
.uploadProfileInput:focus ~ .upload-file-block {
  opacity: 1;
}

.pic-holder.uploadInProgress .upload-file-block {
  display: none;
}

.pic-holder.uploadInProgress .upload-loader {
  opacity: 1;
}

/* Snackbar css */
.snackbar {
  visibility: hidden;
  min-width: 250px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 14px;
  transform: translateX(-50%);
}

.snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {
    bottom: 0;
    opacity: 0;
  }
  to {
    bottom: 30px;
    opacity: 1;
  }
}

@keyframes fadein {
  from {
    bottom: 0;
    opacity: 0;
  }
  to {
    bottom: 30px;
    opacity: 1;
  }
}

@-webkit-keyframes fadeout {
  from {
    bottom: 30px;
    opacity: 1;
  }
  to {
    bottom: 0;
    opacity: 0;
  }
}

@keyframes fadeout {
  from {
    bottom: 30px;
    opacity: 1;
  }
  to {
    bottom: 0;
    opacity: 0;
  }
}

                 </style>  
                     
                        <div class="row">
                            <!-- Modify Start -->

<div class="col-md-10 mb-3" >
                                <div class="card">
                                        <div class="card-header bg-custom_side text-white">
                                        <h6 class="text-uppercase text-sm">User Information</h6>
                                        </div>
                                        <div class="card-body">
                            
                                            <div class="row">
                                            <div class="col-lg-4 col-md-4"></div>
                                            <div class="col-lg-4 col-md-4 mb-3">
                                            <div class="profile-pic-wrapper">
                                                <div class="pic-holder">
                                                  <img id="profilePic" class="pic" src="https://source.unsplash.com/random/150x150?person">

                                                    <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
                                                    <label for="newProfilePhoto" class="upload-file-block">
                                                </div>
                                            </div>
      <div class="text-center">
        <div class="mb-2">
          <i class="fa fa-camera fa-2x"></i>
        </div>
        <div class="text-uppercase">
          Update <br /> Profile Photo
        </div>
      </div>
    </label>
                                            </div>
                                            <div class="col-lg-4 col-md-4"></div>
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
                            <div class="col-6 col-sm col-md-6 text-first">
                            <a class="btn  btn-success text-white" href="edit-change-password.php">Change Password</a>
                            </div>
                            <div class="col-6 col-sm col-md-6 col-md-6 text-end">
                            <a class="btn btn-primary text-white" href="edit-user-info.php">Update Profile</a>
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
    <script>

$(document).on("change", ".uploadProfileInput", function () {
  var triggerInput = this;
  var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
  var holder = $(this).closest(".pic-holder");
  var wrapper = $(this).closest(".profile-pic-wrapper");
  $(wrapper).find('[role="alert"]').remove();
  triggerInput.blur();
  var files = !!this.files ? this.files : [];
  if (!files.length || !window.FileReader) {
    return;
  }
  if (/^image/.test(files[0].type)) {
    // only image file
    var reader = new FileReader(); // instance of the FileReader
    reader.readAsDataURL(files[0]); // read the local file

    reader.onloadend = function () {
      $(holder).addClass("uploadInProgress");
      $(holder).find(".pic").attr("src", this.result);
      $(holder).append(
        '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
      );

      // Dummy timeout; call API or AJAX below
      setTimeout(() => {
        $(holder).removeClass("uploadInProgress");
        $(holder).find(".upload-loader").remove();
        // If upload successful
        if (Math.random() < 0.9) {
          $(wrapper).append(
            '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
          );

          // Clear input after upload
          $(triggerInput).val("");

          setTimeout(() => {
            $(wrapper).find('[role="alert"]').remove();
          }, 3000);
        } else {
          $(holder).find(".pic").attr("src", currentImg);
          $(wrapper).append(
            '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
          );

          // Clear input after upload
          $(triggerInput).val("");
          setTimeout(() => {
            $(wrapper).find('[role="alert"]').remove();
          }, 3000);
        }
      }, 1500);
    };
  } else {
    $(wrapper).append(
      '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
    );
    setTimeout(() => {
      $(wrapper).find('role="alert"').remove();
    }, 3000);
  }
});

    </script>
    </body>
</html>
