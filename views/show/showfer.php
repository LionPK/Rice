<?php
    $ferdata = Session::get('shrferd');
?>
<body>
   <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>แสดงข้อมูล</strong>ปุ๋ย
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">รหัสปุ๋ย</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $ferdata['id_fer']; ?></p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">ชื่อปุ๋ย</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $ferdata['name_fer']; ?></p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">ประเภท</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $ferdata['type_fer']; ?></p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">รายละเอียด</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $ferdata['detail_fer']; ?></p>
                            </div>
                          </div>
                          <center>
                            <a href="<?php echo URL;?>UserInfor/fertilizer" class="btn btn-primary  btn-sm" role="button">ย้อนกลับ </a>
                             </center>
                          </body>