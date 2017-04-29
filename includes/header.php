<!DOCTYPE html>

<html lang="en">

    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

        <meta charset="utf-8">

        <title>SIS | STUDENT</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo baseUrl; ?>/assets/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="<?php echo baseUrl; ?>/assets/css/font-awesome.min.css">

    </head>
    
<body>

<div id="top-nav" class="navbar navbar-default navbar-static-top">

	<!--START NAVBAR CONTAINER-->
	<div class="container">

		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-toggle"></span>
			</button>

			<a class="navbar-brand" href="<?php echo baseUrl; ?>/admin">Student | Dashboard</a>

		</div>

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav navbar-right">

			<li class="dropdown">

				<a class="dropdown-toggle" role="button" data-toggle="dropdown"><i class="fa fa-user"></i>USER<span class="caret"></span></a>

				<ul id="g-account-menu" class="dropdown-menu" role="menu">
				<li><a href="<?php echo baseUrl; ?>/content/profile">Profile</a></li>
				</ul>
				
			</li>

			<li><a href="<?php echo baseUrl; ?>/logout/"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
			
			</ul>

		</div>

	</div>
	<!--END NAVBAR CONTAINER-->

</div>

<!--START OVERALL CONTAINER-->
<div class="container">

	<!--START OVERALL ROW-->
	<div class="row">

		<div class="col-md-2">

		<?php require_once sideNav; ?>

		</div>
