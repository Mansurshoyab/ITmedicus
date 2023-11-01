        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="{{ url('admin/dashboard') }}">
                    <span class="brand">Lakdhanavi Ltd
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="{{ asset('/') }}admin/assets/img/admin-avatar.png" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{ asset('/') }}admin/assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">Shoyab</div><small>Administrator</small>
                    </div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="{{ url('admin/dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Home</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label"> About Us </span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ url('admin/about/company') }}"> Corporate Profile </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/about/team') }}"> Team </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/about/award') }}"> Award </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/about/milestone') }}"> Milestone </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/about/philosophy') }}"> Philosophy </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label"> Global </span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ url('admin/global/addProject') }}"> Add Project </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/global/manageProject') }}"> Manage Project </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label"> ESG </span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ url('admin/esg/socialActivities') }}"> Social Activitise </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/esg/environment') }}"> Environment </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/esg/diversity') }}"> Diversity </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Service </span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ url('admin/service/addService') }}"> Add Service </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/service/serviceImage') }}"> Service Image </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('admin/contact/contacts') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label"> Contact Us </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label"> Footer </span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ url('admin/footer/addFooter') }}"> Add Footer </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/footer/subsidiary') }}"> Add Subsidiaries </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->