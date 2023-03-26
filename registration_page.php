<!-- <?php


?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registeration</title>
</head>
<body>
    <div class="forms_area">
        <form id="form1" onsubmit=" return validate_fields_form() " method="post" action="/Doctor-Appointment-system/form1.php">
            <h1>Sign Up Form</h1>
            <p class="error">
              <?php
                if(isset($_GET['error']))
                {
                  echo "<style>#form1{display: block;}</style>";
                  echo $_GET['error'];
                }
              ?>
            </p>
            <label for="Admin_name">Name</label><span>*</span><br>
            <input type="text" id="Admin_name" placeholder="Enter your name" name="name" required value="f"><br><br>
            <label for="Admin_adress">Address</label><span>*</span><br>
            <input type="text" id="Admin_adress" placeholder="Enter your address" name="address" required value="f"><br><br>
            <label for="Admin_Gender">Gender</label><span>*</span><br>
            <select name="gender" id="Admin_Gender">
              <option value="f"></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select><br><br>
            <label for="Admin_contact">Contact Number</label><span>*</span><br>
            <input type="tel" id="Admin_contact" placeholder="03XX-XXXXXXX" name="contact_number" required value="0347-2669712"><br><br>
            <label for="Admin_contact">Select Category</label><span>*</span><br>
            <select name="selection" id="Admin_selection" onchange="Show_Selected_Inputs()">
              <option value=""></option>
              <option value="User">User</option>
              <option value="Doctor">Doctor</option>
            </select><br><br>
            <div class="doctor_fields" id="doctor_fields">
              <label for="select_specialization">Specialization </label><span>*</span>
              <select id="select_specialization" name="specialization">
                <option value="painkiller"></option>
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
              </select>
              <br><br>
              <label for="Admin_email">Email</label><span>*</span><br>
              <input type="email" id="Admin_email" placeholder="Enter your email" name="email" required value="john.doe@example.com"><br><br>
            </div>
              <label for="Admin_password">Password</label><span>*</span><br>
              <input type="password" id="Admin_password" placeholder="Create pin or password" name="password" required value="7861234"><br><br>
              <label for="Admin_password_conform">Conform Password</label><span>*</span><br>
              <input type="password" id="Admin_password_conform" placeholder="Re-type pin or password" name="conform_password" required value="7861234"><br><br>
            <div class="user_fields" id="user_fields">
            </div>
            <input type="submit">
        </form>
    </div>
    <div class="btn_class">
      <a href="#" onclick="showForm()" class="form_btn form1">Open Form</a>
    </div>
    <script src="javascript.js"></script>         
</body>
</html>
