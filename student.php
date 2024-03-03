<?php 
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
</head>
<body>

  <table border="2px" cellspacing="0" cellpadding="5">
    <caption> <a href="add.php">Add new Student </a></caption>
    <tr>
        <th>User ID</th>
        <th>Student ID </th>
        <th> Batch ID </th>
        <th> Class_shift </th>
        <th> Fees </th>
        <th colspan="2">Action</th>

    </tr>
    <?php
    $query= "SELECT * FROM students";
    $data= mysqli_query($conn,$query);
    $result=mysqli_num_rows($data);
    if($result){
        while ($row=mysqli_fetch_array($data)){
           ?>
           <tr>
            <td><?php echo $row['User_ID']; ?></td>
            <td><?php echo $row['Student_ID']; ?></td>
            <td><?php echo $row['Batch_ID']; ?></td>
            <td><?php echo $row['Class_shift']; ?></td>
            <td><?php echo $row['Fees']; ?></td>
            <td><a href="update.php?id=<?php echo $row['Student_ID']; ?>">Edit</a></td>
            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $row['Student_ID']; ?>">Delete</a></td>
        

        </tr> 
        <?php
        }
    }
    else{
        ?>
        
        <tr>
            <td> No records Found </td>
        </tr>
        <?php
    }
    ?>

  </table>
  
</body>
</html>