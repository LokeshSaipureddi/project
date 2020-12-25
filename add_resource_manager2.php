<!DOCTYPE html>
<!--
Template Name: Surogou
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="en">
<?php
  session_start(); 
  include "db_conn.php";
  if(isset($_POST['submit'])){
    $i=0;
    $id=$_POST['proj_id'];
    $r1=$_POST['r1'];
    $q1=$_POST['r1q'];
    $r2=$_POST['r2'];
    $q2=$_POST['r2q'];
    $r3=$_POST['r3'];
    $q3=$_POST['r3q'];
    $sql1="SELECT * FROM `project`";
    $result1=mysqli_query($conn,$sql1);
    while($row=mysqli_fetch_assoc($result1)){
      if($row['PID']===$id){
      $sql="INSERT INTO `requirements`(`PID`, `res1_id`, `quantity1`, `res2_id`, `quantity2`, `res3_id`, `quantity3`) 
           VALUES('$id', '$r1', '$q1', '$r2', '$q2', '$r3', '$q3')";
      $result=mysqli_query($conn,$sql);
      $i=$i+1;
      ?><?php
    }else{
    }
    
    }
    $_SESSION['id']=$id;
    $_SESSION['r1']=$r1;
    $_SESSION['q1']=$q1;
    $_SESSION['r2']=$r2;
    $_SESSION['q2']=$q2;
    $_SESSION['r3']=$r3;
    $_SESSION['q3']=$q3;
  }else{
    $i=5;
  }
    ?>
<head>
<title>NALA</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
      
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="home1.php"><i class="fas fa-home fa-lg"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
 
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="fas fa-envelope rgtspace-5"></i> nalaconstruction@gmail.com</li>
        <li><div class="dropdown"> 
            <img src="images/demo/backgrounds/34.png" style="border-radius: 50px;width: 35px;width: 35px;">
              
            <div class="dropdown-content"> 
            <a href="profile.php">profile</a>
              <hr>
              <a href="Login activity.php">Sign Out</a>
            </div> 
        </div> </li>
      </ul>
    </div>
      </div>
</div>
<!------------------------------------------------------------------>

<br><br>
<div class="container">
    <form action="add_resource_manager2.php" method="POST">
      <div class="row">
        <div class="col">
            <h4>Project Id:</h4>
          <input type="text" class="form-control" id="Project Id" placeholder="Enter Project Id" name="proj_id">
        </div></div>
        <br>
        <div class="row">
        <div class="col">
            <h4>Resource 1</h4>
          <input type="text" class="form-control" id="email" placeholder="Enter Resource1 Id" name="r1">
        </div>
        <div class="col">
            <h4>Quantity</h4>
          <input type="text" class="form-control" placeholder="Enter Resource1 Quantity" name="r1q">
        </div></div>
      
      <br>
<!---resource 2-->
<div class="row">
    <div class="col">
        <h4>Resource 2</h4>
      <input type="text" class="form-control" id="email" placeholder="Enter Resource2 Id" name="r2">
    </div>
    <div class="col">
        <h4>Quantity</h4>
      <input type="text" class="form-control" placeholder="Enter Resource2 Quantity" name="r2q">
    </div></div>
  
  <br>
  <!--resource 3-->
  <div class="row">
    <div class="col">
        <h4>Resource 3</h4>
      <input type="text" class="form-control" id="email" placeholder="Enter Resource3 Id" name="r3">
    </div>
    <div class="col">
        <h4>Quantity</h4>
      <input type="text" class="form-control" placeholder="Enter Resource3 Quantity" name="r3q">
    </div></div>
    </br>
  <input type="submit" class="btn btn-primary" value="Confirm" name="submit">

  <?php 
  if ($i===1){ ?>
    <br>
      <div class="alert alert-success">
      <strong >Success!</strong>Entered Value Successfully
    <?php }else if ($i===0) {?>
      <br>
      <div class="alert alert-danger">
      <strong>Danger!</strong> Check Project Id.
    </div> 
    <?php } ?>
    </div>
    </form>
  </div>
</body>
</html>
