<?php
    $userdata = Session::get('Userdata');
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
<body>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">ตารางแสดงข้อมูลผู้ดูแลระบบ</h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-success">
                        <tr>
                            <th>รหัสผู้ใช้</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>เพศ</th>
                            <th>อีเมล์</th>
                            <th>สถานะ</th>
                            <th>ชื่อผู้ใช้</th>
                            <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php

                        foreach ($userdata as $rows ) :
                            echo '<tr>';
                            echo '<td>'.$rows["id_user"].'</td>';
                            echo '<td>'.$rows["fist_name"]." ".$rows["last_name"].'</td>';
                            echo '<td>'.$rows["sex_user"].'</td>';
                            echo '<td>'.$rows["email_user"].'</td>';
                            echo '<td>'.$rows["status"].'</td>';
                            echo '<td>'.$rows["username"].'</td>';
                            echo '<td>'.'

                            <form action="shuser" method="POST">
                            <input type ="hidden" name = "id" value = "'.$rows["id_user"].'" readonly >
                                <button type="submit" rel="tooltip" title="แสดงข้อมูล" class="btn btn-info btn-link">
                                    <i class="material-icons">view_agenda</i>  แสดงข้อมูล
                                </button>
                            </form> 
                            <form action="beforeedituser1" method="POST">
                            <input type ="hidden" name = "id" value = "'.$rows["id_user"].'" readonly >
                                <button type="submit" rel="tooltip" title="แก้ไขข้อมูลผู้ดูแล" class="btn btn-primary btn-link">
                                    <i class="material-icons">edit</i>  แก้ไขข้อมูลผู้ดูแล
                                </button>
                            </form> 
                            <form action="beforeeditpass" method="POST">
                            <input type ="hidden" name = "id" value = "'.$rows["id_user"].'" readonly >
                                <button type="submit" rel="tooltip" title="รีเซ็ตรหัสผ่าน" class="btn btn-warning btn-link">
                                        <i class="material-icons">autorenew</i>  รีเซ็ตรหัสผ่าน
                                </button>
                            </form> 

                            

                            '.'</td>';
                            echo '</tr>';
                        endforeach; 
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
        <!-- <div class="content mt-16">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                             
                        </div>
                        

                        <div class="card-body">
                             <?php //print_r($userdata); ?>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>รหัสผู้ใช้</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>เพศ</th>
                        <th>อีเมล์</th>
                        <th>สถานะ</th>
                        <th>ชื่อผู้ใช้</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php

                       foreach ($userdata as $rows ) :
                            echo '<tr>';
                            echo '<td>'.$rows["id_user"].'</td>';
                            echo '<td>'.$rows["fist_name"]." ".$rows["last_name"].'</td>';
                            echo '<td>'.$rows["sex_user"].'</td>';
                            echo '<td>'.$rows["email_user"].'</td>';
                            echo '<td>'.$rows["status"].'</td>';
                            echo '<td>'.$rows["username"].'</td>';
                            echo '<td>'.'

                              <form action="shuser" method="POST">
                            <input type ="hidden" name = "id" value = "'.$rows["id_user"].'" readonly >
                            <button class="btn btn-outline-secondary" type="submit" style = "padding : 2px 31px!important" ><i class="menu-icon fa fa-pencil-square-o"></i> แสดงข้อมูล</button>
                            </form> 
                             <form action="beforeedituser1" method="POST">
                            <input type ="hidden" name = "id" value = "'.$rows["id_user"].'" readonly >
                            <button class="btn btn-outline-secondary" type="submit" style = "padding : 2px 50px!important" ><i class="menu-icon fa fa-pencil-square-o"></i> แก้ไข</button>
                            </form> 
                              <form action="beforeeditpass" method="POST">
                            <input type ="hidden" name = "id" value = "'.$rows["id_user"].'" readonly >
                             <button class="btn btn-outline-secondary" type="submit" style =  "padding : 2px 53px!important" ><i class="menu-icon fa fa-refresh"></i> รีเซ็ต</button> 
                            </form> 

                           

                            '.'</td>';
                            echo '</tr>';
                        endforeach; 
                     ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div> -->


                <!-- </div> -->
            <!-- </div>.animated -->
        <!-- </div>.content -->


    <!-- </div>/#right-panel -->

    <!-- Right Panel -->

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

    <!-- <script src="<?php echo URL; ?>Public/js/vendor/jquery-2.1.4.min.js"></script> -->
    <!-- <script src="<?php echo URL; ?>Public/js/popper.min.js"></script> -->
    <!-- <script src="<?php echo URL; ?>Public/js/plugins.js"></script> -->
    <!-- <script src="<?php echo URL; ?>Public/js/main.js"></script> -->


    <!-- <script src="<?php echo URL; ?>Public/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/data-table/datatables-init.js"></script> -->


    <!-- <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> -->


</body>