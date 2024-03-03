<?php

$host="localhost";
$user="root";
$password="";
$db="c_m_system16";

$conn = mysqli_connect($host,$user,$password,$db);

if($conn){

    echo "";//connection successful

}
else{

    echo "Connection failed";
}


?>