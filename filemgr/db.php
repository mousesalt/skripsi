<?php


$conn = mysqli_connect("localhost","root","","totp");
if(!$conn){
    die("Cannot connect to the database. Error: ".mysqli_error($conn));
}

?>