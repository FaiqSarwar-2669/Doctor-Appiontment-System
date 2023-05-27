<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c18972abce.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/style-sheet-2.css">
    <title>Doctor Dashbord</title>
</head>
<body>
    <div class="first_container">
        <div class="side_bar">
            <div class="dashboard_name">
                <h2>Doctor</h2>
            </div>
            <div class="dashboard_side_bar">
                <span><i class="fa-solid fa-gauge"></i>
                <a href="#" onclick="GoToPannel('dashboard')" id="Doctor-dashboard" data-id="<?php echo $id ?>">Dashbord</a></span>
            </div>
            <div class="appointment_side_bar">
                <span><i class="fa-regular fa-calendar-check"></i>
                <a href="#" onclick="GoToPannel('appointment')" id="load-doctor-appointment" data-id="<?php echo $id ?>">Appointments</a></span>
            </div>
            <div class="profile_side_bar">
                <span><i class="fa-solid fa-user"></i>
                <a href="#" onclick="GoToPannel('profile')" id="DoctorProfile" data-id="<?php echo $id ?>">Profile</a></span>
            </div>
        </div>
        <div class="nav_bar">
            <h2>Online Doctor Appointment System</h2>
            <div class="logout_bar">
                <a href="../index.php">Log Out</a>
            </div>
            <div class="pannels">
                <div class="dashbord-pannel pannel-hide" id="admin-pannel-for-dashbord">
                    <div class="admin-pannel-name">
                        <h2>Dashbord</h2>
                    </div>
                    <div class="admin-penel-content">
                        <div class="today-appiontments">
                            <label>Today Appiontments</label><br>
                            <span class="admin-boxes">
                                <label id="Doctor-today-appointment"></label>
                                <i class="fa-regular fa-calendar-check admin-page-icon"></i>
                            </span>
                        </div>
                        <div class="total-appiontments">
                            <label>Appointments Till Date</label><br>
                            <span class="admin-boxes">
                                <label id="Doctor-total-appointment"></label>
                                <i class="fa-regular fa-calendar-check admin-page-icon"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="doctor-pannel pannel-hide" id="admin-pannel-for-doctor">
                    <div class="admin-pannel-name">
                        <h2>Doctor</h2>
                    </div>
                </div>
                <div class="patient-pannel pannel-hide" id="admin-pannel-for-patient">
                </div>
                <div class="appointment-pannel pannel-hide" id="admin-pannel-for-appiontment">
                    <div class="admin-pannel-name">
                        <h2>Appointment</h2>
                    </div>
                    <div class="Doctor">
                        <table id="Doctor-appointment">
                            
                        </table>
                    </div>
                </div>
                <div class="profile-pannel pannel-hide" id="admin-pannel-for-profile">
                    <div class="admin-pannel-name">
                        <h2>Profile</h2>
                    </div>
                    <div class="two-panel">
                        <div class="Doctor-profile-pannel">
                            <label for="Doctor_name">Name:</label><br>
                            <input type="text" id="Doctor_name" readonly><br><br>
                            <label for="Doctor_address">Address:</label><br>
                            <input type="text" id="Doctor_address" readonly><br><br>
                            <label for="Doctor_Gender">Gender:</label><br>
                            <input type="text" id="Doctor_Gender" readonly><br><br>
                        </div>
                        <div class="Doctor-profile-pannel part-2">
                            <label for="Doctor_Contact">Contact:</label><br>
                            <input type="text" id="Doctor_Contact" readonly><br><br>
                            <label for="Doctor_Email">Email:</label><br>
                            <input type="text" id="Doctor_Email" readonly><br><br>
                            <label for="Doctor_Specialization">Specialization:</label><br>
                            <input type="text" id="Doctor_Specialization" readonly><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="../javascript/jquery.js"></script>
    <script src="../javascript/javascript2.js"></script>
</body>
</html>