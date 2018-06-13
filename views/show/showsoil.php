<?php
    $shsoildata = Session::get('shsoild');
?>

<body>
   <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>แสดงข้อมูล</strong>ดิน
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">รหัสดิน</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $shsoildata['id_soil']; ?></p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">ประเภท</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $shsoildata['type_soil']; ?></p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">รายละเอียด</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $shsoildata['detail_soil']; ?></p>
                            </div>
                          </div>
                          <center>
                            <a href="<?php echo URL;?>UserInfor/soil" class="btn btn-primary  btn-sm" role="button">ย้อนกลับ </a>
                             </center>
                          </body>