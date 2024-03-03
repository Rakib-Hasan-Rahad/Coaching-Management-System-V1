<?php 
include "config.php";
if(isset($_POST['add'])){
    $user_id=mysqli_real_escape_string ($conn,$_POST['User_ID']);
    $std_id= mysqli_real_escape_string ($conn,$_POST['Student_ID']);
    $batch_id=mysqli_real_escape_string($conn,$_POST['Batch_ID']);
    $fees=mysqli_real_escape_string($conn,$_POST['Fees']);
    $class_shift=mysqli_real_escape_string($conn,$_POST['Class_shift']);
    

  
    }
    elseif(empty($user_id)){
        $error="User ID field is required";
    }
    elseif(empty($std_id)){
        $error="Student id  field is required";
    }
    elseif(empty($batch_id)){
        $error=" Batch  field is required";}
        elseif(empty($fees)){
            $error=" fees field is required";
    }

   
    else{
        $check_email="SELECT * from students WHERE Student_ID='$std_id'"; 
        $data=mysqli_query($conn,$check_email);
        $result=mysqli_fetch_array($data);
        if ($result>0) {
            $error="STD ID or User ID  already exists!";
        }
        else{
            #insert
            #$pass=md5($password);
            $insert="INSERT INTO students(User_ID,Student_ID,Batch_ID,Class_shift,Fees) Values('$user_id','$std_id','$batch_id','$class_shift','$fees')";
            $q=mysqli_query($conn,$insert);
            if($q){
                $success="Data entered successfully!";
                header('location:student.php');
            }

        }
        
    }




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
            <label>User ID:</label>
            <input  type="number" name="User_ID" placeholder="user id"><br><br>
            <label>Student_ID: </label>
            <input value="" type="number" name="Student_ID" placeholder="Student id"><br><br>
            <label>Batch_ID : </label>
            <input value="" type="number" name="Batch_ID" placeholder="Batch_ID"><br><br>
            <label>class_shift : </label>
            <input value="" type="text" name="Class_shift" placeholder="class shift"><br>
            
            <label>Fees : </label>
            <input value="" type="number" name="Fees" placeholder="Fees"><br>
            <input type="submit" name="add"  value='Submit'>  
            
           
        </form>
</body>
</html>
