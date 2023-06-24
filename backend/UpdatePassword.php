<?php
include ("../database/database.php");

$name=$_POST['name'];
$conform_password=$_POST['conform_password'];

if(empty($name))
{
    echo 'enter the Username!';
}
else if(!filter_var($name, FILTER_VALIDATE_EMAIL))
{
    echo 'enter the valid Username!';
}
else if(empty($conform_password)||strlen($conform_password)>8)
{
    echo 'Your password lenght must be Eight or less!';
}
else{
    $sql="SELECT * FROM registeration WHERE Doctor_email = '$name'";
    $output=mysqli_query($connection,$sql);
    $num=mysqli_num_rows($output);
    if($num>0)
    {
        $sql1 = "UPDATE `registeration` SET `User_password` = '$conform_password', `Conform_password` = '$conform_password' WHERE `registeration`.`Doctor_email` = '$name'";
        $output1=mysqli_query($connection,$sql1);
        if($output1)
        {
            echo "1";
        }
        else{
            echo "Unsuccessfully Updated !!";
        }
    }
    else{
        echo "Against This User-Name no record found !!";
    }
}