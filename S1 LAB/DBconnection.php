<?php 
$con = NULL;
$servername = "localhost";
$username = "root";
$password = "";
$database = "sample";
$con = mysqli_connect($servername,$username,$password,$database);
if(!$con){
 die('Mysql connection error : '.mysqli_connect_error()); 
}
?>