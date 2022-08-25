<?php $title = "Subscriber - SEND iT+";?>
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
                         <li class="breadcrumb-item active">subscriber List</li> 
                        </ol>
                   
                             <!-- Modify Start -->    
                        <!--  -->
                             <div class="card mb-4">
                            <div class="card-header bg-custom_side">
                               
                                <!-- Add Button -->
                                <div class="row ">
                                    <div class="col-xs-4 col-lg-4 text-first">  <i class="fa fa-users text-white fa-xl"></i></div>
                                    <div class=" col-xs-8 col-lg-8 text-end">  
                                        <!-- <a href="add_client.php" class="btn  btn-sm  btn-info    text-white "><span class="fa fa-plus"></span> </a> -->
                                    </div>
                                </div>
                                    
                            </div>
                            
                            <div class="card-body">
                                <table id="datatablesSimple" >
                                    <thead class="bg-custom text-white">
                                        <tr>
                                                     <th>Company</th>
                                                    <th>Contact No</th>
                                                    <th>Email Address</th>
                                                    <th>Fullname</th>
                                                    <th>Status</th>
                                                    <th style="width: 10%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                                <th>Company</th>
                                                    <th>Contact No</th>
                                                    <th>Email Address</th>
                                                    <th>Fullname</th>
                                                    <th>Status</th>
                                                    <th style="width: 10%;">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                                    <td>Nabunturan Integrated Cooperative</td>
                                                    <td>084-817-0469</td>
                                                    <td>jftnovember@gmail.com</td>
                                                    <td>Nick Tayabas</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                        <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Palapag Teachers Employees and Community Multipurpose Cooperative</td>
                                                    <td>253-9999</td>
                                                    <td>erolea_33@yahoo.com</td>
                                                    <td>Erolea</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                    <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Perpetual Help Multipurpose Cooperative (PHCCI-MPC Tacloban)</td>
                                                    <td>253-9999</td>
                                                    <td>phcci_taccity@yahoo.com</td>
                                                    <td>phcci_taccity@yahoo.com</td>
                                                    <td> <span class="badge badge-sm bg-danger">Inacive</span></td>
                                                    <td>
                                                    <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Sta. Ana Multipurpose Cooperative (SAMULCO)</td>
                                                    <td>09317554899</td>
                                                    <td>accounting@samulco.coop</td>
                                                    <td>Jayson Lagare</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                    <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Compostela Market Vendors MPC</td>
                                                    <td>045-3210</td>
                                                    <td>compostelamarket@yahoo.com</td>
                                                    <td>Ebonito Alivio</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                        <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Mandaue Vendors Multipurpose Cooperative</td>
                                                    <td>023-1234</td>
                                                    <td>mavencocoop@yahoo.com.ph</td>
                                                    <td>Nino Hugo</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                    <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Silago MPC</td>
                                                    <td>023-1234</td>
                                                    <td>smpcsicocu1974@gmail.com</td>
                                                    <td>Alexander Asis</td>
                                                    <td> <span class="badge badge-sm bg-danger">Inactive</span></td>
                                                    <td>
                                                    <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Gubat St. Anthony Cooperative (GSAC)</td>
                                                    <td>045-3210</td>
                                                    <td>gubat@gsac.coop</td>
                                                    <td>Aiken</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                        <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>City Hall Employees Multi-Purpose Cooperative (CHEMCO)</td>
                                                    <td>09064401358</td>
                                                    <td>cchemco@yahoo.com</td>
                                                    <td>Paul Fenando Sombilon</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                    <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Cordova Multipurpose Cooperative (CMC)</td>
                                                    <td></td>
                                                    <td>cordova@gmail.com</td>
                                                    <td>Neomelito Nuňez</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                        <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Damayan sa Cavite Community Multipurpose Cooperative (DACCO MPC)</td>
                                                    <td>09175448439</td>
                                                    <td>avelina_lopez06@yahoo.com</td>
                                                    <td>Avelina Lopez</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                        <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Abra Diocesan Teachers and Employees Multi-purpose Cooperative</td>
                                                    <td>(074) 624-6789</td>
                                                    <td>adtempco1985@yahoo.com</td> 
                                                    <td>Irene B. Bringas</td>
                                                    <td> <span class="badge badge-sm bg-success">Active</span></td>
                                                    <td>
                                                    <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                                        <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                                    </td>
                                                </tr>
                                    </tbody>
                                </table>
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
