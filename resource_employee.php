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
<style>
  #close:hover{
      background-color: red;
      color: whitesmoke;}
  #outbox button{
      margin-top: 10px;
      margin-bottom: 10px;
      width: 60%;
      background-color: white;
      text-align: left;
      margin-left: 5px;
      height: 40px;
      border:none;
      border-radius: 5px;
      padding-left: 20px;
      box-shadow: 2px 4px grey;
  }
   </style>
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="nospace">
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
        <br>
        <br>
  <br>
<br>

   <!-------card for added projects-->
   <div class="container-fluid">
    <?php
        session_start(); 
        include "db_conn.php";
        $is=$_SESSION['Employeeid']; 
        $sql1="SELECT * FROM project where $is=leader_id or $is=Civileng_id or $is=Technicaleng_id or $is=Architect";  
         $res=mysqli_query($conn,$sql1);
         $i=0;
         while($row=mysqli_fetch_assoc($res)){
           if($i%3==0 && mysqli_num_rows($res)>=1){ ?>
            <div class="row mb-5"> 
           <?php }
           $id=$row['PID'];
           $nam=$row['proj_name'];
           $location=$row['proj_location'];
    $priority=$row['priority'];
    $leader_id=$row['leader_id'];
    $start_date=$row['start date'];
    $end_date=$row['end date'];
    $Cid=$row['Civileng_id'];
    $Aid=$row['Architect'];
    $Tid=$row['Technicaleng_id'];?>
       <div class="col-lg-4 col-md-4 col-12">    
      <div class="card">
        <div class="card-body">
          <h1 class="card-tittle text-center"><?php echo $nam ?></h1><br>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Tittle</td>
                <td><?php echo $nam ?></td>
              </tr>
              <tr>
                <td>Area</td>
                <td><?php echo $location ?></td>
              </tr>
              <tr>
                <td>Priority</td>
                <td><?php echo $priority ?></td>
              </tr>
              <tr>
                <td>Team Leader id</td>
                <td><?php echo $leader_id ?></td>
              </tr>
              <tr>
                <td>Start Date</td>
                <td><?php echo $start_date ?></td>
              </tr>
              <tr>
                <td>End Date</td>
                <td><?php echo $end_date ?></td>
              </tr>
              <tr>
                <td>Civil Engineer</td>
                <td><?php echo $Cid ?></td>
              </tr>
              <tr>
                <td>Architect</td>
                <td><?php echo $Aid ?></td>
              </tr>
              <tr>
                <td>Technical Engineer</td>
                <td><?php echo $Tid ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
         <?php 
           $i=$i+1; }  ?> 
</div>
      </div>
  
  <br><br>
  

  <!---end for card for ended projects -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>