<?php

$servername="localhost";
$username="root";
$password="";
$dbname="Doctor_Appiontment_System";

$connection=mysqli_connect($servername,$username,$password,$dbname);

$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$contact=$_POST['contact_number'];
$email=$_POST['email'];
$password=$_POST['password'];


// hhhhhh

//insert the record into the database
$qurey="INSERT INTO `user_table` (`User_name`, `User_address`, `User_gender`, `User_contact`, `User_email`, `User_password`)
 VALUES ('$name', ' $address', '$gender', '$contact', '$email', '$password')";
mysqli_query($connection,$qurey);


if (1) {
    header('Location: index.php');
    exit;
}
else {
    header('Location: registration_page.php');
    exit;
}

?>