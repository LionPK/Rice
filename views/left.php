<?php 
$Datalogin = Session::get('Datalogin');

?>
<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><?php echo $Datalogin['username']; ?></a>
                <a class="navbar-brand hidden" href="./"></a>
            </div>

            <div id="main-menu" >
                <ul class="nav navbar-nav">
                   
                    <h3 class="menu-title">จัดการข้อมูลผู้ใช้</h3><!-- /.menu-title -->
                  <li>
                        <a href="http://localhost/Rice/UserInfor/usera"> <i class="menu-icon fa fa-user"></i>ผู้ใช้ทั่วไป </a>
                    </li>
                    
                    <h3 class="menu-title">จัดการข้อมูล</h3><!-- /.menu-title -->

                    <li>
                        <a href="http://localhost/Rice/UserInfor/rice"> <i class="menu-icon fa fa-pencil-square-o"></i>ข้อมูลข้าว </a>
                    </li>
                     <li>
                        <a href="http://localhost/Rice/UserInfor/fertilizer"> <i class="menu-icon fa fa-pencil-square-o"></i>ข้อมูลปุ๋ย </a>
                    </li>
                     <li>
                        <a href="http://localhost/Rice/UserInfor/soil"> <i class="menu-icon fa fa-pencil-square-o"></i>ข้อมูลดิน </a>
                    </li>
                     <li>
                        <a href="http://localhost/Rice/UserInfor/weed"> <i class="menu-icon fa fa-pencil-square-o"></i>ข้อมูลศัตรูพืช </a>
                    </li>
                     
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
