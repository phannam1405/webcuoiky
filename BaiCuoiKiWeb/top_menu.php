<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="">
<title>Login</title>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
<link rel="stylesheet" href="nhaHang.css" />
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/validation.js"></script>
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-sm bg-light navbar-light">
        <a style="width: 100px; height: 70px" href="nhaHang.php">       <img
          class="khung"
          style="width: 70%"
          src="https://banoca.com/wp-content/uploads/2021/03/logo-nha-hang.jpg"
          alt=""
        /></a>

        <!-- Toggler/collapsible Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div
          class="collapse navbar-collapse justify-content-center"
          id="collapsibleNavbar"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link hover-underline" href="nhaHang.php#thucdon"><b>THỰC ĐƠN</b></a>
            </li>
            <li class="nav-item hover-underline">
              <a class="nav-link" href="nhaHang.php#about"><b>GIỚI THIỆU</b></a>
            </li>
            <li class="nav-item hover-underline">
              <a class="nav-link" href="dauBep.php"><b>ĐẦU BẾP</b></a>
            </li>
            <li class="nav-item hover-underline">
              <a class="nav-link" href="nhaHang.php#footer"><b>LIÊN HỆ</b></a>
            </li>
            <li class="nav-item hover-underline">
              <a class="nav-link" href="table.html"><b>ĐẶT BÀN</b></a>
            </li>
            <li class="nav-item hover-underline">
              <a class="nav-link" href="register.php"><b>ĐĂNG KÝ</b></a>
            </li>
            <?php if (isset($_SESSION['name'])) {  ?>
          <li class="nav-item hover-underline">
            <div class="nav-link logout">
              <a href="logout.php"><i class="fa fa-sign-out"></i> ĐĂNG XUẤT</a>
            </div>
          </li>
          <?php } else { ?>
          <li class="nav-item hover-underline">
            <a  class="nav-link" id="login" href="login.php"><i class="fa fa-sign-in"></i> ĐĂNG NHẬP</a>
          </li>
          <?php } ?>
          <li class="nav-item hover-underline">
            <div class="nav-link user">
              <?php if (isset($_SESSION['name'])) echo '<span class="welcome">Welcome   </span>'.$_SESSION['name']; ?>
            </div>
          </li>
          </ul>
        </div>
      </nav>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <div class="container-fluid content-containerr text-light">
