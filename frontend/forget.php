<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Forget Password</title>
</head>
<body>
    <div class="main_bar">
        <a href="../index.php" class="button_for_register">Back</a>
    </div>
    <div class="login_form">
        <img src="../pic/logo.png" alt="logo pic" class="logo_pic_on_login_form">
        <h1>Change Password</h1>
        <label for="update_user_name">Email</label><span>*</span><br>
        <input type="text" id="update_user_name" class="get_user_name_field" placeholder="Enter User Name" name="user_name"><br>
        <label for="update_user_password">New Password</label><span>*</span><br>
        <input type="password" id="update_user_password" class="get_user_password_field" placeholder="Enter password" name="user_password"><br>
        <Button id="update-password">Update</button><br>
    </div>

    <script src="../javascript/jquery.js"></script>
</body>
</html>