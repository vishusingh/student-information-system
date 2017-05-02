<?php

	if ($section == 'admin') 
	{

		$h1 = 'Admin';

		$title = 'ADMIN | LOGIN';

	}

	if ($section == 'student')
	{

		$h1 = 'Student';

		$title = 'STUDENT | LOGIN';

	}

?>

<!DOCTYPE html>

<html lang="en">

	<head>

	 	<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title; ?></title>

		<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/bootstrap.css">
		
	</head>

	<body style="">

		<div class="row" style="margin-top: 125px;">

			<div class="col-md-4"></div>

			<div class="col-md-4">

				<h1 class="text-center"><?php echo $h1; ?></h1>
				
			    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" role="form">

					<legend><h2 class="text-center">Login</h2></legend>

					<div class="form-group">

						<label for="username">Username</label>

						<input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username" value="<?php if(isset($username)){echo $username;}?>" required="required" />

					</div>

					<div class="form-group">

						<label for="password">Password</label>

						<input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required="required" />

					</div>

					<center><button type="submit" class="btn btn-info">Let me in</button></center>

				</form>

			</div>

			<div class="col-md-4"></div>

		</div>

	</body>

</html>