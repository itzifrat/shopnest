
<!doctype html>
<html lang="en">

<head>
<title>SHOPNEST eCommerce</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/fontawesome-free/css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/morrisjs/morris.min.css') }}" />


<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/color_skins.css') }}">
<style>
    .icon-menu:before{display:none !important};
</style>
</head>
<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('backend/assets/images/loader.gif') }}" width="58" height="58" alt="Shopnest"></div>
        <p>Please wait...</p>
    </div>
</div>





<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a href="index.html"><img src="../assets/images/logo.svg" alt="Lucid Logo" class="img-responsive logo"></a>
            </div>

            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="file-dashboard.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="fa fa-folder-open-o"></i></a>
                        </li>
                        <li>
                            <a href="app-calendar.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a>
                        </li>
                        <li>
                            <a href="app-chat.html" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
                        </li>
                        <li>
                            <a href="app-inbox.html" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="header"><strong>You have 4 new Notifications</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                <span class="timestamp">10:00 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-like text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                <span class="timestamp">11:30 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                 <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-pie-chart text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                <span class="timestamp">04:00 PM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Error on website analytics configurations</p>
                                                <span class="timestamp">Yesterday</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                            <ul class="dropdown-menu user-menu menu-icon">
                                <li class="menu-heading">ACCOUNT SETTINGS</li>
                                <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
                                <li class="menu-heading">BILLING</li>
                                <li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li>
                            </ul>
                        </li>
                        <li>



                                <a class="dropdown-item icon-menu" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="icon-login"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>


                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>




     <!-- Left Sidebar -->


    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="{{ asset('backend/assets/images/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Efrat A.</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="professors-profile.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                <ul class="row list-unstyled">
                    <li class="col-4">
                        <span>Exp</span>
                        <h6>14</h6>
                    </li>
                    <li class="col-4">
                        <span>Awards</span>
                        <h6>13</h6>
                    </li>
                    <li class="col-4">
                        <span>Clients</span>
                        <h6>213</h6>
                    </li>
                </ul>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin">Admin</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graduation"><i class="fa fa-graduation-cap"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sub_menu"><i class="icon-grid"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane active" id="admin">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li class="active"><a href="index.html"><i class="icon-home"></i><span>Dashboard</span></a></li>



                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Banner</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                    <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Catagory Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                    <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Products Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                    <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Carts Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                    <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Post Catagory</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                    <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>post Tag</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                    <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Post Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                    <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Review Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                    <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Post Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                    <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="app-inbox.html"><i class="icon-home"></i>Order Management</a></li>

                            <li><a href="app-inbox.html"><i class="icon-home"></i>Settings</a></li>





                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="graduation">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li><span>-- Professor</span></li>
                            <li><a href="app-inbox.html"><i class="icon-home"></i>Inbox App</a></li>
                            <li><a href="app-chat.html"><i class="icon-bubbles"></i>Chat App</a></li>
                            <li><a href="professors.html"><i class="icon-user"></i>All Professors</a></li>
                            <li><a href="professors-profile.html"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="leave.html"><i class="icon-user"></i>Leave</a></li>
                            <li><a href="attendance.html"><i class="icon-user"></i>Attendance</a></li>
                            <li><a href="events.html"><i class="icon-user"></i>Events List</a></li>
                            <li><span>-- Students</span></li>
                            <li><a href="students.html"><i class="icon-user"></i>All Students</a></li>
                            <li><a href="students-profile.html"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="payments.html"><i class="icon-user"></i>Payments</a></li>
                            <li><a href="attendance.html"><i class="icon-user"></i>Attendance</a></li>
                            <li><a href="events.html"><i class="icon-user"></i>Events List</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="sub_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li>
                                <a href="#Widgets" class="has-arrow"><i class="icon-puzzle"></i><span>Widgets</span></a>
                                <ul>
                                    <li><a href="widgets-statistics.html">Statistics Widgets</a></li>
                                    <li><a href="widgets-data.html">Data Widgets</a></li>
                                    <li><a href="widgets-chart.html">Chart Widgets</a></li>
                                    <li><a href="widgets-weather.html">Weather Widgets</a></li>
                                    <li><a href="widgets-social.html">Social Widgets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>More Pages</span></a>
                                <ul>
                                    <li><a href="page-blank.html">Blank Page</a></li>
                                    <li><a href="page-gallery.html">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
                                    <li><a href="page-gallery2.html">Image Gallery <span class="badge badge-warning float-right">v2</span></a> </li>
                                    <li><a href="page-timeline.html">Timeline</a></li>
                                    <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                                    <li><a href="page-pricing.html">Pricing</a></li>
                                    <li><a href="page-invoices.html">Invoices</a></li>
                                    <li><a href="page-invoices2.html">Invoices <span class="badge badge-warning float-right">v2</span></a></li>
                                    <li><a href="page-search-results.html">Search Results</a></li>
                                    <li><a href="page-helper-class.html">Helper Classes</a></li>
                                    <li><a href="page-maintenance.html">Maintenance</a></li>
                                    <li><a href="page-testimonials.html">Testimonials</a></li>
                                    <li><a href="page-faq.html">FAQs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i> <span>UI Elements</span></a>
                                <ul>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-icons.html">Icons</a></li>
                                    <li><a href="ui-notifications.html">Notifications</a></li>
                                    <li><a href="ui-colors.html">Colors</a></li>
                                    <li><a href="ui-dialogs.html">Dialogs</a></li>
                                    <li><a href="ui-list-group.html">List Group</a></li>
                                    <li><a href="ui-media-object.html">Media Object</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-nestable.html">Nestable</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-range-sliders.html">Range Sliders</a></li>
                                    <li><a href="ui-treeview.html">Treeview</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Forms</span></a>
                                <ul>
                                    <li><a href="forms-validation.html">Form Validation</a></li>
                                    <li><a href="forms-advanced.html">Advanced Elements</a></li>
                                    <li><a href="forms-basic.html">Basic Elements</a></li>
                                    <li><a href="forms-wizard.html">Form Wizard</a></li>
                                    <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                                    <li><a href="forms-cropping.html">Image Cropping</a></li>
                                    <li><a href="forms-summernote.html">Summernote</a></li>
                                    <li><a href="forms-editors.html">CKEditor</a></li>
                                    <li><a href="forms-markdown.html">Markdown</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Tables" class="has-arrow"><i class="icon-tag"></i> <span>Tables</span></a>
                                <ul>
                                    <li><a href="table-basic.html">Tables Example<span class="badge badge-info float-right">New</span></a> </li>
                                    <li><a href="table-normal.html">Normal Tables</a> </li>
                                    <li><a href="table-jquery-datatable.html">Jquery Datatables</a> </li>
                                    <li><a href="table-editable.html">Editable Tables</a> </li>
                                    <li><a href="table-color.html">Tables Color</a> </li>
                                    <li><a href="table-filter.html">Table Filter <span class="badge badge-info float-right">New</span></a> </li>
                                    <li><a href="table-dragger.html">Table dragger <span class="badge badge-info float-right">New</span></a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#charts" class="has-arrow"><i class="icon-bar-chart"></i> <span>Charts</span></a>
                                <ul>
                                    <li><a href="chart-morris.html">Morris</a> </li>
                                    <li><a href="chart-flot.html">Flot</a> </li>
                                    <li><a href="chart-chartjs.html">ChartJS</a> </li>
                                    <li><a href="chart-jquery-knob.html">Jquery Knob</a> </li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-peity.html">Peity</a></li>
                                    <li><a href="chart-c3.html">C3 Charts</a></li>
                                    <li><a href="chart-gauges.html">Gauges</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Maps" class="has-arrow"><i class="icon-map"></i> <span>Maps</span></a>
                                <ul>
                                    <li><a href="map-google.html">Google Map</a></li>
                                    <li><a href="map-yandex.html">Yandex Map</a></li>
                                    <li><a href="map-jvectormap.html">jVector Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane p-l-15 p-r-15" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="blue" class="active">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                            <span>Blush</span>
                        </li>
                    </ul>
                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Report Panel Usag</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Email Redirect</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Notifications</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Auto Updates</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">eCommerce</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                                data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                                data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                            <span>Visits</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>109 <i class="icon-basket-loaded float-right"></i></h3>
                            <span>Products Sold</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-blue m-b-0">
                            <div class="progress-bar" data-transitiongoal="64"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>235 <i class="icon-user-follow float-right"></i></h3>
                            <span>New Customers</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
                            <div class="progress-bar" data-transitiongoal="67"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>2,318 <i class="fa fa-dollar float-right"></i></h3>
                            <span>Net Profit</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-yellow m-b-0">
                            <div class="progress-bar" data-transitiongoal="89"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>68% <i class=" icon-heart float-right"></i></h3>
                            <span>Customer Satisfaction</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-green m-b-0">
                            <div class="progress-bar" data-transitiongoal="68"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Annual Report <small>Description text here...</small></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-muted">Sales Report</span>
                                    <h3 class="text-warning">$4,516</h3>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-muted">Annual Revenue </span>
                                    <h3 class="text-info">$6,481</h3>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-muted">Total Profit</span>
                                    <h3 class="text-success">$3,915</h3>
                                </div>
                            </div>
                            <div id="area_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Income Analysis<small>8% High then last month</small></h2>
                        </div>
                        <div class="body">
                            <div class="sparkline-pie text-center">6,4,8</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Sales Income</h2>
                        </div>
                        <div class="body">
                            <h6>Overall <b class="text-success">7,000</b></h6>
                            <div class="sparkline" data-type="line" data-spot-Radius="2" data-highlight-Spot-Color="#445771" data-highlight-Line-Color="#222"
                                data-min-Spot-Color="#445771" data-max-Spot-Color="#445771" data-spot-Color="#445771"
                                data-offset="90" data-width="100%" data-height="95px" data-line-Width="1" data-line-Color="#ffcd55"
                                data-fill-Color="#ffcd55">2,4,3,1,5,7,3,2</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Recent Transactions</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="width:60px;">#</th>
                                            <th>Name</th>
                                            <th>Item</th>
                                            <th>Address</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Hossein</td>
                                            <td>IPONE-7</td>
                                            <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                            <td>3</td>
                                            <td><span class="badge badge-success">DONE</span></td>
                                            <td>$ 356</td>
                                        </tr>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Camara</td>
                                            <td>NOKIA-8</td>
                                            <td>2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                            <td>3</td>
                                            <td><span class="badge badge-default">Delivered</span></td>
                                            <td>$ 542</td>
                                        </tr>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Maryam</td>
                                            <td>NOKIA-456</td>
                                            <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                            <td>4</td>
                                            <td><span class="badge badge-success">DONE</span></td>
                                            <td>$ 231</td>
                                        </tr>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Micheal</td>
                                            <td>SAMSANG PRO</td>
                                            <td>508 Virginia Street Chicago, IL 60653</td>
                                            <td>1</td>
                                            <td><span class="badge badge-success">DONE</span></td>
                                            <td>$ 601</td>
                                        </tr>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Frank</td>
                                            <td>NOKIA-456</td>
                                            <td>1516 Holt Street West Palm Beach, FL 33401</td>
                                            <td>13</td>
                                            <td><span class="badge badge-warning">PENDING</span></td>
                                            <td>$ 128</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>New Orders</h2>
                        </div>
                        <div class="body">
                            <table class="table table-hover">
                                <thead class="thead-success">
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Customers</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>IPONE-7</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">
                                                <li><img src="../assets/images/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar6.jpg" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 356</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>NOKIA-8</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">
                                                <li><img src="../assets/images/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar9.jpg" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 542</td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>IPONE-7</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">
                                                <li><img src="../assets/images/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 356</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>NOKIA-8</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">
                                                <li><img src="../assets/images/xs/avatar3.jpg" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 542</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Top Selling Country</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="world-map-markers" class="jvector-map" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</div>

<!-- Javascript -->
<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ asset('backend/assets/bundles/jvectormap.bundle.js') }}"></script>
 <!-- JVectorMap Plugin Js -->
<script src="{{ asset('backend/assets/bundles/morrisscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/knob.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/ui/sortable-nestable.js') }}"></script>
<script src="{{ asset('backend/assets/js/index.js') }}"></script>
</body>
</html>
