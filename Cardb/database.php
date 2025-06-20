<?php
$server="localhost";
$username="root";
$password="";
$dbname="test";

$con=mysqli_connect($server, $username, $password, $dbname);

if($con){

   echo "connection success";
   }else{
   die("Could not connect:".mysqli_error($con)) ;
}

?>