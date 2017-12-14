<!DOCTYPE html>
<html>
<head>
<title>{$pageTitle}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="{$css}dataTables.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="{$css}buttons.bootstrap4.min.css" />
<!-- Responsive datatable examples -->
<link rel="stylesheet" type="text/css" href="{$css}responsive.bootstrap4.min.css" />

<link rel="stylesheet" type="text/css" href="{$css}switchery.min.css" />
<link rel="stylesheet" type="text/css" href="{$css}bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="{$css}icons.css" />
<link rel="stylesheet" type="text/css" href="{$css}style.css" />
<script type="text/javascript" src="{$js}modernizr.min.js"></script>
</head>
<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">
    
<!-- Top Bar Start -->
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><i class="mdi mdi-radar"></i> <span>{$brandName}</span></a>
        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
            <li class="list-inline-item notification-list hide-phone">
                <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                <i class="mdi mdi-crop-free noti-icon"></i>
                </a>
            </li>
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                <img src="{$images}avatar-1.jpg" alt="{$username}" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>{$username}</small> </h5>
                    </div>
                    <!-- item-->
                    <a href="/profile/" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-star-variant"></i> <span>Profile</span>
                    </a>
                    <!-- item-->
                    <a href="/logout/" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout"></i> <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                <i class="mdi mdi-menu"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>
    </nav>
</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">{$role} | {$username}</li>
                <li>
                    <a href="/dashboard/" class="waves-effect waves-primary">
                    <i class="ti-home"></i><span> Dashboard </span></a>
                </li>
                {if $admin}
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-user"></i>
                        <span> Students </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/students/add/">Add new student</a></li>
                        <li><a href="/students/">Students</a></li>
                    </ul>
                </li>
                {/if}
                <li>
                    <a href="/search/" class="waves-effect waves-primary">
                    <i class="ti-search"></i><span> Search </span></a>
                </li>

                {if $admin}
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-cloud-up"></i>
                    <span> Upload </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/upload/timetable/">Timetable</a></li>
                        <li><a href="/upload/notes/">Notes</a></li>
                    </ul>
                </li>
                {/if}

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-cloud-down"></i>
                    <span> Download </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/timetables/">Timetable</a></li>
                        <li><a href="/notes/">Notes</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i class=" ti-announcement"></i>
                    <span> Notices </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        {if $admin}<li><a href="/notices/new/">New Notice</a></li>{/if}
                        <li><a href="/notices/">Notices</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-comment-alt"></i>
                        <span> Complaints </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        {if $student}<li><a href="/complaints/new/">New Complaint</a></li>{/if}
                        {if $admin}<li><a href="/complaints/">Complaints</a></li>{/if}
                    </ul>
                </li>
                <li>
                    <a href="/lecturers/" class="waves-effect waves-primary">
                    <i class="ti-user"></i><span> Lecturers </span></a>
                </li>
                {if $admin}
                <li>
                    <a href="/admins/" class="waves-effect waves-primary">
                    <i class="ti-user"></i><span> Admins </span></a>
                </li>
                {/if}
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-layers-alt"></i>
                    <span> Courses </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        {if $student}<li><a href="/courses/mates/">Course mates</a></li>{/if}
                        {if $admin}<li><a href="/courses/new/">New course</a></li>{/if}
                        <li><a href="/courses/">Courses</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
