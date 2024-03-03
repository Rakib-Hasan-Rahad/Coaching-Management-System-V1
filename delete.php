
<?php 
include 'config.php';

$id=$_GET['id'];
$query="DELETE from students WHERE Student_ID='$id'"; 
$data=mysqli_query($conn,$query);
if($data){
    ?>
    <script type="text/javascript">
        alert("Data deleted successfully!");
        window.open("http://localhost/C1/student.php","_self" );

    </script>
    <?php
}
else{
    ?>
    <script type="text/javascript">
        alert("Invalid! Please try again");
    </script>
    <?php
}