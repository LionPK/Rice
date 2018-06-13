<?php
    $shsoildata = Session::get('shuser');
?>
<body>
   <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>แสดงข้อมูล</strong> ส่วนตัว
                      </div>
                      <div class="card-body card-block">
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
                
                  
                            
                          </div>

                          <center>
                            <a href="<?php echo URL;?>UserInfor/usera" class="btn btn-primary  btn-sm" role="button">ย้อนกลับ </a>
                             </center>
                          </body>