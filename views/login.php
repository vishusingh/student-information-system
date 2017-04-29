<!DOCTYPE html>

<html lang="en">

	<head>

	 	<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title; ?></title>

		<link rel="stylesheet" href="<?php echo baseUrl; ?>/assets/css/login.css">
		
	</head>

	<body>

		<div class="login">

			<h1><?php echo $h1; ?></h1>
			
		    <h2>Login</h2>

		    <form method="POST" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

		    	<input type="text" name="username" placeholder="Username" required="required" />

		        <input type="password" name="password" placeholder="Password" required="required" />

		        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>

		    </form> 

		</div>

	</body>

</html>