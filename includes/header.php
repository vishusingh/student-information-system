<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.default.css" id="theme-stylesheet" />
    <link rel="stylesheet" type="text/css" href="/assets/css/grasp_mobile_progress_circle-1.0.0.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/icons.css" />
</head>
<body>
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner text-center">
                <img src="/img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
                <h2><?=ucfirst(User::data('username'));?></h2>
                <span><?=ucfirst(User::data('role'));?></span>
            </div>
            <div class="sidenav-header-logo"><a href="/dashboard/" class="brand-small text-center"> <strong>SI</strong><strong class="text-primary">S</strong></a></div>
        </div>
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li class="active"><a href="/dashboard/"> <i class="icon-home"></i><span>Dashboard</span></a></li>
                <li><a href="/announcements/"><i class="icon-form"></i><span>Announcements</span></a></li>
                <li><a href="/new/"><i class="icon-presentation"></i><span>New</span></a></li>
                <li><a href="/admins/"><i class="icon-presentation"></i><span>Admins</span></a></li>
                <li><a href="/students/"><i class="icon-presentation"></i><span>Students</span></a></li>
                <li><a href="/lecturers/"><i class="icon-presentation"></i><span>Lecturers</span></a></li>
                <li><a href="/search/"><i class="icon-presentation"></i><span>Search</span></a></li>
                <li><a href="/upload/"><i class="icon-interface-windows"></i><span>Upload</span></a></li>
                <li><a href="/timetables/"><i class="icon-grid"> </i><span>Time Tables</span></a></li>
                <li><a href="/notes/"><i class="fa fa-book"></i><span>Notes</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="page home-page">
<header class="header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a>
                    <a href="/dashboard/" class="navbar-brand">
                        <div class="brand-text hidden-sm-down"><strong class="text-primary">STUDENT INFORMATION SYSTEM</strong></div>
                    </a>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <li class="nav-item"><a href="/logout/" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
