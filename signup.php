<?php 
include "connection.php";
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
        $error=" Username must be between 5 to 50 characters";
    }
    elseif(strlen($password)<8){
        $error=" password must be at least 8 characters";
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
            $insert="INSERT INTO user(User_ID,Username,Password,Email) Values('$user_id','$username','$password','$email')";
            $q=mysqli_query($conn,$insert);
            if($q){
                $success="Your acocunt has been created successfully!";
            }

        }
        
    }
}



 ?>