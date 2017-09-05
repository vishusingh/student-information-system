<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>   
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-theme.css">
<!-- font icon -->
<link rel="stylesheet" type="text/css" href="/assets/css/elegant-icons-style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
<!-- Custom styles -->
<link rel="stylesheet" type="text/css" href="/assets/css/widgets.css">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/style-responsive.css">
<link rel="stylesheet" type="text/css" href="/assets/css/jquery-ui-1.10.4.min.css">
</head>
<body>
<!-- container section start -->
<section id="container" class="">
<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>
    <a href="/dashboard/" class="logo">Student Information <span class="lite">System</span></a>
    <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                <img alt="" src="/assets/img/avatar1_small.jpg">
                </span>
                <span class="username"><?=User::data('username');?></span>
                <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top">
                        <a href="/profile/"><i class="icon_profile"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="/logout/"><i class="icon_key_alt"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="/dashboard/">
                <i class="icon_house_alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a class="" href="/announcements/">
                <i class="icon_mic"></i>
                <span>Announcements</span>
                </a>
            </li>
            <li>
                <a class="" href="/timetables/">
                <i class="icon_table"></i>
                <span>Timetables</span>
                </a>
            </li>
            <li>
                <a class="" href="/classmates/">
                <i class="icon_group"></i>
                <span>Classmates</span>
                </a>
            </li>
            <li>                     
                <a class="" href="/notes/">
                <i class="icon_documents_alt"></i>
                <span>Notes</span>
                </a>
            </li>
            <li>
                <a class="" href="/search/">
                <i class="icon_search"></i>
                <span>Search</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                <i class="icon_piechart"></i>
                <span>Results</span>
                <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="/results/">Results</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<!--main content start-->
<section id="main-content">
