<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registeration</title>
    <style>
      <?php
        if (isset($_GET["form1"]))
          echo "#form1 { display: block !important; }";
        elseif (isset($_GET["form2"]))
          echo "#form2 { display: block !important; }";
        elseif (isset($_GET["form3"]))
          echo "#form3{ display: block !important; }";
      ?>
    </style>
</head>
<body>


    <div class="forms_area">
        <form id="form1" onsubmit=" return validate_fields_form_1() " method="post" action="/Doctor-Appointment-system/form1.php">
            <h1>Login as an Admin</h1>

            <p class="error">
              <?php
                if (isset($_GET["form1"])) {
                  if (isset($_GET["msg"]))
                    echo $_GET["msg"];
                }
              ?>
            </p>

            <label for="Admin_name">Name</label><span>*</span><br>
            <input type="text" id="Admin_name" placeholder="Enter your name" name="name" required><br><br>
            <label for="Admin_adress">Address</label><span>*</span><br>
            <input type="text" id="Admin_adress" placeholder="Enter your address" name="address" required><br><br>
            <label for="Admin_Gender">Gender</label><span>*</span><br>
            <select name="gender" id="Admin_Gender">
              <option value=""></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select><br><br>
            <label for="Admin_contact">Contact Number</label><span>*</span><br>
            <input type="tel" id="Admin_contact" placeholder="03XX-XXXXXXX" name="contact_number" required><br><br>
            <label for="Admin_email">Email</label><span>*</span><br>
            <input type="email" id="Admin_email" placeholder="Enter your email" name="email" required><br><br>
            <label for="Admin_password">Password</label><span>*</span><br>
            <input type="password" id="Admin_password" placeholder="Create pin or password" name="password" required><br><br>
            <label for="Admin_description">Description</label><br>
            <textarea id="Admin_description" placeholder="Enter about Here...." name="description"></textarea><br><br>
            <input type="submit" >
        </form>
        
        <form id="form2" action="/Doctor-Appointment-system/form2.php" onsubmit=" return validate_fields_form_2() " method="post">
            <h1>Login as a Doctor</h1>

            <p class="error">
              <?php
                if (isset($_GET["form2"])) {
                  if (isset($_GET["msg"]))
                    echo $_GET["msg"];
                }
              ?>
            </p>
            
            <label for="Doctor_name">Name</label><span>*</span><br>
            <input type="text" id="Doctor_name" value="Faiq" placeholder="Enter your name" name="name" required><br><br>
            <label for="Doctor_Specilization">Specilization</label><span>*</span><br>
            <select name="specilization" id="Doctor_Specilization">
                <option value=""></option>
                <option value="Dentist">Dentist</option>
                <option value="Neurologist">Neurologist</option>
                <option value="Dermatologist">Dermatologist</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Orthopedic surgeons">Orthopedic surgeons</option>
                <option value="Urologist">Urologist</option>
                <option value="Psychiatrist">Psychiatrist</option>
              </select><br><br>
            <label for="doctor_adress">Address</label><span>*</span><br>
            <input type="text" value="add" id="doctor_adress" placeholder="Enter your address" required name="address"><br><br>
            <label for="Doctor_gender">Gender</label><span>*</span><br>
            <select name="gender" id="Doctor_gender">
              <option value=""></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select><br><br>
            <label for="Doctor_contact">Contact Number</label><span>*</span><br>
            <input type="tel" value="0434-5484883" id="Doctor_contact" placeholder="03XX-XXXXXXX" name="contact_number"  required><br><br>
            <label for="Doctor_email">Email</label><span>*</span><br>
            <input type="email" value="Faiq@fff.vvv" id="Doctor_email" placeholder="Enter your email" name="email" required><br><br>
            <label for="Doctor_password">Password</label><span>*</span><br>
            <input type="password" value="12345678" id="Doctor_password" placeholder="Create pin or password" name="password" required><br><br>
            <label for="Doctor_description">Description</label><br>
            <textarea id="Doctor_description" value="Faiq" placeholder="Enter about Here...." name="description"></textarea><br><br>
            <input type="submit">
        </form>
        
        <form id="form3"  action="/Doctor-Appointment-system/form3.php" onsubmit=" return validate_fields_form_3() " method="post">
            <h1>Login as an User</h1>
            <label for="User_name">Name</label><span>*</span><br>
            <input type="text" name="name" id="User_name" placeholder="Enter your name" required><br><br>
            <label for="User_adress">Address</label><span>*</span><br>
            <input type="text" name="address" id="User_adress" placeholder="Enter your address" required><br><br>
            <label for="User_Gender">Gender</label><span>*</span><br>
            <select name="gender" id="User_Gender">
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select><br><br>
            <label for="User_contact">Contact Number</label><span>*</span><br>
            <input type="tel" id="User_contact" placeholder="03XX-XXXXXXX" name="contact_number" required><br><br>
            <label for="User_email">Email</label><span>*</span><br>
            <input type="email" id="User_email" placeholder="Enter your email" required name="email"><br><br>
            <label for="User_password">Password</label><span>*</span><br>
            <input type="password" id="User_password" placeholder="Create pin or password" name="password" required><br><br>
            <input type="submit">
        </form>

    </div>
    <div class="btn_class">
        <h3>Choose your Registeration</h3>
        <a href="#" onclick="showForm('form1')" class="form_btn form1">Admin</a>
        <a href="#" onclick="showForm('form2')" class="form_btn form2">Doctor</a>
        <a href="#" onclick="showForm('form3')" class="form_btn form3">User</a>
    </div>

    

    
    <script src="javascript.js"></script>
           
</body>
</html>
