<?php

$sname = "sql209.epizy.com";
$uname = "epiz_29108391";
$password = "vcqaArvS8vSq";
$db_name = "epiz_29108391_test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
    echo "Connection Failed";
}
