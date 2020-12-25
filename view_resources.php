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
        <!-- Button to Open the Modal -->

        <br>
      
  <br>
<br>

   <!-------card for added projects-->
   <div class="container-fluid">
   <?php 
      session_start(); 
      include "db_conn.php";
      $i=0;
      $is=$_SESSION['id'];
      $sql="SELECT * FROM `requirements` where `PID`='$is'";
      $res=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($res)){
        if($i%3==0 && mysqli_num_rows($res)>=1){ ?>
         <div class="row mb-5"> 
        <?php }
        $id=$row['PID'];
        $r1=$row['res1_id'];
        $q1=$row['quantity1'];
        $r2=$row['res2_id'];
        $q2=$row['quantity1'];
        $r3=$row['res2_id'];
        $q3=$row['quantity1'];?>
      <div class="col-lg-4 col-md-4 col-12">
        
          <div class="card">
            
            <div class="card-body">
              <h1 class="card-tittle text-center"><?php echo $id?></h1><br>
              <table class="table table-borderless">
                <tbody>
                  <tr>
                  
                    <td>Project ID</td>
                    <td><?php echo $id?></td>
                   
                  </tr>
                  <tr>
                    <td>Resource 1</td>
                    <td><?php echo $r1?></td>
                  
                  </tr>
                  <tr>
                    <td>Resource 1 Quantity</td>
                    <td><?php echo $q1?></td>
                  
                  </tr>
                  <tr>
                    <td>Resource 2</td>
                    <td><?php echo $r2?></td>
                  
                  </tr>
                  <tr>
                    <td>Resource 2 Quantity</td>
                    <td><?php echo $q2?></td>
                  
                  </tr>
                  <tr>
                    <td>Resource 3</td>
                    <td><?php echo $r3?></td>
                  
                  </tr>
                  <tr>
                    <td>Resource 3 Quantity</td>
                    <td><?php echo $q3?></td>
                  
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