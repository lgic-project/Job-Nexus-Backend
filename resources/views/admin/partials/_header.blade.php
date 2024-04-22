<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper modern-type" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">

            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="/dashboard"><img class="img-fluid main-logo" style="height: 79px !important;" src="/images/logo/logo-no-background.png" alt="logo">
                        <img class="img-fluid white-logo" src="/images/logo/logo-color.png" alt="logo"></a>
                </div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                </div>
            </div>

            <form class="form-inline search-full col " action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search. . . ." name="q" title="" autofocus>
                            <i class="close-search" data-feather="x"></i>
                            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="nav-right col-4 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <div class="mode"><i class="fa fa-moon-o" aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                        <div class="media profile-media">
                            <img class="user-profile rounded-circle" src="/images/icon-logo.png" alt="profile-picture">
                            <div class="user-name-hide media-body"><span>Super Admin</span>
                                <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="/logout"><i data-feather="log-out"> </i><span>Log
                                        out</span></a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    {{-- code for trip added alert message --}}
    {{-- <div class="container"> --}}
    {{-- <div class="alert alert-success" id="alert-time">{{ $message }}
</div> --}}
{{-- </div> --}}


<!-- Page Header Ends -->
<!-- Page Body Start-->
<div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <div class="sidebar-wrapper">
        <div>
            <div class="logo-wrapper">
                <span class="back">Back</span>
                <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                    </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="/dashboard"><img class="img-fluid" src="#" alt=""></a></div>
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn"><a href="/dashboard"><img class="img-fluid" src="#" alt=""></a>
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                        </li>

                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="home">
                                </i><span>Dashboard</span></a></li>

                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="map"></i><span>Employer Details</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">View Employer</a></li>
                                <li><a href="#">Edit Employer</a></li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="#"><i data-feather="briefcase"></i><span>Employee Details
                                </span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">View Employee</a></li>
                                <li><a href="#">Edit Employee</a></li>

                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="#"><i data-feather="bookmark"></i><span>Job Postings</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="">View Jobs</a></li>
                                <!-- <li><a href="">All Blog Post</a></li> -->

                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="sliders">
                                </i><span>Slider</span></a>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Teams</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">Add New Team Member</a></li>
                                <li><a href="#">All Team Members</a></li>

                            </ul>
                        </li>

                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="message-square">
                                </i><span>Home Reviews</span></a></li>

                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="message-circle"></i><span>Contact Us</span></a></li>

                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="award">
                                </i><span>Review Approval</span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="dollar-sign">
                                </i><span>Booking</span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="book-open">
                                </i><span>Quick Inquiry</span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="package">
                                </i><span>General Data</span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="settings">
                                </i><span>Custom Trips</span></a>
                        </li>
                    </ul>
                </div>
                <div class="logo-icon-wrapper"><a href="/dashboard"><img class="img-fluid" src="#" alt=""></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"><a href="/dashboard"><img class="img-fluid" src="#" alt=""></a>
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>

                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="/dashboard"><i data-feather="home">
                                    </i><span>Dashboard</span></a></li>

                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="map"></i><span>Trip Categories</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="#">Add New Category</a></li>
                                    <li><a href="#">All Category</a></li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="#"><i data-feather="briefcase"></i><span>Trips Package
                                    </span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="">Add New Trips</a></li>
                                    <li><a href="">All Trips</a></li>

                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Teams</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="">Add New Team Member</a></li>
                                    <li><a href="">All Team Members</a></li>

                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="#"><i data-feather="bookmark"></i><span>Blog Post</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="">Add New Blog Post</a></li>
                                    <li><a href="">All Blog Post</a></li>

                                </ul>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="message-square">
                                    </i><span>Home Reviews</span></a></li>

                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="message-circle"></i><span>Contact Us</span></a></li>

                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="award">
                                    </i><span>Review Approval</span></a>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="dollar-sign">
                                    </i><span>Booking</span></a>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="book-open">
                                    </i><span>Quick Inquiry</span></a>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="package">
                                    </i><span>General Data</span></a>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="settings">
                                    </i><span>Custom Trips</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
        </div>
    </div>