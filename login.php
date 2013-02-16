<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Information System</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="ajax/main.js"></script>
</head>

<body>
<div id="container" class="container_16">
    <div id="header" class="grid_16">
    	<a href="index.php"><h3>Krishna Engineering College</h3></a>
        <div id="top_menu">
        	<a id="ad_login" href="login.php">Admin</a>
        </div><!-- end top_menu -->
    </div><!-- end header -->
    
    <div id="sub_header" class="grid_16">
    	<h4 id="logo">Student Information System</h4>
    </div><!-- end sub header -->
    
    <div class="grid_6 login">
        <img src="images/login-top.png" />
        <div id="login">
            <h3>Admin Login</h3>
            <form method="post" action="checklogin.php">
                <p>Username:</p><input type="text" size="15" name="username" value="" class="usr" /><br />
                <p>Password: </p><input type="password" size="15" name="password" value="" class="input" /><br />
                <input type="submit" name="Submit" class="input_btn" value="Login" />
            </form><!-- end form -->
        </div><!-- end login -->
        <img src="images/login-bottom.png" />
    </div><!-- end login wrap -->
    
    <div class="grid_16 footer">
        <img src="images/footer-top.png" />
        <div id="footer">
            <p>&copy; 2010 Vishu Singh<br />KEC</p>
        </div><!-- end footer -->
        <img src="images/footer-bottom.png" />
    </div><!-- end footer wrap -->
    
    
</div><!-- end container -->


</body>
</html>
