<!DOCTYPE html>

<html lang="en">

	<head>

	 	<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $pageTitle; ?></title>

		<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/bootstrap.css">

		<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/font-awesome.min.css">
		
	</head>

	<body style="">

		<div class="row" style="margin-top: 125px;">

			<div class="col-md-4"></div>

			<div class="col-md-4">

				<h1 class="text-center">School Management System</h1>								
				
			    <form action="" method="POST" role="form">

					<legend><h2 class="text-center">Login</h2></legend>

					<?php

					if (isset($errorList) && count($errorList)) 
					{
						
						foreach ($errorList as $error) 
						{
							
							echo '<br /><div class="alert alert-danger">' . $error . '</div><br />';

						}

					}

					?>

					<div class="form-group">

						<label for="username">Username</label>

						<div class="input-group">

							<span class="input-group-addon"><i class="fa fa-user"></i></span>

							<input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username" value="<?php echo Input::get('username'); ?>" required />

						</div>

					</div>

					<div class="form-group">

						<label for="password">Password</label>

						<div class="input-group">

							<span class="input-group-addon"><i class="fa fa-lock"></i></span>

							<input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required />

						</div>

					</div>

					<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">

					<center><button type="submit" class="btn btn-info">Let me in</button></center>

				</form>

			</div>

			<div class="col-md-4"></div>

		</div>

	</body>

</html>