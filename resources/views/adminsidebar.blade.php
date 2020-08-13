<nav id="sidebar" class="sidebar-wrapper">

    <!-- Sidebar brand start  -->
    <div class="sidebar-brand">
        <a href="{{ url('zeus/') }}" class="logo">
            <h5 class="text-white">Holy Field Private School</h5>
        </a>
    </div>
    <!-- Sidebar brand end  -->

    <!-- Sidebar content start -->
    <div class="sidebar-content">

        <!-- sidebar menu start -->
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ url('zeus/') }}">
                        <i class="icon-devices_other"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>

                </li>
                <!-- User -->
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="icon-message-square"></i>
                        <span class="menu-text">News </span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{ url('zeus/blog/create') }}">Add News </a>
                            </li>
                            <li>
                                <a href="/adminblog">News List</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- seller -->
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="icon-event_available"></i>
                        <span class="menu-text">Events</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="adminevent/create">Add Events</a>
                            </li>
                            <li>
                                <a href="/adminevent">Upcoming Events</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <!-- food -->
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="icon-image"></i>
                        <span class="menu-text">Gallery</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="/admingallery/create">Add Image to Gallery</a>
                            </li>
                            <li>
                                <a href="/admingallery">View Gallery</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <!-- order -->
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="icon-reorder"></i>
                        <span class="menu-text">Students</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="orders.php">Add student name </a>
                            </li>
                            <li>
                                <a href="successfulorder.php">Create Report</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- wallet -->
                <li class="">
                    <a href="{{ url('zeus/contact') }}">
                        <i class="icon-message"></i>
                        <span class="menu-text">Message</span>
                    </a>
                </li>

                <!-- Logout -->
                <li>
                    <a href="logout.php">
                        <i class="icon-log-out"></i>
                        <span class="menu-text"> Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end -->

    </div>
    <!-- Sidebar content end -->

</nav>
