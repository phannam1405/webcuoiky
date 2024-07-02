<?php
include 'top_menu.php';
include 'cfg/dbconnect.php';

session_start(); 
$email = $err_msg = "";

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    $sql = "SELECT * FROM `web-ck`.`users` WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();  // Lấy thông tin người dùng.
            $hashed_password = $row['password'];
            
            if (password_verify($password, $hashed_password)) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['userid'] = $email;
                header("Location: nhaHang.php");
                exit();
            } else {
                $err_msg = "Email hoặc mật khẩu không đúng.";
            }
        } else {
            $err_msg = "Email hoặc mật khẩu không đúng.";
        }
    } else {
        $err_msg = "Đã xảy ra lỗi.";
    }

    $stmt->close();
}
?>
<br>
<form class="form-1" action="login.php" method="post">
    <h2 style="color: black">Login Form</h2>
    <?php if ($err_msg != ""): ?>
        <p class="err-msg"><?php echo $err_msg; $err_msg = ""; ?></p>
    <?php endif; ?>

    <div class="col-md-12 form-group">
        <label>Email Id</label>
        <input type="text" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Enter your Email Id" required>
    </div>

    <div class="col-md-12 form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
    </div>

    <div style="color: black" class="col-md-12 form-group">
        <input type="checkbox" class="check" onclick="togglePwd()">Show Password
    </div>
    <div class="col-md-12 form-group text-right">
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
    </div>
</form>

<script>
function togglePwd() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
