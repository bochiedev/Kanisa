<!-- Header -->
<header class="header">


    <!-- Top line -->
    <div class="top-line">

        <!-- Brand -->
        <a href="#" class="brand">

            <!-- Big -->
            <div class="brand-big">
                <span class="strong">Admin</span>
            </div>
            <!-- /Big -->

            <!-- Small -->
            <div class="brand-small">
                Admin
            </div>
            <!-- /Small -->

        </a>
        <!-- /Brand -->

        <!-- Menu button -->
        <div class="menu-button">
            <a href="#" class="sidebar-toggle menu-toggle open">
                <div class="menu-icon">
                    <span></span><span></span><span></span>
                    <span></span><span></span><span></span>
                </div>
            </a>
        </div>
        <!-- /Menu button -->

        <!-- Navigation -->
        <div class="navigation-top">

            <!-- Navigation right -->
            <ul class="navbar-top navbar-top-right">



                <!-- Profile -->
                <li class="dropdown">

                    <!-- Profile avatar -->
                    <a href="#" class="dropdown-toggle nav-profile" data-toggle="dropdown">
                        <span class="profile-name"><?php echo $_SESSION['username'] ?></span>
                        <span class="caret"></span>
                        <div class="profile-avatar">
                            <div class="profile-avatar-image">
                                <img src="images/avatar-f-05.jpg" alt="">
                            </div>
                        </div>
                    </a>
                    <!-- /Profile avatar -->

                    <!-- Profile dropdown menu -->
                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- <li><a href="#"><i class="icon icon-inline fa fa-address-card-o"></i> Profile</a></li> -->
                        <li><a href="_includes/logout.php"><i class="icon icon-inline fa fa-sign-out"></i>Log out</a></li>
                    </ul>
                    <!-- /Profile dropdown menu -->

                </li>
                <!-- /Profile -->

            </ul>
            <!-- /Navigation right -->

        </div>
        <!-- /Navigation -->


    </div>
    <!-- /Top line -->


    <!-- Sidebar -->
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-content">


            <!-- Navigation -->
            <ul class="sidebar-navigation sb-nav">


                <li>
                    <a href="home.php" class="sb-nav-item">
                        <i class="icon fa fa-square"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="media.php" class="sb-nav-item">
                        <i class="icon fa fa-list-alt"></i>
                        <span>Media</span>
                    </a>
                </li>

                <li>
                    <a href="categories.php" class="sb-nav-item">
                        <i class="icon fa fa-table"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="sb-dropdown">
                    <a href="#" class="sb-nav-item sb-dropdown-toggle">
                        <i class="icon fa fa-home"></i>
                        <span>Users</span>
                    </a>
                    <ul class="collapse">
                        <li>
                            <a href="users.php?source=add_user" class="sb-nav-item">
                                <i class="icon fa fa-circle-o"></i>
                                <span>Add User</span>
                            </a>
                        </li>
                        <li>
                            <a href="users.php" class="sb-nav-item">
                                <i class="icon fa fa-circle-o"></i>
                                <span>View all Users</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
            <!-- /Navigation -->




        </div>
    </div>
    <!-- /Sidebar -->


</header>


<!-- /Header -->
