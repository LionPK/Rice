<?php $Datalogin = Session::get('edituser'); ?>
<!-- <body> -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">แก้ไขข้อมูลผู้ดูแลระบบ</h4>
                </div>
                <div class="card-body">
                    <form action="afteredituser1" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <!-- <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class="bmd-label-floating">
                                รหัสผู้ใช้
                              </label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="id" name="id" placeholder="Text" value="<?php echo $Datalogin['id_userdata']; ?>" class="form-control"readonly><small class="form-text text-muted" ></small>
                            </div>
                          </div> -->

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Email address</label>
                              <input type="text" id="id" name="id" value="<?php echo $Datalogin['id_userdata']; ?>" class="form-control"><small class="form-text text-muted" ></small>
                            </div>
                          </div>

                           <!-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">ชื่อผู้ใช้</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="user" name="user" placeholder="Text" value="<?php echo $Datalogin['name_user']; ?>" class="form-control "readonly><small class="form-text text-muted"></small></div>
                          </div> -->
<!--                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">อีเมลล์</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="อีเมลล์" value="<?php echo $Datalogin['email_user']; ?>" class="form-control"><small class="form-text text-muted">กรุณากรอกอีเมลล์</small></div>
                          </div> -->

                            <!-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">ชื่อ</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Text" value="<?php echo $Datalogin['fist_name']; ?>" class="form-control"><small class="form-text text-muted">กรุณากรอกชื่อ</small></div>
                          </div> -->

                           <!-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">นามสกุล</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="last" name="last" placeholder="Text" value="<?php echo $Datalogin['last_name']; ?>" class="form-control"><small class="form-text text-muted">กรุณากรอก</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">อาชีพ</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="career" name="career" placeholder="Text" value="<?php echo $Datalogin['career']; ?>" class="form-control" ><small class="form-text text-muted"></small></div>
                          </div> -->
                         
                           <!-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">เพศ</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="sex" name="sex" placeholder="Text" value="<?php echo $Datalogin['sex_user']; ?>" class="form-control" readonly><small class="form-text text-muted"></small></div>
                          </div>

                      </div>
                      <div class="card-footer">
                       <center>
                          <button type="submit" class="btn btn-success btn-sm"><i class="material-icons">save_alt</i>  บันทึก</button> 
                            <a href="<?php echo URL;?>UserInfor/usera" class="btn btn-danger btn-sm" role="button"><i class="material-icons">cancel</i>  ยกเลิก</a>
                        </center>
                      </div>
                    </div> -->
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
<!-- </body>      -->
