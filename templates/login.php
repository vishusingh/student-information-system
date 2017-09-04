<?php
    if (isset($errorList) && count($errorList)) 
    {                           
        foreach ($errorList as $error) 
        {                               
            echo $error;                        
        }                        
    }                        
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$pageTitle;?></title>
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/elegant-icons-style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/style-responsive.css">
    </head>
    <body class="login-img3-body">
        <div class="container">
        <form class="login-form" action="" method="POST">
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username" autofocus />
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password" />
                </div>
                <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                </label>
                <input type="hidden" name="token" value="<?=Token::generate();?>">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </div>
        </form>
    </body>
</html>
