<?php
    $weeddata = Session::get('dpweed');
?>

<body>
						<?php echo $weeddata['id_weed']; ?>
						<?php echo $weeddata['name_weed']; ?>
						<?php echo $weeddata['type_weed']; ?>
						<?php echo $weeddata['detail_weed']; ?>
                          <center>
                            <a href="<?php echo URL;?>UserInfor/weed" class="btn btn-primary  btn-sm" role="button">ยกเลิก </a>
                             </center>

                          </body>