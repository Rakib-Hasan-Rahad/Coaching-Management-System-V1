<?php 
include "config.php";
if(isset($_POST['signup_btn'])){
    $user_id=mysqli_real_escape_string ($conn,$_POST['User_ID']);
    $username= mysqli_real_escape_string ($conn,$_POST['Username']);
    $email=mysqli_real_escape_string($conn,$_POST['Email']);
    $password=mysqli_real_escape_string($conn,$_POST['Password']);
    $c_password=mysqli_real_escape_string($conn,$_POST['c_password']);

    if(empty($username)){
        $error="Username field is required";
    }
    elseif(empty($email)){
        $error="Email field is required";
    }
    elseif(empty($user_id)){
        $error="User ID field is required";
    }
    elseif(empty($password)){
        $error="Password field is required";
    }
    elseif(empty($c_password)){
        $error=" Confirm Password field is required";
    }
    elseif($password != $c_password){
        $error=" Password doesnt match!";
    }
    elseif(strlen($username) <5 || strlen($username)>50){
        $error=" Username must be between 5 to 30 characters";
    }
    elseif(strlen($password)<3){
        $error=" password must be at least 3 characters";
    }
    else{
        $check_email="SELECT * from users WHERE Email='$email'|| Username='$username'"; 
        $data=mysqli_query($conn,$check_email);
        $result=mysqli_fetch_array($data);
        if ($result>0) {
            $error="Email or username already exist!";
        }
        else{
            #insert
            #$pass=md5($password);
            $insert="INSERT INTO users(User_ID,Username,Password,Email) Values('$user_id','$username','$password','$email')";
            $q=mysqli_query($conn,$insert);
            if($q){
                $success="Your acocunt has been created successfully!";
                header ('location:index.php');
            }

        }
        
    }
}



 ?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Reg</title>
</head>
<body>

<nav>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded">Registration Form</h1>
    </div>
</nav>


<form method="POST" action=''>
<p style="color:red"> <?php
            if(isset($error)){

                echo $error;
            }
        ?>
        </p>
        <p style="color:green"> <?php
            if(isset($success)){

                echo $success;
            }
        ?>
        </p>

<div class="container py-5">
    <div class="py-3">
      <label for="formGroupExampleInput" class="form-label">User ID</label>
      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="123" name="User_ID">
    </div>
    <div class="py-3">
      <label for="formGroupExampleInput2" class="form-label" >User Name</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="YourName" name="Username">
    </div>
    <div class="py-3">
      <label for="formGroupExampleInput3" class="form-label">Email</label>
      <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="something@gmail.com" name="Email">
    </div>
    <div class="py-3">
      <label for="formGroupExampleInput4" class="form-label">Password</label>
      <input type="password" class="form-control" id="formGroupExampleInput4" placeholder="123456" name="Password">
    </div>
    <div class="py-3">
      <label for="formGroupExampleInput5" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="formGroupExampleInput5" placeholder="123456" name='c_password'>
    </div>
    <div class="py-3">
      <a href="admin.php">
        <button type="submit" name="signup_btn" class="btn btn-warning">
          Sign Up
        </button>
      </a>            
    </div>
</div>



</form>





<nav class="navbar fixed-bottom navbar-light" style="background-color: #f4bb19;">
  <div class="container-fluid">
    <h3 class="container-fluid text-center text-light">E-SHIKHO</h3>
  </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/055fc9e940.js" crossorigin="anonymous"></script>
</body>
</html>