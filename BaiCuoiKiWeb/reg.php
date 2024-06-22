<?php
require 'cfg/dbconnect.php';

if (isset($_POST['btn-reg'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $fullname = $_POST['fullname'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($email) && !empty($password) && !empty($phone) && !empty($fullname)) {
        $stmt = $conn->prepare("INSERT INTO `web-ck`.`users` (`email`, `name`, `password`, `phone`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $email, $fullname, $hashed_password, $phone);

        if ($stmt->execute()) {
            echo "<script>alert('ĐĂNG KÝ THÀNH CÔNG'); window.location.href = 'nhaHang.php';</script>";
            exit(); 
        } else {
            echo "Lỗi: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Vui lòng điền đầy đủ thông tin.";
    }
}
?>
