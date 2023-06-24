<?php

include('../database/database.php');

$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$contact=$_POST['contact_number'];
$role=$_POST['selection'];
$specialization=$_POST['specialization'];
$email=$_POST['email'];
$password=$_POST['password'];
$conform_password=$_POST['conform_password'];

if(empty($name))
{
    echo 'Enter the name!';
}
else if (!preg_match("/^[a-zA-Z ]*$/", $name)) 
{
    echo 'Enter the name in only letter!';
}
else if(empty($address))
{
    echo 'Enter the address!';
}
else if(empty($gender))
{
    echo 'Enter the gender!';
}
else if(!preg_match("/^03[0-9]{2}-[0-9]{7}$/", $contact))
{
    echo 'Please follow this pattern 03XX-XXXXXXX!';
}
else if(empty($role))
{
    echo 'Enter the category!';
}
else{
    $sql="SELECT * FROM registeration WHERE User_contact = '$contact'";
    $output=mysqli_query($connection,$sql);
    $num=mysqli_num_rows($output);
    if($num>0)
    {
        echo "This number is already exist try to another one";
    }
    else
    {
        if($role=='User')
        {
            if(empty($email))
            {
                echo 'enter the email!';
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo 'enter the valid email!';
            }
            else if(empty($password)||strlen($password)>8)
            {
                echo 'Your password lenght must be Eight or less!';
            }
            else if(empty($conform_password)||strlen($conform_password)>8)
            {
                echo 'Your password lenght must be Eight or less!';
            }
            else if($password!=$conform_password)
            {
                echo 'Password does not match!';
            }
            else{
                $qurey="INSERT INTO `registeration` (`User_name`, `User_address`, `User_gender`, `User_contact`, `User_catagory`,`Doctor_email`, `User_password`, `Conform_password`) VALUES 
                ('$name', '$address', '$gender', '$contact', '$role', '$email', '$password', '$conform_password')";
                mysqli_query($connection,$qurey);
                if($qurey)
                {
                    echo "Successfully Added!!";
                }
                else
                {
                    echo "Unsuccessfully Added!!";
                }
            }
            
        }
        else if($role=='Doctor')
        {
            if(empty($specialization))
            {
                echo 'Enter the Specilaization!';
            }
            else if(empty($email))
            {
                echo 'enter the email!';
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo 'enter the valid email!';
            }
            if(empty($password)||strlen($password)>8)
            {
                echo 'Your password lenght must be Eight or less!';
            }
            else if(empty($conform_password)||strlen($conform_password)>8)
            {
                echo 'Your password lenght must be Eight or less!';
            }
            else if($password!=$conform_password)
            {
                echo 'Password does not match!';
            }
            else{
                $qurey3="SELECT * FROM registeration WHERE Doctor_specialization = '$specialization'";
                $result3=mysqli_query($connection,$qurey3);
                if(mysqli_num_rows($result3) > 1)
                {
                    echo 'This specialist already available';
                }
                else
                {
                    $qurey1="INSERT INTO `registeration` (`User_name`, `User_address`, `User_gender`, `User_contact`, `User_catagory`, `Doctor_specialization`, `Doctor_email`, `User_password`, `Conform_password`) VALUES 
                    ('$name', '$address', '$gender', '$contact', '$role', '$specialization', '$email', '$password', '$conform_password')";
                    mysqli_query($connection,$qurey1);
                    if($qurey1)
                    {
                        echo "Successfully Added!!";
                    }
                    else
                    {
                        echo "Unsuccessfully Added!!";
                    }
                }
            }
        }
    }
}


?>
