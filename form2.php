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
$description=$_POST['description'];
$specilization=$_POST['specilization'];

// hhhhhh
$check_qurey="SELECT COUNT(*) FROM doctor_table WHERE Doctor_specialization = '$specilization' ";
$result=mysqli_query($connection,$check_qurey)->fetch_assoc();
print_r($result["COUNT(*)"]);
if($result<=1)
{
    $qurey="INSERT INTO `doctor_table` (`Doctor_name`, `Doctor_specialization`, `Doctor_address`, `Doctor_gender`, `Doctor_contact`, `Doctor_email`, `Doctor_password`, `Doctor_description`)
    VALUES ('$name', '$specilization', '$address', '$gender', '$contact', '$email', '$password', '$description')";
    mysqli_query($connection,$qurey);

    header('Location: index.php');
    exit;
}
else
{
    header('Location: registration_page.php?form2=&msg=This Specialist Doctor is Already added!');
    exit;
}

?>