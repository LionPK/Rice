<?php 
$Datalogin = Session::get('edituser');

?>
 <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>แก้ไขข้อมูลผู้ใช้งาน</strong> 
                      </div>
                      <div class="card-body card-block">
                        <form action="afteredituser1" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group"></div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">รหัสผู้ใช้</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="id" name="id" placeholder="Text" value="<?php echo $Datalogin['id_userdata']; ?>" class="form-control"readonly><small class="form-text text-muted" ></small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">ชื่อผู้ใช้</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="user" name="user" placeholder="Text" value="<?php echo $Datalogin['name_user']; ?>" class="form-control "readonly><small class="form-text text-muted"></small></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">อีเมลล์</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="อีเมลล์" value="<?php echo $Datalogin['email_user']; ?>" class="form-control"><small class="form-text text-muted">กรุณากรอกอีเมลล์</small></div>
                          </div>

                            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">ชื่อ</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Text" value="<?php echo $Datalogin['fist_name']; ?>" class="form-control"><small class="form-text text-muted">กรุณากรอกชื่อ</small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">นามสกุล</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="last" name="last" placeholder="Text" value="<?php echo $Datalogin['last_name']; ?>" class="form-control"><small class="form-text text-muted">กรุณากรอก</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">อาชีพ</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="career" name="career" placeholder="Text" value="<?php echo $Datalogin['career']; ?>" class="form-control" ><small class="form-text text-muted"></small></div>
                          </div>
                         
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">เพศ</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="sex" name="sex" placeholder="Text" value="<?php echo $Datalogin['sex_user']; ?>" class="form-control" readonly><small class="form-text text-muted"></small></div>
                          </div>
                         

                          
                        
                      </div>
                      <div class="card-footer">
                       <center>
                               <button type="submit" class="btn btn-success btn-sm">บันทึก</button> </form>
                            &nbsp;&nbsp;&nbsp;&nbsp;</form>
                            <a href="<?php echo URL;?>UserInfor/usera" class="btn btn-danger btn-sm" role="button">ยกเลิก </a>

                           
                      </button>
                      </div>
                    </div>
                  
                     <!-- Right Panel -->


    <script src="<?php echo URL; ?>Public/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/popper.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/plugins.js"></script>
    <script src="<?php echo URL; ?>Public/js/main.js"></script>
