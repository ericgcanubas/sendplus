<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-custom_side " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            
                            <a class="nav-link text-white" href="index.php">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-tachometer"></i></div>
                                Dashboard
                            </a>
                            
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-paper-plane-o"></i></div>
                                SMS
                                <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                            </a>
                            <div class="collapse bg-secondary" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-white" href="sms-panel.php">Send</a>
                                    <a class="nav-link text-white" href="sms-inbox.php">Inbox</a>
                                </nav>
                            </div>
                            

                            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEmail" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-envelope-o"></i></div>
                                Email
                                <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                            </a>
                            <div class="collapse bg-secondary" id="collapseEmail" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-white" href="email-panel.php">Send</a>
                                <a class="nav-link text-white" href="email-inbox.php">Inbox</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCredentials" aria-expanded="false" aria-controls="collapsePages">                            
                            <div class="sb-nav-link-icon text-white"><i class="fa fa-book"></i></div>
                                Credentials
                                <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                            </a>

                            <div class="collapse bg-secondary" id="collapseCredentials" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion " id="sidenavAccordionPages">
                                <a class="nav-link text-white" href="create_payment.php">Create Payment</a>
                                <a class="nav-link text-white" href="view_client.php">View Clients  </a>
                                
                                </nav>
                            </div>
                        
                            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBills" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-envelope-open"></i></div>
                                Bills
                                <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                            </a>
                            <div class="collapse bg-secondary" id="collapseBills" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                 <a class="nav-link text-white" href="#">View Statements</a>
                         
                                
                                </nav>
                            </div>

                            <a class="nav-link text-white" href="subscription.php">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-users"></i></div>
                                Subscription
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <!-- <div class="small">Logged in as:</div>
                        Start Bootstrap -->
                    </div>
                </nav>
            </div>