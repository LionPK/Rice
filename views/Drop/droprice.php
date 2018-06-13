<?php
    $ricedata = Session::get('dpriced');
?>

<body>
						<?php echo $ricedata['id_rice']; ?>
						<?php echo $ricedata['name_rice']; ?>
						<?php echo $ricedata['type_rice']; ?>
						<?php echo $ricedata['detail_rice']; ?>
                          <center>
                            <a href="<?php echo URL;?>UserInfor/rice" class="btn btn-primary  btn-sm" role="button">ยกเลิก </a>
                             </center>

                          </body>