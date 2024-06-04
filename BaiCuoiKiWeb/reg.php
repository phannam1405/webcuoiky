<?php
    require 'cfg/dbconnect.php';
    if(isset($_POST['btn-reg'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $fullname=$_POST['fullname'];


        if(!empty($email) && !empty($password) && !empty($phone) && !empty($fullname)){
            
            $sql= "INSERT INTO `web-ck`.`users` (`email`, `name`, `password`, `phone`)
                    VALUES('$email', '$fullname', '$password', '$phone')";
        
            
            if($conn->query($sql) === TRUE){
                echo "ĐĂNG KÝ THÀNH CÔNG";
            } else {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Vui lòng điền đầy đủ thông tin.";
        }
    }
?>
<a href="nhaHang.php">Quay lại trang chủ</a>
