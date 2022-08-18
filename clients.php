<?php $title = "Clients - SEND iT+";?>
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
                        <h1 class="mt-4">Clients</h1>
                        <ol class="breadcrumb mb-4">
                            <!-- <li class="breadcrumb-item active">Clients</li> -->
                        </ol>
                   
                             <!-- Modify Start -->    
                        <!--  -->
                             <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa fa-users"></i>
                                <!-- Add Button -->
                                <a href="add_client.php" class="btn btn-success "><span class="fa fa-plus"></span>  New Client </a>
                            </div>
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                                     <th>Name</th>
                                                    <th>Contact No</th>
                                                    <th>Email Address</th>
                                                    <th>Contact Person</th>
                                                    <th style="width: 10%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                                <th>Name</th>
                                                    <th>Contact No</th>
                                                    <th>Email Address</th>
                                                    <th>Contact Person</th>
                                                    <th style="width: 10%;">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                                    <td>Nabunturan Integrated Cooperative</td>
                                                    <td>084-817-0469</td>
                                                    <td>jftnovember@gmail.com</td>
                                                    <td>Nick Tayabas</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Palapag Teachers Employees and Community Multipurpose Cooperative</td>
                                                    <td>253-9999</td>
                                                    <td>erolea_33@yahoo.com</td>
                                                    <td>Erolea</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Perpetual Help Multipurpose Cooperative (PHCCI-MPC Tacloban)</td>
                                                    <td>253-9999</td>
                                                    <td>phcci_taccity@yahoo.com</td>
                                                    <td>phcci_taccity@yahoo.com</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Sta. Ana Multipurpose Cooperative (SAMULCO)</td>
                                                    <td>09317554899</td>
                                                    <td>accounting@samulco.coop</td>
                                                    <td>Jayson Lagare</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Compostela Market Vendors MPC</td>
                                                    <td>045-3210</td>
                                                    <td>compostelamarket@yahoo.com</td>
                                                    <td>Ebonito Alivio</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Mandaue Vendors Multipurpose Cooperative</td>
                                                    <td>023-1234</td>
                                                    <td>mavencocoop@yahoo.com.ph</td>
                                                    <td>Nino Hugo</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Silago MPC</td>
                                                    <td>023-1234</td>
                                                    <td>smpcsicocu1974@gmail.com</td>
                                                    <td>Alexander Asis</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Gubat St. Anthony Cooperative (GSAC)</td>
                                                    <td>045-3210</td>
                                                    <td>gubat@gsac.coop</td>
                                                    <td>Aiken</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info text-white btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>City Hall Employees Multi-Purpose Cooperative (CHEMCO)</td>
                                                    <td>09064401358</td>
                                                    <td>cchemco@yahoo.com</td>
                                                    <td>Paul Fenando Sombilon</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Cordova Multipurpose Cooperative (CMC)</td>
                                                    <td></td>
                                                    <td>cordova@gmail.com</td>
                                                    <td>Neomelito Nuňez</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Damayan sa Cavite Community Multipurpose Cooperative (DACCO MPC)</td>
                                                    <td>09175448439</td>
                                                    <td>avelina_lopez06@yahoo.com</td>
                                                    <td>Avelina Lopez</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
                                                    </td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Abra Diocesan Teachers and Employees Multi-purpose Cooperative</td>
                                                    <td>(074) 624-6789</td>
                                                    <td>adtempco1985@yahoo.com</td>
                                                    <td>Irene B. Bringas</td>
                                                    <td>
                                                        <a href='edit_client.php' class="btn btn-info  text-white  btn-sm m-b-10 m-l-5 " style="color: green;"><i class="fa fa-eye"></i>&nbsp; View</a>
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
