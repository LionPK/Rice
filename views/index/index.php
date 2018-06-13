<?php  
session_start();
$message = Session::get('Message');
?>
<html class="no-js" lang=""><!--<![endif]--><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

   <link rel="stylesheet" href="<?php echo URL; ?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo URL; ?>public/scss/style.css">
    <link href="<?php echo URL; ?>public/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">

	<div class="card-body">
		<?php
			echo $message;
			session_destroy();
		?>
                                        
    </div>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <!-- <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a> -->
                </div>
                <div class="login-form">
                    <form action="index/run" method="post">
                        <div class="form-group">
                            <label>ขื่อผู้ใช้</label>
                            <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" id="login_username" name="login_username">
                        </div>
                        <div class="form-group">
                            <label>รหัสผ่าน</label>
                            <input type="password" class="form-control" placeholder="รหัสผ่าน" id="password" name="password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> จำรหัสผ่าน
                            </label>
                            

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">เข้าสู่ระบบ</button>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo URL; ?>public/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo URL; ?>public/js/popper.min.js"></script>
    <script src="<?php echo URL; ?>public/js/plugins.js"></script>
    <script src="<?php echo URL; ?>public/js/main.js"></script>




</body></html>
