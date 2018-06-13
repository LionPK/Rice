
<?php
    $weeddata = Session::get('shweedd');
?>
<body>
   <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>แสดงข้อมูล</strong>ศัตรูพืช
                      </div>
                         <?php //print_r($weeddata);  ?>
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">รหัสศัตรูพืช</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"> <?php echo $weeddata['id_weed']; ?> </p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">ชื่อศัตรูพืช</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"> <?php echo $weeddata['name_weed']; ?> </p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">ประเภท</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"> <?php echo $weeddata['type_weed']; ?> </p>
                            </div>
                             <div class="col col-md-3"><label class=" form-control-label">รายละเอียด</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"> <?php echo $weeddata['detail_weed']; ?> </p>
                            </div>
                          
                          </div><center>
                            <a href="<?php echo URL;?>UserInfor/weed" class="btn btn-primary  btn-sm" role="button">ย้อนกลับ </a>
                             </center>
                          </body>