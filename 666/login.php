<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css"></link>
</head>
<body>

	<header>
		<h2 class="logo">Aloha</h2>
		<nav class="navigation">
			<a href="#">Home</a>
			<a href="#">About</a>
			<a href="#">Contact</a>
			<a href="register.php">
			<button class="btnLogin-popup">
				Register
			</button>
			</a>
		</nav>
	</header><br><br>

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" ></input>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password"></input>
  	</div><br>
  	<!-- div class="input-group"-->
  		<button type="submit" class="btn" name="login_user">Login</button>
  	<!--/div-->
  	<p><br>
  		<center>Not a member yet?</center>
		<a href="register.php" style="color:white">
			<center>Sign up></center>
		</a>
  	</p>
  </form>
</body>
</html>