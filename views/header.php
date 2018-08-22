<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title><?=(isset($this->title)) ? $this->title : 'Admin'; ?></title>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo URL;?>/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo URL;?>/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="<?php echo URL;?>/assets/images/farmer_wallpaper.png">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="http://localhost/Rice/UserInfor" class="simple-text logo-normal">
            <img src="<?php echo URL;?>/assets/images/icons/login_pic.png" width="90" height="90">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Rice/UserInfor/usera">
              <i class="material-icons">person</i>
              <p>ผู้ดูแลระบบ</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/Rice/UserInfor/rice">
              <i class="material-icons">content_paste</i>
              <p>ข้อมูลข้าว</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/Rice/UserInfor/fertilizer">
              <i class="material-icons">library_books</i>
              <p>ข้อมูลปุ๋ย</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/Rice/UserInfor/soil">
              <i class="material-icons">bubble_chart</i>
              <p>ข้อมูลดิน</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/Rice/UserInfor/weed">
              <i class="material-icons">location_ons</i>
              <p>ข้อมูลศัตรูพืช</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">ระบบจัดการข้อมูลการปลูกข้าว</a>
          </div>
          <!--ขึ้นเป็น menu แบบใหม่เวลาหน้าจอมีขนาดเล็ก-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://localhost/Rice/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="nav-link" href="http://localhost/Rice/"><i class="fa fa-power -off"></i>ลงชื่ออก</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      

  <?php //Session::init(); ?>
</body>

</html>