<?php
session_start(); 
include "db_conn.php";
 if(isset($_POST['user']) && isset($_POST['pass'])){
    function validate($data){
        $data =trim($data);
        $data =stripslashes($data);
        $data =htmlspecialchars($data);
        return $data;
    }
    $username=validate($_POST['user']);
    $password=validate($_POST['pass']);
    if (empty($username)){
        header("Location : Login activity.php?error=User Name required");
        exit();
    }else if(empty($password)){
        header("Location : Login activity.php?error=Password required");
        exit();
 }else{
    $sql="SELECT * FROM employee WHERE Username='$username' AND Password='$password' ";
    $result= mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
        if($row['Username']==$username && $row['Password']===$password && $row['Role']==='Resource Manager'){
            $_SESSION['Employeeid']=$row['Employeeid'];
            $_SESSION['Username']=$row['Username'];
            $_SESSION['Password']=$row['Password'];
            $_SESSION['DOB']=$row['DOB'];
            $_SESSION['DOJ']=$row['DOJ'];
            $_SESSION['City']=$row['City'];
            $_SESSION['Phone number']=$row['Phone number'];
            $_SESSION['Gender']=$row['Gender'];
            header("Location: home1.php");
        }else if($row['Username']==$username && $row['Password']===$password && $row['Role']==='Team Leader'){
            $_SESSION['Employeeid']=$row['Employeeid'];
            $_SESSION['Username']=$row['Username'];
            $_SESSION['Password']=$row['Password'];
            $_SESSION['DOB']=$row['DOB'];
            $_SESSION['DOJ']=$row['DOJ'];
            $_SESSION['City']=$row['City'];
            $_SESSION['Phone number']=$row['Phone number'];
            $_SESSION['Gender']=$row['Gender'];
            header("Location: home_team leader.php");
        }else if($row['Username']==$username && $row['Password']===$password && ($row['Role']==='Civil Engineer' || $row['Role']==='Architect' || $row['Role']==='Technical Engineer')){
            $_SESSION['Employeeid']=$row['Employeeid'];
            $_SESSION['Username']=$row['Username'];
            $_SESSION['Password']=$row['Password'];
            $_SESSION['DOB']=$row['DOB'];
            $_SESSION['DOJ']=$row['DOJ'];
            $_SESSION['City']=$row['City'];
            $_SESSION['Phone number']=$row['Phone number'];
            $_SESSION['Gender']=$row['Gender'];
            header("Location: home_employee.php");
        }else{
            header("Location : Login activity.php?error=Incorrect username or password");
            exit();
        }
    }else{
        header("Location: Login activity.php?error=Incorect User name or password");
        exit();
    }
 } 
}  
    ?>