<?php
session_start(); 

require 'cfg/dbconnect.php';

if (isset($_POST['btn-reg'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $fullname = $_POST['fullname'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($email) && !empty($password) && !empty($phone) && !empty($fullname)) {
        
        $checkEmailStmt = $conn->prepare("SELECT `email` FROM `users` WHERE `email` = ?");
        $checkEmailStmt->bind_param("s", $email);
        $checkEmailStmt->execute();
        $checkEmailStmt->store_result();

        if ($checkEmailStmt->num_rows > 0) {
           
            $_SESSION['emailError'] = "Tài khoản hoặc email đã tồn tại";
            $checkEmailStmt->close();
            header("Location: register.php"); 
            exit();
        } else {
            
            $insertStmt = $conn->prepare("INSERT INTO `users` (`email`, `name`, `password`, `phone`) VALUES (?, ?, ?, ?)");
            $insertStmt->bind_param("ssss", $email, $fullname, $hashed_password, $phone);

            if ($insertStmt->execute()) {
                
                header("Location: nhaHang.php");
                exit();
            } else {
                echo "Lỗi: " . $insertStmt->error;
            }

            $insertStmt->close();
        }

    } else {
        echo "Vui lòng điền đầy đủ thông tin.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="regis.css">
    <style>
        .error-message {
            color: aqua;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
            font-weight: bold;
            font-size: 20px
        }
    </style>
</head>
<body>
<form action="register.php" method="post">
  <div class="container">
    <h1>ĐĂNG KÍ KHÁCH HÀNG THÂN THIẾT</h1>
    <br><br>

    <?php
    if (isset($_SESSION['emailError'])) {
        echo '<div class="error-message">' . $_SESSION['emailError'] . '</div>';
        unset($_SESSION['emailError']); 
    }
    ?>

    <label for="email"><b>Email or Username</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>
    <br>

    <label for="fullname"><b>Full Name</b></label><br>
    <input type="text" placeholder="Enter your Full Name" name="fullname" id="fullname" required>
    <br>

    <label for="phone"><b>Phone Number</b></label><br>
    <input type="text" placeholder="Enter your Phone Number" name="phone" id="phone" required>
    <br><br>

    <input type="submit" class="registerbtn" name="btn-reg" value="ĐĂNG KÝ">
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>

</form>
</body>
</html>
