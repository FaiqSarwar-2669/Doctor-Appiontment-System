<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Doctor Appointment</title>
</head>
<body>
    <div class="main_bar">
        <a href="registration_page.php" class="button_for_register">Register</a>
    </div>
    <div class="login_form">
        <img src="pic/logo.png" alt="logo pic" class="logo_pic_on_login_form">
        <h1>Login Here</h1>
        <form action="">
            <label for="user_name">User Name</label><span>*</span><br>
            <input type="text" id="user_name" class="get_user_name_field" placeholder="Enter User Name" required><br>
            <label for="user_password">Password</label><span>*</span><br>
            <input type="password" id="user_password" class="get_user_password_field" placeholder="Enter password" required><br>
            <input type="submit" value="Log In"><br>
        </form>
        <a href="#">Forget Password</a><br>
    </div>
</body>
</html>