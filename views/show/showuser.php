<?php
    $shsoildata = Session::get('shuser');
?>
<body>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">แสดงข้อมูลส่วนตัวผู้ดูแลระบบ</h4>
                </div>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">ชื่อผู้ใช้</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $shsoildata['name_user']; ?></p>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">อีเมลล์</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $shsoildata['email_user']; ?></p>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">ชื่อ</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $shsoildata['fist_name']; ?></p>
                            </div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">นามสกุล</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $shsoildata['last_name']; ?></p>
                            </div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">อาชีพ</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $shsoildata['career']; ?></p>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">เพศ</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $shsoildata['sex_user']; ?></p>
                            </div>
                          </div>
                        
                    <!-- ปุ่มกลับ-->
                    <a href="<?php echo URL;?>UserInfor/usera" class="btn btn-success btn-sm" role="button"><i class="material-icons">arrow_back</i>  ย้อนกลับ</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

    <!--   Core JS Files   -->
    <script src="<?php echo URL; ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Chartist JS -->
    <script src="<?php echo URL; ?>/assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo URL; ?>/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo URL; ?>/assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo URL; ?>/assets/demo/demo.js"></script> 
  </body>