<?php
include('../database/database.php');

if(isset($_GET['check']) && $_GET['check']=='doctor')
{
    $output='';
    $value = $_POST['category_id'];
    $sql="SELECT User_id,User_name FROM `registeration` WHERE Doctor_specialization='$value'";
    $result=mysqli_query($connection,$sql);
    if($result)
    {
        $rowCount = mysqli_num_rows($result);
        if($rowCount>0)
        {
            $output='<option value="">--Select Doctor--</option>';
            while($result1=mysqli_fetch_assoc($result))
            {
                $output.='<option value='.$result1['User_id'].'>'.$result1['User_name'].'</option>';
            }
        }
        else
        {
            echo "1";
        }
        
    }
    else
    {
        $output= "Connection failed: " . $connection->connect_error;
    }
    echo $output;
    
}

if(isset($_GET['save']) && $_GET['save']=='appiontment')
{
    $currentDate = date('Y-m-d');
    $user_id=$_POST['id'];
    $specialization=$_POST['specialization'];
    $doctor_id=$_POST['doctor'];
    $time_slot=$_POST['time'];
    if(empty($specialization))
    {
        echo "Select the Specialist first!!!";
    }
    else if(empty($doctor_id))
    {
        echo "Select the Doctor!!!";
    }
    else if(empty($time_slot))
    {
        echo "Select the time slot!!";
    }
    else
    {
        $User_address="";
        $User_contact="";
        $Doctor_contact="";

        if(!empty($time_slot))
        {
            $sql5="SELECT Doctor_Name FROM `appointments` WHERE
            Specialist='$specialization' and Available_Slot='$time_slot' and Date='$currentDate'";
            $result4=mysqli_query($connection,$sql5);
            if(mysqli_num_rows($result4)>0)
            {
                echo $time_slot." already booked Today !!!";
            }
            else
            {
                $sql2="SELECT User_address,User_contact FROM registeration WHERE User_id=$user_id";
                $result2=mysqli_query($connection,$sql2);
                $sql3="SELECT User_contact FROM `registeration` WHERE User_id=$doctor_id";
                $result3=mysqli_query($connection,$sql3);
                if($result2)
                {
                    while($row=mysqli_fetch_assoc($result2))
                    {
                        $User_address=$row['User_address']; 
                        $User_contact=$row['User_contact']; 
                    }
                }
                else
                {
                    echo "Connection failed: " . $connection->connect_error;
                }
                if($result3)
                {
                    while($row=mysqli_fetch_assoc($result3))
                    {
                        $Doctor_contact=$row['User_contact']; 
                    }
                }
                else
                {
                    echo "Connection failed: " . $connection->connect_error;
                }
                if(!empty($User_address) && !empty($User_contact) && !empty($Doctor_contact))
                {
                    $sql4="INSERT INTO `appointments` (`User_Name`, `User_Address`, `User_Contact`, `Specialist`, `Doctor_Name`, `Doctor_Contact`, `Available_Slot`)
                    VALUES ('$user_id', '$User_address', '$User_contact', '$specialization', '$doctor_id', '$Doctor_contact', '$time_slot')";
                    if(mysqli_query($connection,$sql4))
                    {
                        echo "Appointment Booked Succesfully!!";
                    }
                    else
                    {
                        echo "Connection failed: " . $connection->connect_error;
                    }
                }
            }
        }
    }
}

if(isset($_GET['delete']) && $_GET['delete']=='user-appointment')
{
    $currentDate = date('Y-m-d');
    $appointment_id=$_POST['id'];
    $sql16="SELECT Date FROM `appointments` WHERE Appointment_Id=$appointment_id";
    $result5=mysqli_query($connection,$sql16);
    if($result5)
    {
        $date="";
        while($row=mysqli_fetch_assoc($result5))
        {
            $date=$row['Date'];
        }

        if($currentDate==$date)
        {
            $sql17="DELETE FROM `appointments` WHERE Appointment_Id=$appointment_id";
            if(mysqli_query($connection,$sql17))
            {
                echo "Successfully Deleted!!";
            }
            else
            {
                echo "Connection failed: " . $connection->connect_error;
            }
        }
        else
        {
            echo "Time exceed, you cannot \ndelete it now!!";
        }
    }
    else
    {
        echo "Connection failed: " . $connection->connect_error;
    }
}
if(isset($_GET['delete']) && $_GET['delete']=='doctor-appointment')
{
    $currentDate = date('Y-m-d');
    $appointment_id=$_POST['id'];
    $sql19="SELECT Date FROM `appointments` WHERE Appointment_Id=$appointment_id";
    $result6=mysqli_query($connection,$sql19);
    if($result6)
    {
        $date="";
        while($row=mysqli_fetch_assoc($result6))
        {
            $date=$row['Date'];
        }

        if($currentDate==$date)
        {
            $sql18="DELETE FROM `appointments` WHERE Appointment_Id=$appointment_id";
            if(mysqli_query($connection,$sql18))
            {
                echo "Successfully Deleted!!";
            }
            else
            {
                echo "Connection failed: " . $connection->connect_error;
            }
        }
        else
        {
            echo "Time exceed, you cannot \ndelete it now!!";
        }
    }
    else
    {
        echo "Connection failed: " . $connection->connect_error;
    }
}