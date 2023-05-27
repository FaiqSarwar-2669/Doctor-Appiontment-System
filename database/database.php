<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Doctor_Appiontment_System";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if ($connection->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}



?>