<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "test_db";

$local = mysqli_connect($sname, $uname, $password, $db_name);

if(!$local){
    echo "Connection Failed!";
    exit();
}