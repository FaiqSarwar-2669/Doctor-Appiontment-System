<?php
include('../database/database.php');

    $sql="SELECT * FROM `registeration` WHERE User_catagory='User'";
    $total_patient=mysqli_query($connection,$sql);
    $num_total_patient=mysqli_num_rows($total_patient);
    // for doctors
    $sql1="SELECT * FROM `registeration` WHERE User_catagory='Doctor'";
    $total_Doctor=mysqli_query($connection,$sql1);
    $num_total_Doctor=mysqli_num_rows($total_Doctor);

    $sql8="SELECT * FROM `appointments`";
    $total_appointment=mysqli_query($connection,$sql8);
    $appointments=mysqli_num_rows($total_appointment);

    $currentDate = date('Y-m-d');
    $sql9="SELECT * FROM `appointments` WHERE Date=$currentDate";
    $today_appointment=mysqli_query($connection,$sql9);
    $appointment=mysqli_num_rows($today_appointment);

    if(isset($_GET['delete']) && $_GET['delete']=='doctor')
    {
        $id=$_POST['id'];
        $sql2="DELETE FROM `registeration` WHERE User_id=$id";
        if(mysqli_query($connection,$sql2))
        {
            echo "Successfully Deleted!!";
        }
        else
        {
            echo "Connection failed: " . $connection->connect_error;
        }
    }
    if(isset($_GET['delete']) && $_GET['delete']=='patient')
    {
        $id=$_POST['id'];
        $sql5="DELETE FROM `registeration` WHERE User_id=$id";
        if(mysqli_query($connection,$sql5))
        {
            echo "Successfully Deleted!!";
        }
        else
        {
            echo "Connection failed: " . $connection->connect_error;
        }
    }
    if(isset($_GET['load']) && $_GET['load']=='doctor')
    {
        $output='';
        $sql3="SELECT * FROM `registeration` WHERE User_catagory='Doctor'";
        $result=mysqli_query($connection,$sql3);
        if($result)
        {
            $output='<tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Specialization</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>';
                    while($rows=mysqli_fetch_assoc($result))
                    {
                        $output.= '<tr>' .
                            '<td>' . $rows['User_id'] . '</td>' .
                            '<td>' . $rows['User_name'] . '</td>' .
                            '<td>' . $rows['User_address'] . '</td>' .
                            '<td>' . $rows['User_gender'] . '</td>' .
                            '<td>' . $rows['User_contact'] . '</td>' .
                            '<td>' . $rows['Doctor_specialization'] . '</td>' .
                            '<td>' . $rows['Doctor_email'] . '</td>' .
                            '<td><a href="#" class="button delete-doctor" data-id="' . $rows['User_id'] . '">Delete</a>' .
                        '</tr>';
                    }
                    echo $output;
        }
    }
    if(isset($_GET['load']) && $_GET['load']=='patient')
    {
        $output='';
        $sql6="SELECT * FROM `registeration` WHERE User_catagory='User'";
        $result=mysqli_query($connection,$sql6);
        if($result)
        {
            $output='<tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>';
                    while($rows=mysqli_fetch_assoc($result))
                    {
                        $output.= '<tr>' .
                            '<td>' . $rows['User_id'] . '</td>' .
                            '<td>' . $rows['User_name'] . '</td>' .
                            '<td>' . $rows['User_address'] . '</td>' .
                            '<td>' . $rows['User_gender'] . '</td>' .
                            '<td>' . $rows['User_contact'] . '</td>' .
                            '<td><a href="#" class="button delete-patient" data-id="' . $rows['User_id'] . '">Delete</a>' .
                        '</tr>';
                    }
                    echo $output;
        }
    }

    if(isset($_GET['load']) && $_GET['load']=='Appointment')
    {
        $output='';
        $sql7="SELECT * FROM `appointments`";
        $result1=mysqli_query($connection,$sql7);
        if($result1)
        {
            $output='<tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Address</th>
                        <th>User Contact</th>
                        <th>sepcialist</th>
                        <th>Docter</th>
                        <th>Docter Contact</th>
                        <th>Time</th>
                        <th>Date</th>
                    </tr>';
                    while($rows=mysqli_fetch_assoc($result1))
                    {
                        $output.= '<tr>' .
                            '<td>' . $rows['Appointment_Id'] . '</td>' .
                            '<td>' . $rows['User_Name'] . '</td>' .
                            '<td>' . $rows['User_Address'] . '</td>' .
                            '<td>' . $rows['User_Contact'] . '</td>' .
                            '<td>' . $rows['Specialist'] . '</td>' .
                            '<td>' . $rows['Doctor_Name'] . '</td>' .
                            '<td>' . $rows['Doctor_Contact'] . '</td>' .
                            '<td>' . $rows['Available_Slot'] . '</td>' .
                            '<td>' . $rows['Date'] . '</td>' .
                        '</tr>';
                    }
                    echo $output;
        }
    }


    if(isset($_GET['load']) && $_GET['load']=='UserAppointment')
    {
        $output='';
        $user_id=$_POST['id'];
        $sql10="SELECT * FROM `appointments` WHERE User_Name='$user_id'";
        $result=mysqli_query($connection,$sql10);
        if($result)
        {
            $output='<tr>
                        <th>ID</th>
                        <th>Doctor</th>
                        <th>Doctor Contact</th>
                        <th>Specialist</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>';
                    while($rows=mysqli_fetch_assoc($result))
                    {
                        $output.= '<tr>' .
                            '<td>' . $rows['Appointment_Id'] . '</td>' .
                            '<td>' . $rows['Doctor_Name'] . '</td>' .
                            '<td>' . $rows['Doctor_Contact'] . '</td>' .
                            '<td>' . $rows['Specialist'] . '</td>' .
                            '<td>' . $rows['Available_Slot'] . '</td>' .
                            '<td>' . $rows['Date'] . '</td>' .
                            '<td><a href="#" class="button delete-patient-appiontment" data-id="' . $rows['Appointment_Id'] . '">Delete</a>' .
                        '</tr>';
                    }
                    echo $output;
        }
    }
    if(isset($_GET['load']) && $_GET['load']=='DoctorAppointment')
    {
        $output='';
        $Doctor_id=$_POST['id'];
        $sql11="SELECT * FROM `appointments` WHERE Doctor_Name='$Doctor_id'";
        $result=mysqli_query($connection,$sql11);
        if($result)
        {
            $output='<tr>
                        <th>ID</th>
                        <th>Patient</th>
                        <th>Patient Contact</th>
                        <th>Address</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>';
                    while($rows=mysqli_fetch_assoc($result))
                    {
                        $output.= '<tr>' .
                            '<td>' . $rows['Appointment_Id'] . '</td>' .
                            '<td>' . $rows['User_Name'] . '</td>' .
                            '<td>' . $rows['User_Contact'] . '</td>' .
                            '<td>' . $rows['User_Address'] . '</td>' .
                            '<td>' . $rows['Available_Slot'] . '</td>' .
                            '<td>' . $rows['Date'] . '</td>' .
                            '<td><a href="#" class="button delete-doctor-appiontment" data-id="' . $rows['Appointment_Id'] . '">Delete</a>' .
                        '</tr>';
                    }
                    echo $output;
        }
    }


    