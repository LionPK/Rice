<?php
    $soildata = Session::get('delsoildata');
?>

<body>
						<?php echo $soildata['id_soil']; ?>
						<?php echo $soildata['type_soil']; ?>
						<?php echo $soildata['detail_soil']; ?>
                          <center>
                            <a href="<?php echo URL;?>UserInfor/soil" class="btn btn-primary  btn-sm" role="button">ยกเลิก </a>
                             </center>

                          </body>