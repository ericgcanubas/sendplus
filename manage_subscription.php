<?php $title = "Manage   Subscription - SEND iT+";?>
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
                        <h1 class="mt-4 text-primary"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-dark h5">Credentials</li>
                        </ol>
                   
                     
                        <div class="row">
                            <!-- Modify Start -->
                                    

              
                <div class="col-md-6 mb-3">
                  <div class="row border  mb-3"  >
                <table class="table table-borderless ">
                                                                 <tr  class="bg-custom_side text-white">
                                                                    <th style="width:190px;">  Credentials </th>
                                                                    <th></th>
                                                                </tr> 
                                                                <tr>
                                                                    <td>Network Provider :</td>
                                                                    <td>
                                                                        <select class="form-select w-50" aria-label="Default select example">
                                                                        <option selected value="0">---select provider---</option>
                                                                            <option  value="1">M360</option>
                                                                            <option value="2">Smart</option>
                                                                          
                                                                        </select>
                                                                    </td>            
                                                                </tr>
                                                                
                                                                    <tr id ="m360_provider1"  style="display: none;">
                                                                        <td>Access Token :</td>
                                                                        <td>  <input class="form-control" id="inputToken" type="text" placeholder="" value="Hyusx099" /> </td>            
                                                                    </tr>
                                                                    <tr id ="m360_provider2"  style="display: none;">
                                                                        <td>Passphrase :</td>
                                                                        <td>  <input class="form-control" id="inputPassphrase" type="text" placeholder="" value="usjg2t1q3a" /></td>            
                                                                    </tr>
                                                                
                                                        
                                                                <tr id ="smart_provider1"  style="display: none;">
                                                                    <td>Smart Username :</td>
                                                                    <td><input class="form-control" id="inputUsername" type="text" placeholder="" value="" /></td>            
                                                                </tr>
                                                                <tr id ="smart_provider2"  style="display: none;">
                                                                    <td>Smart Password :</td>
                                                                    <td> <input class="form-control" id="inputPassword" type="text" placeholder="" value="" /></td>            
                                                                </tr>

                                                                <tr id ="smart_provider3"  style="display: none;">
                                                                    <td>Smart Source No. :</td>
                                                                    <td><input class="form-control " id="inputSourceNo" type="text" placeholder="" value="" /></td>            
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                              
                                                                <tr>
                                                                    <td>Subscription Type :</td>
                                                                    <td>Postpaid</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Local Text Rate :</td>
                                                                    <td>
                                                                        <input class="form-control w-50 text-end" id="inputLocalRate" type="number" placeholder=""  min="0" max="10" step="0.25" value="0.00" />
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>International Text Rate :</td>
                                                                    <td>
                                                                        <input class="form-control w-50 text-end" id="inputInterRate" type="number" placeholder="" value="" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>

                                                                </table>

                                                                <div class="row mb-3">
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-end">
                                                                    
                                                                        <a class="btn btn-danger text-white w-50" href="subscription.php">Cancel </a>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-start">
                                                                        <a class="btn btn-primary text-white w-50" href="subscription.php">Save </a>
                                                                        </div>

                                                                </div>
                                                            
                                        </div>

                </div>

                <div class="col-md-6 mb-3" >
                                                            <table class="table table-bordered border-primary">
                                                                 <tr  class="bg-custom_side text-white">
                                                                    <th style="width:150px;">Information</th>
                                                                    <th>Details</th>
                                                                </tr> 
                                                           
                                                                <tr>
                                                                    <td>Fullname</td>
                                                                    <td>Juan Dela Cruz</td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Company</td>
                                                                    <td> coreDev Solution Inc. </td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Country</td>
                                                                    <td>Philippines</td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Address</td>
                                                                    <td> xxxx</td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>City</td>
                                                                    <td>Cebu</td>            
                                                                </tr>
                                                                <tr>
                                                                    <td>Zip Code</td>
                                                                    <td>143</td>            
                                                                </tr>
                                                              
                                                                <tr>
                                                                    <td>Contact No.</td>
                                                                    <td>099222112</td>            
                                                                </tr>

                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td>xyz@gmail.com</td>            
                                                                </tr>

                                                                <tr>
                                                                    <td>Username</td>
                                                                    <td>admin123</td>            
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td>Status</td>
                                                                    <td>Active </td>                                                                       
                                                                </tr>
                                                                <tr>
                                                                    <td>Created</td>
                                                                    <td>2022-04-19 15:27:13 </td>                                                                       
                                                                </tr>
                                                                <tr>
                                                                    <td>Updated</td>
                                                                    <td>2022-04-19 15:27:13 </td>                                                                       
                                                                </tr>
                                                            </table>
                                                         
                              
                </div> 
                            <!-- Modify End -->
                        </div>
                     
                    </div>
                </main>
                <script>
$('select').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
   
    switch(valueSelected) {
  case '1':
    // code block
    $( "#m360_provider1" ).css( "display", "" );
    $( "#m360_provider2" ).css( "display", "" );
    $( "#smart_provider1" ).css( "display", "none" );
    $( "#smart_provider2" ).css( "display", "none" );
    $( "#smart_provider3" ).css( "display", "none" );
    break;
  case '2':
    // code block
    $( "#m360_provider" ).css( "display", "none" );
    $( "#smart_provider" ).css( "display", "" );

    $( "#m360_provider1" ).css( "display", "none" );
    $( "#m360_provider2" ).css( "display", "none" );
    $( "#smart_provider1" ).css( "display", "" );
    $( "#smart_provider2" ).css( "display", "" );
    $( "#smart_provider3" ).css( "display", "" );
    break;
  default:
    // code block
    $( "#m360_provider1" ).css( "display", "none" );
    $( "#m360_provider2" ).css( "display", "none" );
    $( "#smart_provider1" ).css( "display", "none" );
    $( "#smart_provider2" ).css( "display", "none" );
    $( "#smart_provider3" ).css( "display", "none" );
}

});

                </script>
                <?php include_once("temp/footer.php");?>
            </div>
        </div>
      <?php include_once("temp/script.php");?>


    </body>
</html>
