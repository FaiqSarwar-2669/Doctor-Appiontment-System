<?php
include ("../database/database.php");

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
    exit();
}


$query1="SELECT User_id,User_catagory FROM registeration where Doctor_email='$user_name' AND Conform_password='$user_password'";
$result1=mysqli_query($connection,$query1);
if (mysqli_num_rows($result1) > 0) 
{
    $output=mysqli_fetch_assoc($result1);
    if($output['User_catagory']=='Admin')
    {
        header("Location: ../frontend/Admin_dashboard.php?id=".$output['User_id']);
        exit();
    }
    else if($output['User_catagory']=='User')
    {
        header("Location: ../frontend/User_dashboard.php?id=".$output['User_id']);
        exit();
    }
    else if($output['User_catagory']=='Doctor')
    {
        header("Location: ../frontend/Doctor_dashboard.php?id=".$output['User_id']);
        exit();
    }
}
else
{
    $error="No record found";
}
if (!empty($error)) 
{
    header("Location: ../index.php?error=$error");
    exit();
}





?>