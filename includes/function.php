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

if (isset($_POST['functionName']) && $_POST['functionName'] === 'UserDashboardData') {
    if (function_exists($_POST['functionName'])) {
        call_user_func($_POST['functionName'], $_POST['param1']);
    } else {
        echo "Function not found.";
    }
}
if (isset($_POST['functionName']) && $_POST['functionName'] === 'UserProfileData') {
    if (function_exists($_POST['functionName'])) {
        call_user_func($_POST['functionName'], $_POST['param1']);
    } else {
        echo "Function not found.";
    }
}
if (isset($_POST['functionName']) && $_POST['functionName'] === 'DoctorProfileData') {
    if (function_exists($_POST['functionName'])) {
        call_user_func($_POST['functionName'], $_POST['param1']);
    } else {
        echo "Function not found.";
    }
}
if (isset($_POST['functionName']) && $_POST['functionName'] === 'DoctorDashboardData') {
    if (function_exists($_POST['functionName'])) {
        call_user_func($_POST['functionName'], $_POST['param1']);
    } else {
        echo "Function not found.";
    }
}
function UserDashboardData($id) {

    global $connection;
    $currentDate = date('Y-m-d');
    $total_appointments = 0;
    $today_appointments = 0;

    $sql = "SELECT * FROM appointments WHERE User_Name = $id";
    $result = mysqli_query($connection, $sql);
    $total_appointments = mysqli_num_rows($result);

    $sql1 = "SELECT * FROM appointments WHERE User_Name = $id AND DATE = '$currentDate'";
    $result1 = mysqli_query($connection, $sql1);
    $today_appointments = mysqli_num_rows($result1);

    if ($total_appointments === null) {
        $total_appointments = 0;
    }

    if ($today_appointments === null) {
        $today_appointments = 0;
    }

    $appointmentsData = array(
        'todayAppointments' => $today_appointments,
        'totalAppointments' => $total_appointments
    );

    header('Content-Type: application/json');
    echo json_encode($appointmentsData);

}
function UserProfileData($id) {

    global $connection;
    $name="";
    $address="";
    $gender="";
    $contact="";
    $email="";
    $sql2="SELECT * FROM `registeration` WHERE User_id='$id'";
    $User=mysqli_query($connection,$sql2);
    if($User)
    {
        while($result=mysqli_fetch_assoc($User))
        {
            $name=$result['User_name'];
            $address=$result['User_address'];
            $gender=$result['User_gender'];
            $contact=$result['User_contact'];
            $email=$result['Doctor_email'];
        }
    }
    else
    {
        echo "No record found";
    }
    
    
    $profileData = array(
        'Name' => $name,
        'Address' => $address,
        'Gender' => $gender,
        'Contact' => $contact,
        'Email' =>  $email
    );

    header('Content-Type: application/json');
    echo json_encode($profileData);

}
function DoctorProfileData($id) {

    global $connection;
    $name="";
    $address="";
    $gender="";
    $contact="";
    $email="";
    $specialization="";
    $sql2="SELECT * FROM `registeration` WHERE User_id='$id'";
    $User=mysqli_query($connection,$sql2);
    if($User)
    {
        while($result=mysqli_fetch_assoc($User))
        {
            $name=$result['User_name'];
            $address=$result['User_address'];
            $gender=$result['User_gender'];
            $contact=$result['User_contact'];
            $email=$result['Doctor_email'];
            $specialization=$result['Doctor_specialization'];
        }
    }
    else
    {
        echo "No record found";
    }
    
    
    $profileData = array(
        'Name' => $name,
        'Address' => $address,
        'Gender' => $gender,
        'Contact' => $contact,
        'Email' =>  $email,
        'Specialization' =>  $specialization
    );

    header('Content-Type: application/json');
    echo json_encode($profileData);

}

function DoctorDashboardData($id) {

    global $connection;
    $currentDate = date('Y-m-d');
    $total_appointments = 0;
    $today_appointments = 0;

    $sql = "SELECT * FROM appointments WHERE Doctor_Name = $id";
    $result = mysqli_query($connection, $sql);
    $total_appointments = mysqli_num_rows($result);

    $sql1 = "SELECT * FROM appointments WHERE Doctor_Name = $id AND DATE = '$currentDate'";
    $result1 = mysqli_query($connection, $sql1);
    $today_appointments = mysqli_num_rows($result1);

    if ($total_appointments === null) {
        $total_appointments = 0;
    }

    if ($today_appointments === null) {
        $today_appointments = 0;
    }

    $appointmentsData = array(
        'todayAppointments' => $today_appointments,
        'totalAppointments' => $total_appointments
    );

    header('Content-Type: application/json');
    echo json_encode($appointmentsData);

}
