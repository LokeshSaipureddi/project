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
    width: 99%;
    background-color: white;
    text-align: left;
    margin-left: 5px;
    height: 40px;
    border-color: black;
    border-radius: 5px;
    padding-left: 20px;
}
#outbox button:hover{
    box-shadow: 2px 4px grey;
    }
</style>
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="home.php"><i class="fas fa-home fa-lg"></i></a></li>
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

<!---------------------------------------------------------->


<section class="container-fluid">
    <article>
      <div class="container-fluid">
        <br>
        <!-- Button to Open the Modal -->
        <button style="margin-left: 1325px;" type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
          Add Project
        </button>
      
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add Project</h4>
                
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <form action="/action_page.php">
                  <div class="form-group">
                    <label for="email">Tittle</label>
                    <input type="text" class="form-control" placeholder="Enter Tittle" id="tittle" autocomplete="tittle">
                  </div>
                  <div class="form-group">
                    <label for="Area">Area</label>
                    <input type="text" class="form-control" placeholder="Enter Area" id="Area">
                  </div>
                  <div class="form-group">
                    <label for="Priority">Priority</label>
                    <input type="text" class="form-control" placeholder="Enter priority" id="priority">
                  </div>
                  <div class="form-group">
                    <label for="startdate">Team Leader id</label>
                    <input type="number" class="form-control" id="teamleaderid">
                </div>
                  <div class="form-group">
                      <label for="startdate">start Date</label>
                      <input type="date" class="form-control" id="startdate">
                  </div>

                  <div class="form-group">
                    <label for="enddate">End Date</label>
                    <input type="date" class="form-control" id="enddate">
                </div>

                <div class="form-group">
                    <label for="employee1">employee1</label>
                    <select name="employee1" class="custom-select mb-3">
                        <option selected>Name1</option>
                        <option value="Name2">Name2</option>
                        <option value="Name3">Name3</option>
                      </select>
                </div>

                <div class="form-group">
                    <label for="employee2">employee2</label>
                    <select name="employee1" class="custom-select mb-3">
                        <option selected>Name1</option>
                        <option value="Name2">Name2</option>
                        <option value="Name3">Name3</option>
                      </select>
                </div>

                <div class="form-group">
                    <label for="employee3">employee3</label>
                    <select name="employee1" class="custom-select mb-3">
                        <option selected>Name1</option>
                        <option value="Name2">Name2</option>
                        <option value="Name3">Name3</option>
                      </select>
                </div>
                  <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>
  <br>
  
    </article>
  </section>
  
<!------------------------------------------------------------------------------------------->

<div id="outbox">
<button type="button" class="btn" data-toggle="modal" data-target="#myModal1">Proj tittle1</button>


<div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Project1</h4>
          
          <button style="width: 50px;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6" style="background-color:white;">Project Tittle</div>
                  <div class="col-sm-6" style="background-color:white;">tittle1</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6" style="background-color:white;">Project Location</div>
                    <div class="col-sm-6" style="background-color:white;">area</div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6" style="background-color:white;">Priority</div>
                    <div class="col-sm-6" style="background-color:white;">priority value</div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6" style="background-color:white;">Team Leader id</div>
                    <div class="col-sm-6" style="background-color:white;">id value</div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6" style="background-color:white;">start date</div>
                    <div class="col-sm-6" style="background-color:white;">start date value</div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6" style="background-color:white;">end date</div>
                    <div class="col-sm-6" style="background-color:white;">end date value</div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6" style="background-color:white;">employee3</div>
                    <div class="col-sm-6" style="background-color:white;">employee3</div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6" style="background-color:white;">employee2</div>
                    <div class="col-sm-6" style="background-color:white;">employee2</div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6" style="background-color:white;">employee1</div>
                    <div class="col-sm-6" style="background-color:white;">employee1</div>
                  </div>
                  <br>
              </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button style="width: 80px;" type="button" class="btn btn-warning" data-dismiss="modal" id="close">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  </div>


<button type="button" class="btn" data-toggle="modal" data-target="#myModal1">Proj tittle2</button>

<button type="button" class="btn" data-toggle="modal" data-target="#myModal1">Proj tittle3</button>

<button type="button" class="btn" data-toggle="modal" data-target="#myModal1">Proj tittle4</button>
</div>

  
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>