<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-custom_side " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            
                            <a class="nav-link text-white" href="index.php">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-tachometer"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link text-white" href="subscription.php">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-users"></i></div>
                                Subscription
                            </a>
                            <a class="nav-link text-white" href="branch.php ">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-location-arrow"></i></div>
                                Branch
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
                                <!-- <a class="nav-link text-white" href="email-panel.php">Send</a> -->
                                <a class="nav-link text-white" href="email-inbox.php">Inbox</a>
                                </nav>
                            </div>                       
                            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBills" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-envelope-open"></i></div>
                                Billing
                                <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                            </a>
                            <div class="collapse bg-secondary" id="collapseBills" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">       
                                 <a class="nav-link text-white" href="billing-setup.php">Make Invoice</a>
                                 <a class="nav-link text-white" href="billing-history.php">Statement</a>
                                </nav>
                            </div>
                     
                        
                            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRole" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-user"></i></div>
                                Access Roles
                                <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                            </a>
                            <div class="collapse bg-secondary" id="collapseRole" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">       
                                 <a class="nav-link text-white" href="#">Subscribers</a>
                                 <a class="nav-link text-white" href="#">Roles</a>
                                 <a class="nav-link text-white" href="#">Permission</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReport" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon text-white"><i class="fa fa-area-chart"></i></div>
                                Reports
                                <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                            </a>
                            <div class="collapse bg-secondary" id="collapseReport" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">       
                                 <a class="nav-link text-white" href="activity-logs.php">Activity Logs</a>
                                 <!-- <a class="nav-link text-white" href="#">Report 2</a> -->
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                   
                    </div>
                </nav>
            </div>