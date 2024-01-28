<?php

$conn = new mysqli("localhost", "root", "", "c_project");

if($conn->connect_error) {
    die("connection failed: ".$conn->connect_error);
}
//else{
   // echo("connection success");
//}
?>