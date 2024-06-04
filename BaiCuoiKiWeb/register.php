<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="regis.css"/>
</head>
<body>
<form action="reg.php"  method="post">
  <div class="container">
    <h1 >ĐĂNG KÍ KHÁCH HÀNG THÂN THIẾT</h1>
    <br>
    <br>

    <label for="email"><b>Email or Username</b></label>
    <br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
  <br>
    <label for="psw"><b>Password</b></label>
    <br>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>
    <br>
    <label for="psw-repeat"><b>Full Name</b></label>
    <br>
    <input type="text" placeholder="Enter your Full Name" name="fullname" id="fullname" required>
    <br>
    <label for="psw-repeat"><b>Phone Number</b></label>
    <br>
    <input type="text" placeholder="Enter your Phone Number" name="phone" id="phone" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit" class="registerbtn" name="btn-reg" value="ĐĂNG KÝ">
  </div>

  <div class="container signin">
  <p>Already have an account? <a href="login.php">Sign in</a>.</p>
</div>

</form>
</body>
</html>