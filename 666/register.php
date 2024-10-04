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
			<a href="login.php">
			<button class="btnLogin-popup">
				Login
			</button>
			</a>
		</nav>
	</header>

  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>"></input>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>"></input>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1"></input>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2"></input>
  	</div><br>
  	<!-- div class="input-group"-->
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	<!--/div-->
  	<p><br>
  		<center>Already a member? </center>
		<a href="login.php" style="color:white">
			<center>Sign in></center>
		</a>
  	</p>
  </form>
</body>
</html>