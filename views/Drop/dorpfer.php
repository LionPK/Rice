<?php
    $ferdata = Session::get('dropferdata');
?>

<body>
						<?php echo $ferdata['id_fer']; ?>
						<?php echo $ferdata['name_fer']; ?>
						<?php echo $ferdata['type_fer']; ?>
						<?php echo $ferdata['detail_fer']; ?>
                          <center>
                            <a href="<?php echo URL;?>UserInfor/fertilizer" class="btn btn-primary  btn-sm" role="button">ยกเลิก </a>
                             </center>

                          </body>