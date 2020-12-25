<?php  
    session_start(); 
    include "db_conn.php";
    if(isset($_POST['sub'])){
          $phno=$_POST['phno'];
          $city=$_POST['city'];
          $id=$_SESSION['Employeeid'];
          $sql5="UPDATE `employee` SET `Phone number`='$phno',`City`='$city' WHERE `Employeeid`='$id'";
          $result=mysqli_query($conn,$sql5);
          echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
          $_SESSION['Phone number']=$phno;
          $_SESSION['City']=$city;    
    }
  ?>
<!DOCTYPE html>
<!--
Template Name: Surogou
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
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
              <a href="#">profile</a>
              <hr>
              <a href="#">Sign Out</a>
          </div> 
      </div> </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<button style="margin-left: 1325px;" type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
  Change Profile
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Change Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="profile.php" method="POST">
          <div class="form-group">
            <label for="Area">Phone Number</label>
            <input type="number" class="form-control" value=<?php echo $_SESSION['Phone number'];?> name="phno" placeholder="Enter New Number" id="Area">
          </div>
          <div class="form-group">
            <label for="Priority">City</label>
            <input type="text" class="form-control" value=<?php echo $_SESSION['City'];?> name="city" placeholder="Enter New City" id="priority">
          </div> 
      <!-- Modal footer -->
      <div class="modal-footer">
      <input style="width: 18%;" type="submit" class="form-control btn btn-success" name="sub" value="Confirm">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>

<br>
<br>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<br><br>
<center>
    <img src="images/demo/backgrounds/34.png" style="border-radius: 100px; width: 120px;height: 120px;align-items: center;">
    <h1><?php echo $_SESSION['Username']; ?></h1> 
    </center><br><br><br>
    <center>
    <?php
        $sql="SELECT branch_location FROM branch , employee where branch.branch_id=employee.branch_id ";
        $sql1="SELECT skill_name FROM skills , employee where skills.Employeeid=employee.Employeeid ";
        $sql2="SELECT rating FROM health , employee where health.Employeeid=employee.Employeeid ";
        $result=mysqli_query($conn,$sql);
        $res1=mysqli_query($conn,$sql2);
        $res=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($result);
        $row1=mysqli_fetch_assoc($res);
        $row2=mysqli_fetch_assoc($res1);  
        $_SESSION['branch_location']=$row['branch_location'];
        $_SESSION['skill_name']=$row1['skill_name'];
        $_SESSION['rating']=$row2['rating'];?>
    <div style="padding-left: 200px;">
        <table style="width: 800px;">
            <tr style="padding-top: 10px;padding-bottom: 20px;height: 40px;"><td>Date of birth</td>
                <td><?php echo $_SESSION['DOB'];?></td></tr>
            <tr style="padding-top: 40px;padding-bottom: 10px;height: 40px;"><td>City</td>
                <td><?php echo $_SESSION['City']; ?></td></tr>
            <tr style="padding-top: 10px;padding-bottom: 20px;height: 40px;"><td>Date of joining</td>
                <td><?php echo $_SESSION['DOJ']; ?></td></tr>
            <tr style="padding-top: 40px;padding-bottom: 10px;height: 40px;"><td>Skills</td>
                <td><?php echo $_SESSION['skill_name']; ?></td></tr>
            <tr style="padding-top: 40px;padding-bottom: 20px;height: 40px;"><td>Health</td>
                    <td><?php echo $_SESSION['rating']; ?></td></tr>
            <tr style="padding-top: 10px;padding-bottom: 20px;height: 40px;"><td>Branch</td>
                        <td><?php echo $_SESSION['branch_location']; ?></td></tr>
                        <tr style="padding-top: 40px;padding-bottom: 10px;height: 40px;"><td>Phone Number</td>
                        <td><?php echo $_SESSION['Phone number']; ?></td></tr>
                        <tr style="padding-top: 40px;padding-bottom: 10px;height: 40px;"><td>Gender</td>
                        <td><?php echo $_SESSION['Gender']; ?></td></tr>
        </table>
    </div></center>
</body>
</html>