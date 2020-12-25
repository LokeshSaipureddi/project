<?php  
    session_start(); 
    include "db_conn.php";?>
<!DOCTYPE html>
<html lang="en">
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
              <a href="#">Sign Out</a>
          </div> 
      </div> </li>
      </ul>
    </div>
  </div>
</div>
<!---------------------------------------------------------------------------------->
<div class="container">  
  <h3 class="text-center">Suppliers List</h3>
  <br>          
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Supplier id</th>
          <th>Supplier name</th>
          <th>Resource id</th>
          <th>Resource name</th>
          <th>Cost</th>
        </tr>
      </thead>
      <?php
      $sql="SELECT supply.company_id,company.company_name,resource.Rid,resource.resource_name,supply.cost FROM supply,company,resource WHERE supply.Rid=resource.Rid AND supply.company_id=company.company_id";
      $result=mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_assoc($result)){
        echo "<tbody>";
        echo  "<tr>";
        echo  "<td>" .$row['company_id']."</td>";
        echo  "<td>" .$row['company_name']."</td>";
        echo  "<td>" .$row['Rid']."</td>";
        echo  "<td>" .$row['resource_name']."</td>";
        echo  "<td>" .$row['cost']."</td>";
        echo  "</tr>";
        echo  "</tbody>";
      }
        ?> 
    </table>
  </div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>