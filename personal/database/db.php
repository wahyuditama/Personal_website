<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "file";

$db = mysqli_connect($hostname,$username,$password,$dbname);

if($db->connect_error){
    die("conection error");
}