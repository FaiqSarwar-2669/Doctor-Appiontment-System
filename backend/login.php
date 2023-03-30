<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Doctor_Appiontment_System";

$connection=mysqli_connect($servername,$username,$password,$dbname);

$error="";
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];

if(empty($user_name))
{
    $error="Enter the User Name";
}
else if(empty($user_password))
{
    $error="Enter the Password";
}
if (!empty($error)) 
{
    header("Location: ../index.php?error=$error");
    exit;
}

// admin page
if($user_name==1 && $user_password==1)
{
    echo '<script>alert("This is an alert message!");</script>';
    header("Location: ../frontend/Admin_dashboard.php");
}

$query1="SELECT User_catagory FROM registeration where Doctor_email='$user_name' AND Conform_password='$user_password'";
$result1=mysqli_query($connection,$query1);
$output = mysqli_fetch_assoc($result1);
if($output['User_catagory']=='User')
{
    header("Location: ../frontend/User_page.php");
}
else if($output['User_catagory']=='Doctor')
{
    header("Location: ../frontend/Doctor_page.php");
}






?>