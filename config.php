<?php
session_start();
$server="localhost";
$user="root";
$pass="";
$db="nivas-hotel";
$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    echo"database is not connected";
}

?>