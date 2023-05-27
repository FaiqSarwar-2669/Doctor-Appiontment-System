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

$error="";
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
    $error='Enter the name!';
}
else if (!preg_match("/^[a-zA-Z ]*$/", $name)) 
{
    $error='Enter the name in only letter!';
}
else if(empty($address))
{
    $error='Enter the address!';
}
else if(empty($gender))
{
    $error='Enter the gender!';
}
else if(!preg_match("/^03[0-9]{2}-[0-9]{7}$/", $contact))
{
    $error='Please follow this pattern 03XX-XXXXXXX!';
}
else if(empty($role))
{
    $error='Enter the category!';
}
else if(empty($password)||strlen($password)>8)
{
    $error='Your password lenght must be Eight or less!';
}
else if(empty($conform_password)||strlen($conform_password)>8)
{
    $error='Your password lenght must be Eight or less!';
}
else if($password!=$conform_password)
{
    $error='Password does not match!';
}
if (!empty($error)) 
{
    header("Location: ../frontend/registration_page.php?error=$error");
    exit;
}

$sql="SELECT * FROM registeration WHERE User_contact = '$contact'";
$output=mysqli_query($connection,$sql);
$num=mysqli_num_rows($output);
if($num>0)
{
    $error="This number is already exist try to another one";
    if (!empty($error)) 
    {
        header("Location: ../frontend/registration_page.php?error=$error");
        exit;
    }
}
else
{
    if($role=='User')
    {
        if(empty($email))
        {
            $error='enter the email!';
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error='enter the valid email!';
        }

        if (!empty($error)) 
        {
            header("Location: ../frontend/registration_page.php?error=$error");
            exit;
        }
        $qurey="INSERT INTO `registeration` (`User_name`, `User_address`, `User_gender`, `User_contact`, `User_catagory`,`Doctor_email`, `User_password`, `Conform_password`) VALUES 
        ('$name', '$address', '$gender', '$contact', '$role', '$email', '$password', '$conform_password')";
        mysqli_query($connection,$qurey);
        if($qurey)
        {
            header('Location: ../index.php');
            exit;
        }
        else
        {
            header('Location: ../frontend/registration_page.php');
            exit;
        }
    }
    else if($role=='Doctor')
    {
        if(empty($specialization))
        {
            $error='Enter the Specilaization!';
        }
        else if(empty($email))
        {
            $error='enter the email!';
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error='enter the valid email!';
        }

        if (!empty($error)) 
        {
            header("Location: ../frontend/registration_page.php?error=$error");
            exit;
        }

        $qurey3="SELECT COUNT(*) FROM registeration WHERE Doctor_specialization = '$specialization'";
        $result3=mysqli_query($connection,$qurey3);
        if($result3 > 1)
        {
            $error='This specialist already added';
        }
        else
        {
            $qurey1="INSERT INTO `registeration` (`User_name`, `User_address`, `User_gender`, `User_contact`, `User_catagory`, `Doctor_specialization`, `Doctor_email`, `User_password`, `Conform_password`) VALUES 
            ('$name', '$address', '$gender', '$contact', '$role', '$specialization', '$email', '$password', '$conform_password')";
            mysqli_query($connection,$qurey1);
            if($qurey1)
            {
                header('Location: ../index.php');
                exit;
            }
            else
            {
                header('Location: ../frontend/registration_page.php');
                exit;
            }
        }
        if (!empty($error)) 
        {
            header("Location: ../frontend/registration_page.php?error=$error");
            exit;
        }
    }
}

if (!empty($error)) 
{
    header("Location: ../index.php?error=$error");
    exit;
}


?>
