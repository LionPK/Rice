<?php 
$Datalogin = Session::get('Datalogin');

?>
 <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>เพิ่มข้อมูลผู้ใช้งาน</strong> 
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">ชื่อผู้ใช้</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $Datalogin['username']; ?></p>
                            </div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">อีเมลล์</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="อีเมลล์" class="form-control"><small class="help-block form-text">กรุณากรอกอีเมลล์</small></div>
                          </div>
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">ชื่อ</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="ชื่อ" class="form-control"><small class="help-block form-text">กรุณากรอกชื่อ</small></div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">นามสกุล</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="นามสกุล" class="form-control"><small class="help-block form-text">กรุณากรอกนามสกุล</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">รหัสผ่าน</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="รหัสผ่าน" class="form-control"><small class="help-block form-text">กรุณาตรวจสอบรหัสผ่าน</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">ยืนยันรหัสผ่าน</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="ยืนยันรหัสผ่าน" class="form-control"><small class="help-block form-text">กรุณายืนยันรหัสผ่าน</small></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">เพศ</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">ชาย
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">หญิง
                                  </label>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                         
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                          </div>
                          
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
                  
                     <!-- Right Panel -->


    <script src="<?php echo URL; ?>Public/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/popper.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/plugins.js"></script>
    <script src="<?php echo URL; ?>Public/js/main.js"></script>
