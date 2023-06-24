<?php 
include 'includes/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Doctor Appointment</title>
</head>
<body>
    <?php
        if(isset($_GET['success']))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Holy guacamole!</strong> You should check in on some of those fields below.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          ';
        } 
    ?>
    <div class="main_bar">
        <a href="frontend/registration_page.php" class="button_for_register">Register</a>
    </div>
    <div class="login_form">
        <img src="pic/logo.png" alt="logo pic" class="logo_pic_on_login_form">
        <h1>Login Here</h1>
        <form action="backend/login.php" method="POST">
            <p class="error">
               <?php
                if(isset($_GET['error']))
                    echo $_GET['error'];
               ?> 
            </p>
            <label for="user_name">Email</label><span>*</span><br>
            <input type="text" id="user_name" class="get_user_name_field" placeholder="Enter User Name" name="user_name"><br>
            <label for="user_password">Password</label><span>*</span><br>
            <input type="password" id="user_password" class="get_user_password_field" placeholder="Enter password" name="user_password"><br>
            <input type="submit" value="Log In"><br>
        </form>
        <a href="./frontend/forget.php">Forget Password</a><br>
    </div>
</body>
</html>