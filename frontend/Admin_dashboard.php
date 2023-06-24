<?php
include('../backend/admin-data.php');
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
    <title>Admin Dashbord</title>
</head>
<body>
    <div class="first_container">
        <div class="side_bar">
            <div class="dashboard_name">
                <h2>Admin</h2>
            </div>
            <div class="dashboard_side_bar">
                <span><i class="fa-solid fa-gauge"></i>
                <a href="#" onclick="GoToPannel('dashboard')" id="admin-reload">Dashbord</a></span>
            </div>
            <div class="doctor_side_bar">
                <span><i class="fa-solid fa-user-doctor"></i>
                <a href="#" onclick="GoToPannel('doctor')" id="admin-doctor">Doctor</a></span>
            </div>
            <div class="patienr_side_bar">
                <span><i class="fa-solid fa-bed"></i>
                <a href="#" onclick="GoToPannel('patient')" id="admin-patient">Patient</a></span>
            </div>
            <div class="appointment_side_bar">
                <span><i class="fa-regular fa-calendar-check"></i>
                <a href="#" onclick="GoToPannel('appointment')" id="admin-appointment">Appointments</a></span>
            </div>
        </div>
        <div class="nav_bar">
            <h2>Online Doctor Appointment System</h2>
            <div class="logout_bar">
                <a href="../index.php">Log Out</a>
            </div>
            <div class="pannels">
                <div class="dashbord-pannel" id="admin-pannel-for-dashbord">
                    <div class="admin-pannel-name">
                        <h2>Dashbord</h2>
                    </div>
                    <div class="admin-penel-content">
                        <div class="today-appiontments">
                            <label>Today Appiontments</label><br>
                            <span class="admin-boxes">
                                <label><?php echo $appointment ?></label>
                                <i class="fa-regular fa-calendar-check admin-page-icon"></i>
                            </span>
                        </div>
                        <div class="total-number-of-doctors">
                            <label>Total Doctors</label><br><br>
                            <span class="admin-boxes">
                                <label><?php echo $num_total_Doctor ?></label>
                                <i class="fa-solid fa-user-doctor admin-page-icon"></i></i>
                            </span>
                        </div>
                        <div class="total-appiontments">
                            <label>Appiontments Till Date</label><br>
                            <span class="admin-boxes">
                                <label><?php echo $appointments ?></label>
                                <i class="fa-regular fa-calendar-check admin-page-icon"></i>
                            </span>
                        </div>
                        <div class="total-number-of-patients">
                            <label>Total Register Patients</label><br>
                            <span class="admin-boxes">
                                <label><?php echo $num_total_patient ?></label>
                                <i class="fa-solid fa-bed admin-page-icon"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="doctor-pannel pannel-hide" id="admin-pannel-for-doctor">
                    <div class="admin-pannel-name">
                        <h2>Doctor</h2>
                    </div>
                    <div class="Doctor">
                            <table id="doctor-record">
                                
                            </table>
                        </div>
                </div>
                <div class="patient-pannel pannel-hide" id="admin-pannel-for-patient">
                    <div class="admin-pannel-name">
                        <h2>Patient</h2>
                    </div>
                    <div class="Doctor">
                        <table id="patient-record">
                            
                        </table>
                    </div>
                </div>
                <div class="appointment-pannel pannel-hide" id="admin-pannel-for-appiontment">
                    <div class="admin-pannel-name">
                        <h2>Appointment</h2>
                    </div>
                    <div class="Doctor">
                    <table id="appointment-record">
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../javascript/javascript2.js"></script>
    <script src="../javascript/jquery.js"></script>
</body>
</html>