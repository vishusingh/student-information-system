<?php
    require_once 'core/init.php';      
    if(!User::isLoggedIn())       
    {     
        Redirect::to('login.php');        
    }            
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/homepagecustom.css">
</head>
<body>
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="/img/user_icon.png" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?php echo $_SESSION['user_session']; ?>
                        </div>
                        <div class="profile-usertitle-job">
                            Developer
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-success btn-sm">Profile</button>
                        <a href="/logout.php" class="btn btn-danger btn-sm" role="button">Logout</a>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="/home">
                                <i class="fa fa-home"></i>
                                Overview </a>
                            </li>
                            <li>
                                <a href="/content/results" target="_blank">
                                <i class="fa fa-ok"></i>
                                Results</a>
                            </li>
                            <li>
                                <a href="/content/timetable">
                                <i class="fa fa-table"></i>
                                Time Table</a>
                            </li>
                            <li>
                                <a href="/content/classmates">
                                <i class="fa fa-group"></i>
                                View Classmates </a>
                            </li>
                            <li>
                                <a href="/content/discussions">
                                <i class="fa fa-user"></i>
                                Discussion </a>
                            </li>
                            <li>
                                <a href="/content/downloads">
                                <i class="fa fa-download"></i>
                                Download Notes </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                   Some user related content goes here...
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
</body>
</html>