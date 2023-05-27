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
    <title>User Dashbord</title>

</head>
<body>
    <div class="first_container">
        <div class="side_bar">
            <div class="dashboard_name">
                <h2>Patient</h2>
            </div>
            <div class="dashboard_side_bar">
                <span><i class="fa-solid fa-gauge"></i>
                <a href="#" onclick="GoToPannel('dashboard')" data-id="<?php echo $id ?>" id="user-dashboard">Dashbord</a></span>
            </div>
            <div class="patienr_side_bar">
                <span><i class="fa-solid fa-bed"></i>
                <a href="#" onclick="GoToPannel('patient')" id="user-see-appiontment" data-id="<?php echo $id ?>">See Appoint.</a></span>
            </div>
            <div class="appointment_side_bar">
                <span><i class="fa-regular fa-calendar-check"></i>
                <a href="#" onclick="GoToPannel('appointment')">Appointments</a></span>
            </div>
            <div class="profile_side_bar">
                <span><i class="fa-solid fa-user"></i>
                <a href="#" onclick="GoToPannel('profile')" id="User-Profile" data-id="<?php echo $id ?>">Profile</a></span>
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
                    <div class="admin-penel-content" id="User-dashboard-contant">
                        <div class="today-appiontments">
                            <label>Today Appiontments</label><br>
                            <span class="admin-boxes">
                                <label id="user-today-appointment"></label>
                                <i class="fa-regular fa-calendar-check admin-page-icon"></i>
                            </span>
                        </div>
                        <div class="total-appiontments">
                            <label>Appointments Till Date</label><br>
                            <span class="admin-boxes">
                                <label id="user-total-appointment"></label>
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
                    <div class="admin-pannel-name">
                        <h2>Appointment Detail</h2>
                    </div>
                    <div class="Doctor">
                        <table id="see-user-appointment">

                        </table>
                    </div>
                </div>
                <div class="appointment-pannel pannel-hide" id="admin-pannel-for-appiontment">
                    <div class="admin-pannel-name">
                        <h2>Appointment</h2>
                    </div>
                    <div class="User-Appointment-pannel">
                        <label for="Admin_name">Specialist:</label><br>
                        <select id="select_specialization" name="specialization">
                            <option value="">--Select Specialist--</option>
                            <option value="Cardiologist">Cardiologist</option>
                            <option value="Dermatologist">Dermatologist</option>
                            <option value="Endocrinologist">Endocrinologist</option>
                            <option value="Gastroenterologist">Gastroenterologist</option>
                            <option value="Neurologist">Neurologist</option>
                            <option value="Ophthalmologist">Ophthalmologist</option>
                            <option value="Orthopedic Surgeon">Orthopedic Surgeon</option>
                            <option value="Pediatrician">Pediatrician</option>
                            <option value="Psychiatrist">Psychiatrist</option>
                            <option value="Radiologist">Radiologist</option>
                            <option value="Urologist">Urologist</option>
                        </select><br><br>
                        <label for="Admin_name">Available Doctors:</label><br>
                        <select id="selected-doctor" name="Doctor_names">
                        <option value="">--Select Doctor--</option>
                        </select><br><br>
                        <label for="Admin_name">Available Slots:</label><br>
                        <select id="time-slot" name="availabel_slots">
                            <option value="">--Select Available Slots--</option>
                            <option value="10am-11am">10am-11am</option>
                            <option value="11am-12pm">11am-12pm</option>
                            <option value="12pm-1pm">12pm-1pm</option>
                            <option value="1pm-2pm">1pm-2pm</option>
                            <option value="2pm-3pm">2pm-3pm</option>
                            <option value="3pm-4pm">3pm-4pm</option>
                        </select><br><br>
                        <button class="save-form" id="save-appointment" data-id="<?php echo $id ?>">Save</button>
                    </div>
                </div>
                <div class="profile-pannel pannel-hide" id="admin-pannel-for-profile">
                    <div class="admin-pannel-name">
                        <h2>Profile</h2>
                    </div>
                    <div class="User-profile-pannel">
                        <label for="User_name">Name:</label><br>
                        <input type="text" id="User_name" name="User_name"  readonly><br><br>
                        <label for="User_address">Address:</label><br>
                        <input type="text" id="User_address" name="User_address"  readonly><br><br>
                        <label for="User_gender">Gender:</label><br>
                        <input type="text" id="User_gender" name="User_gender"  readonly><br><br>
                        <label for="User_contact">Contact:</label><br>
                        <input type="text" id="User_contact" name="User_contact"  readonly><br><br>
                        <label for="User_email">Email:</label><br>
                        <input type="text" id="User_email" name="User_email"  readonly><br><br>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="../javascript/javascript2.js"></script>
    <script src="../javascript/jquery.js"></script>
</body>
</html>