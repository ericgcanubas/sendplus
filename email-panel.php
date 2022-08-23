<?php $title = "Sending Email - SEND iT+";?>
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
                        <h1 class="mt-4 text-primary">Email - <span class="text-info">Send</span></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active  text-info "></li>
                        </ol>
                   
                     
                        <div class="row">
                            <!-- Modify Start -->

                            
                                <div class="col-md-8 mb-3" >
                                            <div class="card">
                                                <div class="card-header bg-custom_side text-white">
                                                <h6 class="text-uppercase text-lg"><i class="fa fa-envelope" aria-hidden="true"></i> New Message</h6>
                                                </div>
                                                <div class="card-body">

                                                <div class="panel panel-default">
			<div class="panel-body message">
				
				<form class="form-horizontal" role="form">
					<div class="form-group">
				    	<label for="to" class="col-sm-1 control-label">To:</label>
				    	<div class="col-sm-11">
                              <input type="email" class="form-control select2-offscreen" id="to" placeholder="Type email" tabindex="-1">
				    	</div>
				  	</div>
					<!-- <div class="form-group">
				    	<label for="cc" class="col-sm-1 control-label">CC:</label>
				    	<div class="col-sm-11">
                              <input type="email" class="form-control select2-offscreen" id="cc" placeholder="Type email" tabindex="-1">
				    	</div>
				  	</div> -->
					<div class="form-group">
				    	<label for="bcc" class="col-sm-1 control-label">Subject:</label>
				    	<div class="col-sm-11">
                              <input type="text" class="form-control select2-offscreen" id="subject" placeholder="Subject" tabindex="-1">
				    	</div>
				  	</div>
				  
				</form>
				
				<div class="col-sm-11 col-sm-offset-1">
					
					<div class="btn-toolbar" role="toolbar">
						
						<div class="btn-group">
						  	<button class="btn btn-default"><span class="fa fa-bold"></span></button>
						  	<button class="btn btn-default"><span class="fa fa-italic"></span></button>
							<button class="btn btn-default"><span class="fa fa-underline"></span></button>
						</div>

						<div class="btn-group">
						  	<button class="btn btn-default"><span class="fa fa-align-left"></span></button>
						  	<button class="btn btn-default"><span class="fa fa-align-right"></span></button>
						  	<button class="btn btn-default"><span class="fa fa-align-center"></span></button>
							<button class="btn btn-default"><span class="fa fa-align-justify"></span></button>
						</div>
						
						<div class="btn-group">
						  	<button class="btn btn-default"><span class="fa fa-indent"></span></button>
						  	<button class="btn btn-default"><span class="fa fa-outdent"></span></button>
						</div>
						
						<div class="btn-group">
						  	<button class="btn btn-default"><span class="fa fa-list-ul"></span></button>
						  	<button class="btn btn-default"><span class="fa fa-list-ol"></span></button>
						</div>
						<button class="btn btn-default"><span class="fa fa-trash-o"></span></button>	
						<button class="btn btn-default"><span class="fa fa-paperclip"></span></button>
						<div class="btn-group">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="fa fa-tags"></span> <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#">add label <span class="label label-danger"> Home</span></a></li>
								<li><a href="#">add label <span class="label label-info">Job</span></a></li>
								<li><a href="#">add label <span class="label label-success">Clients</span></a></li>
								<li><a href="#">add label <span class="label label-warning">News</span></a></li>
							</ul>
						</div>
					</div>
					<br>	
					
					<div class="form-group mb-3">
						<textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
					</div>
					
					<div class="form-group mb-3">	
						<div class="row">
							<div class="col-md-6 text-start"><button type="submit" class="btn btn-secondary">Draft</button>
						<button type="submit" class="btn btn-danger">Discard</button></div>
							<div class="col-md-6 text-end"><button type="submit" class="btn btn-primary rounded-pill">Send</button></div>
						</div>
						
						
					</div>
				</div>	
			</div>	
		</div>
                                                                                         
                                                </div>
                                            </div>
                                            
                            </div>
                            <!-- <div class="col-md-4 mb-3" >

                                                <div class="card">
                                                <div class="card-header bg-custom_side text-white">
                                                <h6 class="text-uppercase text-lg"><i class="fa fa-envelope" aria-hidden="true"></i></h6>
                                                </div>
                                                <div class="card-body">
                            
                                                                                         
                                                </div>
                                            </div>

                            </div> -->

                            
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
