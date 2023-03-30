<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c18972abce.js" crossorigin="anonymous"></script>
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
                <a href="#" onclick="GoToPannel('dashboard')">Dashbord</a></span>
            </div>
            <div class="doctor_side_bar">
                <span><i class="fa-solid fa-user-doctor"></i>
                <a href="#" onclick="GoToPannel('doctor')">Doctor</a></span>
            </div>
            <div class="patienr_side_bar">
                <span><i class="fa-solid fa-bed"></i>
                <a href="#" onclick="GoToPannel('patient')">Patient</a></span>
            </div>
            <div class="appointment_side_bar">
                <span><i class="fa-regular fa-calendar-check"></i>
                <a href="#" onclick="GoToPannel('appointment')">Appointments</a></span>
            </div>
            <div class="profile_side_bar">
                <span><i class="fa-solid fa-user"></i>
                <a href="#" onclick="GoToPannel('profile')">Profile</a></span>
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
                            <span>
                                <label>5</label>
                                <i class="fa-regular fa-calendar-check admin-page-icon"></i>
                            </span>
                        </div>
                        <div class="last-seven-day-appiontments">
                            <label>Last Seven Days Appointments</label><br>
                            <span>
                                <label>5</label>
                                <i class="fa-regular fa-calendar-check admin-page-icon"></i>
                            </span>
                        </div>
                        <div class="total-number-of-doctors">
                            <label>Total Doctors</label><br>
                            <span>
                                <label>5</label>
                                <i class="fa-solid fa-user-doctor admin-page-icon doctor-icon"></i></i>
                            </span>
                        </div>
                        <div class="total-appiontments">
                            <label>Appointments Till Date</label><br>
                            <span>
                                <label>5</label>
                                <i class="fa-regular fa-calendar-check admin-page-icon"></i>
                            </span>
                    
                        </div>
                        <div class="total-number-of-patients">
                            <label>Total Register Patients</label><br>
                            <span>
                                <label>5</label>
                                <i class="fa-solid fa-bed admin-page-icon patient-icon"></i>
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
                    <div class="admin-pannel-name">
                        <h2>Patient</h2>
                    </div>
                </div>
                <div class="appointment-pannel pannel-hide" id="admin-pannel-for-appiontment">
                    <div class="admin-pannel-name">
                        <h2>Appointment</h2>
                    </div>
                </div>
                <div class="profile-pannel pannel-hide" id="admin-pannel-for-profile">
                    <div class="admin-pannel-name">
                        <h2>Profile</h2>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <script src="../javascript/javascript2.js"></script>
</body>
</html>