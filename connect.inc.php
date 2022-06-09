<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "shri_db";


// Create connection
$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);


// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}





?>