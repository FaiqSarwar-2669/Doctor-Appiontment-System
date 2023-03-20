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

// hhhhhh
$qurey_1="SELECT * FROM `admin_table`";
$reult=mysqli_query($connection,$qurey_1);
$num=mysqli_num_rows($reult);
if ($num<=2)
{
    $qurey="INSERT INTO `admin_table` ( `Admin_name`, `Admin_address`, `Admin_gender`, `Admin_contact`, `Admin_email`, `Admin_description`, `Admin_password`) 
    VALUES ('$name', '$address', '$gender', '$contact', '$email', '$description', '$password')";
    mysqli_query($connection,$qurey);
    header('Location: index.php');
    exit;
}
else 
{
    header('Location: registration_page.php?form1=&msg=Only two admin required at a time!');
    exit;
}

?>
