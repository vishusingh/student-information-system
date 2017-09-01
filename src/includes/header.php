<!DOCTYPE html>

<html lang="en">

    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

        <meta charset="utf-8">

        <title>School Management System</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" type="text/css" href="<?=bootstrapcss;?>">

        <link rel="stylesheet" type="text/css" href="<?=fontawesome;?>">

        <link rel="stylesheet" type="text/css" href="<?=customcss;?>">

    </head>
    
<body>

<?php if (isset($section) && $section != 'home'): ?>

<div class="navbar navbar-default navbar-static-top">

	<div class="container">

		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-toggle"></span>
			</button>

			<?php require_once rootPath . '/includes/nav.php'; ?>

		</div>

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav navbar-right">

			<li><a href="<?php echo baseUrl; ?>/profile/"><i class="fa fa-user fa-lg"></i> <?php echo User::data('username'); ?></a></li>

			<li><a href="<?php echo baseUrl; ?>/logout/"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
			
			</ul>

		</div>

	</div>

</div>

<?php endif; ?>