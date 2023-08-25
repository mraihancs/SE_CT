<?php
$server = "localhost";
$username = "root";
$password="";
$db="inventory_schema";

$conn = mysqli_connect($server,$username,$password,$db);

if($conn){
    

}

else {
    echo 'unsuccessful'.mysqli_connect_error();
}



?>