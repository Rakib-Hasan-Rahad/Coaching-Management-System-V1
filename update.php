<?php 
include 'config.php';
$id=$_GET['id'];
$select="SELECT * from students WHERE Student_ID='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<div> 
        <form action="" method="POST">
            <label>User ID:</label>
            <input value="<?php echo $row['User_ID']?>" type="number" name="User_ID" placeholder="user id"><br><br>
            <label>Student_ID: </label>
            <input value="<?php echo $row['Student_ID']?>" type="number" name="Student_ID" placeholder="Student id"><br><br>
            <label>Batch_ID : </label>
            <input value="<?php echo $row['Batch_ID']?>" type="number" name="Batch_ID" placeholder="Batch_ID"><br>
            
            <label>Fees : </label>
            <input value="<?php echo $row['Fees']?>" type="number" name="Fees" placeholder="Fees"><br>
            <input type="submit" name="update_info"  value='Update'>  
            <button><a href="student.php">View</a></button>
           
        </form>
        </div>
        <?PHP
    if (isset($_POST['update_info'])){
        $user_id = $_POST["User_ID"];
        $std_id = $_POST["Student_ID"];
        $batch = $_POST["Batch_ID"];
        $fees = $_POST["Fees"];

 $update= "UPDATE students SET User_ID='$user_id', Student_ID='$std_id',Batch_ID='$batch',Fees='$fees' WHERE Student_ID='$id'";

    //execute the query

    $data=mysqli_query($conn,$update); // sending $query data to $conn
    
    if($data){
        ?>
        <script type="text/javascript">
            alert("Data updated successfully"); 
            window.open ("http://localhost/C1/student.php","_self")
            </script>
         <?php

    }
    else {

        ?>
        <script type="text/javascript">
            alert("invalid! please try again!");  
            </script>
         <?php
    }

    }
    ?>
    
</body>
</html>