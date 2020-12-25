<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="img1.svg">
		</div>
		<div class="login-content">
			<form action="process.php" method="post">
				<img src="male.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" id="user" name="user"/>
           		   </div>  
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" id="pass" name="pass"/>
            	   </div>
            	</div>
				<?php if (isset($_GET['error'])){ ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
            	<a href="forgot_pass.php">Forgot Password?</a>
                <input type="submit" class="btn" value="Login"/>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
