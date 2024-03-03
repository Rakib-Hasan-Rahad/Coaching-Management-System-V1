
    <?php
    include 'config.php';
    if(isset($_POST['login_btn'])){
        $email=$_POST['Email'];
        $password=$_POST['Password'];
        
       $select="SELECT * FROM users WHERE Email='$email' && Password='$password'";
        $query=mysqli_query($conn,$select);
        $row=mysqli_num_rows($query);
        $fetch=mysqli_fetch_array($query);
        echo $row;
        if($row==1){
            $username= $fetch['Username'];
            session_start();
            $_SESSION['Username']=$username;
            header('location:admin.php');

        }
        else{
            echo "<p style='color:red'>Invalid email or password! Please try again.</p>";
        }

    }
?>
