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
<div class="page login-page">
    <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
            <div class="form-inner">
                <div class="logo text-uppercase"><span>STUDENT</span><strong class="text-primary">  INFORMATION SYSTEM</strong></div>
                <form id="login-form" method="post" action="/login/">
                    <div class="form-group">
                        <label for="login-username" class="label-custom">User Name</label>
                        <input id="login-username" type="text" name="username" required="">
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="label-custom">Password</label>
                        <input id="login-password" type="password" name="password" required="">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Login" id="login">
                </form>
                <a href="/login/" class="forgot-pass">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
