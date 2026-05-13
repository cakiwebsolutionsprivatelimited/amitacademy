<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="dashboard.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                
                            </li>
                            <?php if($_SESSION['user']['admin_type'] == 1){?>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-9"><i class="fas fa-fw fa fa-fw fa-rocket"></i>Manage Navigation</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-menu.php">Manage Menu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-pages.php">Manage Pages</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa fa-fw fa-rocket"></i>Manage Application</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-banner.php">Manage Banner</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-notification.php">Manage Notification</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-news.php">Manage News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-result.php">Manage Result</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-category.php">Manage Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-gallery.php">Manage Gallery</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-dep-category.php">Manage Department-Category</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage-dep-gallery.php">Manage Department-Gallery</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="aboutUs.php">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="principal_msg.php;">Principal's Message</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            
                             <li class="nav-item">
                                <a class="nav-link" href="enquiry.php"><i class="fas fa-fw fa fa-fw fa-rocket"></i>Enquiry Form Data</a>
                                
                            </li>
                            
                            
                            <?php }?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>