 <?php
    $Weeddata = Session::get('eweededit');
?>
 <body>
 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>แก้ไขข้อมูล</strong><small> ศัตรูพืช</small></div>
                      <div class="card-body card-block">
                        <?php //print_r($Weeddata); ?>
                        <form action="aftereditweedd" method="post">
                        <div class="form-group"><label for="ID" class=" form-control-label">รหัส</label>
                          <input type="text" name="ID" id="ID" placeholder="" class="form-control" value="<?php echo $Weeddata['id_weed']; ?>" readonly></div>
                           <div class="form-group"><label for="name" class=" form-control-label" >ชื่อศัตรูพืช</label>
                          <input type="text" name="name" id="name" placeholder="" class="form-control" value="<?php echo $Weeddata['name_weed']; ?>"></div>
                         <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">ประเภท</label></div>
                            <div class="col-12 col-md-9">
                              <select name="select" id="select" class="form-control">
                                <option value="<?php echo $Weeddata['type_weed']; ?>"><?php echo $Weeddata['type_weed']; ?></option>
                                <option value="แมลง">แมลง</option>
                                <option value="วัชพืช">วัชพืช</option>
                                <option value="สัตว์">สัตว์</option>
                              </select>
                            </div>
                            </div>


                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label" >รายละเอียด</label></div>
                            
                            <div class="col-12 col-md-9"><textarea name="textinput" id="textinput" rows="9" placeholder="" class="form-control"><?php echo $Weeddata['detail_weed']; ?></textarea><br></div>
                          </div>
                           <center>
                               <button type="submit" class="btn btn-success btn-sm">บันทึก</button> </form>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo URL;?>UserInfor/weed" class="btn btn-danger btn-sm" role="button">ยกเลิก </a>

                           
                      </button>
                            </center>
                        </div>
                       
                      </div>
                    </div>

                  </div>
   

    <script src="<?php echo URL; ?>Public/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/popper.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/plugins.js"></script>
    <script src="<?php echo URL; ?>Public/js/main.js"></script>


    <script src="<?php echo URL; ?>Public/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
 </body>