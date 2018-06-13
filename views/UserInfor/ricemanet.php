<?php
    $ricedata = Session::get('RiceData');
    $msg = Session::get('Message');
?>
<body>
    <?php 
    if(!empty($msg)){
        echo $msg;
        unset($_SESSION['Message']);
    }
    else {
        
    }

    ?>
        <div class="content mt-16">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong  class="card-title">
                                <h3 align ="right">
                                    <a href="<?php echo URL;?>UserInfor/lonerice" class="btn btn-outline-secondary" role="button"><i class="menu-icon fa fa-plus-square"></i> เพิ่มข้อมูล</a>
                                </h3>
                            </strong>
                        </div>
                        <div class="card-body">
                            <?php //print_r($ricedata); ?>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>รหัส</th>
                        <th>ชื่อ</th>
                        <th>ประเภท</th>
                        <th>รายละเอียด</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php

                        foreach ($ricedata as $rows ) :
                            echo '<tr>';
                            echo '<td>'.$rows["id_rice"].'</td>';
                            echo '<td>'.$rows["name_rice"].'</td>';
                            echo '<td>'.$rows["type_rice"].'</td>';
                            echo '<td>'.$rows["detail_rice"].'</td>';
                            echo '<td>'.'
                            <form action="shrice" method="POST">
                            <input type ="hidden" name = "id" value = "'.$rows["id_rice"].'" readonly >
                            <button class="btn btn-outline-secondary" type="submit" style = "padding : 2px 11px!important" ><i class="menu-icon fa fa-eye"></i> แสดงข้อมูล</button>
                            </form>
                            <form action="beforeeditrice" method="POST">
                            <input type ="hidden" name = "id" value = "'.$rows["id_rice"].'" readonly >
                            <button class="btn btn-outline-secondary" type="submit" style = "padding : 2px 30px!important" ><i class="menu-icon fa fa-pencil-square-o"></i> แก้ไข</button>
                            </form> 
                            <form id="delForm'.$rows["id_rice"].'" action="delrice" method="POST">
                            <input type ="hidden" name = "id" value = "'.$rows["id_rice"].'" readonly >
                            <button class="btn btn-outline-secondary" type="button" onclick="myFunction'.$rows["id_rice"].'()" style = "padding : 2px 38px!important"><i class="menu-icon fa fa-eraser"></i> ลบ</button>'
                            .'</form>'
                            .'
                            <script type="text/javascript">
                                function myFunction'.$rows["id_rice"].'(){
                                    if (confirm("ต้องการลบข้อมพันธุ์ข้าวหมายเลข '.$rows["id_rice"].' หรือไม่ !")) {
                                        document.getElementById("delForm'.$rows["id_rice"].'").submit();
                                    } else {

                                    }
                                }
                            </script>
                            '
                            .'</td>'
                            ;
                            echo '</tr>';
                        endforeach;
                     ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

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