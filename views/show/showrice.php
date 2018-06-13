<?php
    $ricedata = Session::get('shriced');
?>
<body>
	   <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>แสดงข้อมูล</strong>พันธุ์ข้าว
                      </div>
                      <?php //print_r($ricedata);  ?>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">รหัสพันธุ์ข้าว</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $ricedata['id_rice']; ?></p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">ชื่อพันธุ์ข้าว</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $ricedata['name_rice']; ?></p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">ประเภท</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $ricedata['type_rice']; ?></p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">รายละเอียด</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $ricedata['detail_rice']; ?></p>
                            </div>
                          </div>
                          <center>
                            <a href="<?php echo URL;?>UserInfor/rice" class="btn btn-primary  btn-sm" role="button">ย้อนกลับ </a>
                             </center>
                          </body>