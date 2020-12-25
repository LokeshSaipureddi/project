<?php
      if(isset($_POST['user'])){
        $from=$_POST['femail'];
        $to=$_POST['tmail'];
        $sub=$_POST['Subject'];
        $body=$_POST['body'];
        
        if(mail($to, $sub, $body)){
          echo "send successfully";
        }else{
          echo "not sucees full";
        }
      }
        ?>
<!DOCTYPE html>
<html lang="en">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>NALA</title><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="index.html"><i class="fas fa-home fa-lg"></i></a></li>
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
  </div>
</div>
<!----mail code starts-->
    <div class="container">
        <form action="for mail.php" method="POST">
          <div class="row">
            <div class="col">
                <h4>From:</h4>
              <input type="text" class="form-control" id="email" placeholder="Enter from mail" name="femail">
            </div>
            <div class="col">
                <h4>To:</h4>
              <input type="email" class="form-control" placeholder="Enter to mail" name="tmail">
            </div>
          </div>
          <br>
          <div class="row">
              <div class="col">
                <h4>Subject:</h4>
                <input type="text" class="form-control" placeholder="Enter Subject" name="Subject">
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col">
                  <h4>Body:</h4>
                  <textarea name="body" class="form-control rounder-15" rows="10"></textarea>
              </div>
          </div>
          <br>
          <input type="submit" name="user" class="btn btn-primary" value="Send">
        </form>
      </div>
</body>
</html>