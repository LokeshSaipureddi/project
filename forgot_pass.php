<!DOCTYPE html>
<html>
<?php 
session_start(); 
include "db_conn.php";
$id=$_SESSION['Employeeid'];
if(isset($_POST['sub'])){
	$id=$_POST['user'];
	$pass=$_POST['pass'];
	$sql="UPDATE `employee` SET `password`='$pass' WHERE `Username`='$id'";
	$result=mysqli_query($conn,$sql);
	$i=1;
}else{
	$i=0;
}
?>
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
			<img src="forg_pass.svg">
		</div>
		<div class="login-content">
			<form action="forgot_pass.php" method="post">
				<img src="forg_pass_prof.svg">
				<h2 class="title">Recover your Password</h2>
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
           		    	<h5>Enter new Password</h5>
           		    	<input type="password" class="input" id="pass" name="pass"/>
            	   </div>
            	</div>
                <input type="submit" class="btn" value="continue" name="sub"/>
            </form>
			<?php 
  if ($i===1){ ?>
    <br>
      <div class="alert alert-success">
      <strong >Success!</strong>Entered Value Successfully
  <?php } ?>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>