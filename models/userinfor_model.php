<?php

class Userinfor_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //
    public function loneuser()
    {
            $yaer = substr((date('Y')+543), 2,2);

            $weed = $this->db->prepare("SELECT id_userdata FROM user_data WHERE id_userdata LIKE '".$yaer."%' ORDER BY id_userdata DESC LIMIT 1");
            $weed->execute(); //array(':yaer' => $yaer )
            $userdata = $weed->fetchall();

            if (!empty($userdata)) {
                foreach ($userdata as $rows ) :
                    $idnum = $rows[0];
                endforeach;  
                $id =   $idnum +1;
                
            }
            else {
                $id = $yaer.'001';
            }
            print_r($userdata);
           
            echo '<br>'.$id;
            $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">บันทึกสำเร็จ</span>
                                                บันทึกข้อมูลแมลงสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';
            Session::init();
            Session::set('weed',$id);
            Session::set('Message',$messagebox);
            header('location: '.URL.'UserInfor/adduser');
    }

    //lonerice
    public function lonerice()
    {
            $yaer = substr((date('Y')+543), 2,2);

            $Lrice = $this->db->prepare("SELECT id_rice FROM rice WHERE id_rice LIKE '".$yaer."%' ORDER BY id_rice DESC LIMIT 1");
            $Lrice->execute(); //array(':yaer' => $yaer )
            $Lricedata = $Lrice->fetchall();

            if (!empty($Lricedata)) {
                foreach ($Lricedata as $rows ) :
                    $idnum = $rows[0];
                endforeach;  
                $id =   $idnum +1;
                
            }
            else {
                $id = $yaer.'001';
            }
            print_r($Lricedata);
           
            echo '<br>'.$id;
            $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">บันทึกสำเร็จ</span>
                                                บันทึกข้อมูลข้าวสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';
            Session::init();
            Session::set('Riceid',$id);
            Session::set('Message',$messagebox);
            header('location: '.URL.'UserInfor/addrice');
    }//lonerice

    //lonesoil  
    public function lonesoil()
    {
            $yaer = substr((date('Y')+543), 2,2);

            $Lsoil = $this->db->prepare("SELECT id_soil FROM soil WHERE id_soil LIKE '".$yaer."%' ORDER BY id_soil DESC LIMIT 1");
            $Lsoil->execute(); //array(':yaer' => $yaer )
            $Lsoildata = $Lsoil->fetchall();

            if (!empty($Lsoildata)) {
                foreach ($Lsoildata as $rows ) :
                    $idnum = $rows[0];
                endforeach;  
                $id =   $idnum +1;
                
            }
            else {
                $id = $yaer.'001';
            }
            print_r($Lsoildata);
           
            echo '<br>'.$id;
            $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">บันทึกสำเร็จ</span>
                                                บันทึกข้อมูลดินสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';


            Session::init();
            Session::set('Soilid',$id);
            Session::set('Message',$messagebox);
            header('location: '.URL."UserInfor/addsoil");
    }

    //lonefer
    public function lonefert()
    {
            $yaer = substr((date('Y')+543), 2,2);

            $fertilizer = $this->db->prepare("SELECT id_fer FROM fertilizer WHERE id_fer LIKE '".$yaer."%' ORDER BY id_fer DESC LIMIT 1");
            $fertilizer->execute(); //array(':yaer' => $yaer )
            $fertilizerdata = $fertilizer->fetchall();

            if (!empty($fertilizerdata)) {
                foreach ($fertilizerdata as $rows ) :
                    $idnum = $rows[0];
                endforeach;  
                $id =   $idnum +1;
                
            }
            else {
                $id = $yaer.'001';
            }
            print_r($fertilizerdata);
           
            echo '<br>'.$id;
            $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">บันทึกสำเร็จ</span>
                                                บันทึกข้อมูลปุ๋ยสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';
            Session::init();
            Session::set('fertilizer',$id);
            Session::set('Message',$messagebox);
            header('location: '.URL.'UserInfor/addfertilizer');
    }//lonefer

    //loneweed
    public function loneweed()
    {
            $yaer = substr((date('Y')+543), 2,2);

            $weed = $this->db->prepare("SELECT id_weed FROM weed WHERE id_weed LIKE '".$yaer."%' ORDER BY id_weed DESC LIMIT 1");
            $weed->execute(); //array(':yaer' => $yaer )
            $weeddata = $weed->fetchall();

            if (!empty($weeddata)) {
                foreach ($weeddata as $rows ) :
                    $idnum = $rows[0];
                endforeach;  
                $id =   $idnum +1;
                
            }
            else {
                $id = $yaer.'001';
            }
            print_r($weeddata);
           
            echo '<br>'.$id;
            $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">บันทึกสำเร็จ</span>
                                                บันทึกข้อมูลแมลงสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';
            Session::init();
            Session::set('weed',$id);
            Session::set('Message',$messagebox);
            header('location: '.URL.'UserInfor/addweed');
    }//lonefer

    //เพิ่มข้อมูล
    public function addrice()
    {
        
        echo $_POST['ID'];
        echo $_POST['name'];
        echo $_POST['select'];
        echo $_POST['textinput'];

        $sthdata = $this->db->prepare("INSERT INTO  rice   
                                                (id_rice , name_rice , type_rice , detail_rice)
                                  
                                         VALUES       (
                                                 :idrice    , :namerice   , :typerice          ,
                                                 :detailrice)
                                   ");

        $sthdata->execute(array(
                              ':idrice' => $_POST['ID']             , ':namerice' =>  $_POST['name'] ,
                              ':typerice'        => $_POST['select']        , ':detailrice'  => $_POST['textinput']      
                             ));
        //
            $rice = $this->db->prepare("SELECT * FROM rice");
            $rice->execute();
            $ricedata = $rice->fetchAll();
            Session::init();
            Session::set('RiceData', $ricedata); 
            header('location: '.URL.'UserInfor/rice');


    }
    public function addsoil()
    {
        
        echo $_POST['ID'];
        echo $_POST['select'];
        echo $_POST['textinput'];

        $sthdata = $this->db->prepare("INSERT INTO  soil   
                                                (id_soil , type_soil , detail_soil)
                                  
                                         VALUES       (
                                                 :idsoil    , :typesoil   , :detailsoil)
                                   ");

        $sthdata->execute(array(
                              ':idsoil' => $_POST['ID']             , ':typesoil' =>  $_POST['select'] ,
                              ':detailsoil'        => $_POST['textinput']        
                             ));
            $soil = $this->db->prepare("SELECT * FROM soil");
            $soil->execute();
            $soildata = $soil->fetchAll();
            Session::init();
            Session::set('Soildata', $soildata);
            header('location: '.URL.'UserInfor/soil');

    }
    public function addweed()
    {
        
        echo $_POST['ID'];
        echo $_POST['name'];
        echo $_POST['select'];
        echo $_POST['textinput'];

        $sthdata = $this->db->prepare("INSERT INTO  weed   
                                                (id_weed , name_weed , type_weed ,
                                                 detail_weed)
                                  
                                         VALUES       (
                                                 :idweed    , :nameweed   , :typeweed ,
                                                 :detailweed)
                                   ");

        $sthdata->execute(array(
                              ':idweed' => $_POST['ID']             , ':nameweed' =>  $_POST['name'] ,
                              ':typeweed'        => $_POST['select'] , ':detailweed'  => $_POST['textinput']           
                             ));

            $weed = $this->db->prepare("SELECT * FROM weed");
            $weed->execute();
            $weeddata = $weed->fetchAll();
            Session::init();
            Session::set('Weeddata', $weeddata);
            header('location: '.URL.'UserInfor/weed');

    }
    public function addfiertilizer()
    {
        
        echo $_POST['ID'];
        echo $_POST['name'];
        echo $_POST['select'];
        echo $_POST['textinput'];

        $sthdata = $this->db->prepare("INSERT INTO  fertilizer   
                                                (id_fer , name_fer , type_fer ,
                                                detail_fer)
                                  
                                         VALUES       (
                                                 :idfer    , :namefer   , :typefer ,
                                                 :detailfer)
                                   ");

        $sthdata->execute(array(
                              ':idfer' => $_POST['ID']             , ':namefer' =>  $_POST['name'] ,
                              ':typefer' => $_POST['select']    , ':detailfer' => $_POST['textinput']      
                             ));

            $fertilizer = $this->db->prepare("SELECT * FROM fertilizer");
            $fertilizer->execute();
            $fertilizerdata = $fertilizer->fetchAll();
            Session::init();
            Session::set('Fertilizer', $fertilizerdata);
            header('location: '.URL.'UserInfor/fertilizer');

    }

   

    //
    public function beforeeditrice()
    {
        echo $_POST['id'];

        $rice = $this->db->prepare("SELECT * FROM rice WHERE id_rice = '".$_POST['id']."'");
        $rice->execute();
        $ricedata = $rice->fetch();

        print_r($ricedata);
        Session::init();
        Session::set('riceedit', $ricedata);
        header('location: '.URL.'UserInfor/editrice');
    }
    public function aftereditrice()
    {
        echo $_POST['ID'].'<br>';
        echo $_POST['name'].'<br>';
        echo $_POST['select'].'<br>';
        echo $_POST['textinput'].'<br>';

        $rice = $this->db->prepare("UPDATE rice SET 
                                                   name_rice = :name ,
                                                   type_rice = :type ,
                                                   detail_rice = :detail 
                                    WHERE rice.id_rice = :id");
        $rice->execute(array( ':name' => $_POST['name'],
                              ':type' => $_POST['select'],
                              ':detail' => $_POST['textinput'],
                              ':id' => $_POST['ID']
                            ));

        $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">แก้ไขสำเร็จ</span>
                                                แก้ไขข้อมูลข้าวสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';

        $rice = $this->db->prepare("SELECT * FROM rice");
        $rice->execute();
        $ricedata = $rice->fetchAll();
        Session::init();
        Session::set('RiceData', $ricedata);
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/rice');
    }

    ///editbeforeeditfer
    public function beforeeditfer()
    {
        echo $_POST['id'];

        $fer = $this->db->prepare("SELECT * FROM fertilizer WHERE id_fer = '".$_POST['id']."'");
        $fer->execute();
        $ferdata = $fer->fetch();

        print_r($ferdata);
        Session::init();
        Session::set('feredit', $ferdata);
        header('location: '.URL.'UserInfor/editfer');
    }
    public function aftereditfer()
    {
        echo $_POST['ID'].'<br>';
        echo $_POST['name'].'<br>';
        echo $_POST['select'].'<br>';
        echo $_POST['textinput'].'<br>';

        $fertilizer = $this->db->prepare("UPDATE fertilizer SET 
                                                   name_fer = :name ,
                                                   type_fer = :type ,
                                                   detail_fer = :detail 
                                    WHERE fertilizer.id_fer = :id");
        $fertilizer->execute(array( ':name' => $_POST['name'],
                              ':type' => $_POST['select'],
                              ':detail' => $_POST['textinput'],
                              ':id' => $_POST['ID']
                            ));

        $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">แก้ไขสำเร็จ</span>
                                                แก้ไขข้อมูลปุ๋ยสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';

        $fertilizer = $this->db->prepare("SELECT * FROM fertilizer");
        $fertilizer->execute();
        $fertilizerdata = $fertilizer->fetchAll();
        Session::init();
        Session::set('Fertilizer', $fertilizerdata);
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/fertilizer');
    }


    //edits
    public function beforeeditsoil()
    {
        echo $_POST['id'];

        $esoil = $this->db->prepare("SELECT * FROM soil WHERE id_soil = '".$_POST['id']."'");
        $esoil->execute();
        $esoildata = $esoil->fetch();

        print_r($esoildata);
        Session::init();
        Session::set('editsoil', $esoildata);
        header('location: '.URL.'UserInfor/editsoil');
    }
    public function aftereditsoil()
    {
        echo $_POST['ID'].'<br>';
        echo $_POST['select'].'<br>';
        echo $_POST['textinput'].'<br>';

        $Esoil = $this->db->prepare("UPDATE soil SET 
                                                   type_soil = :type ,
                                                   detail_soil = :detail 
                                    WHERE soil.id_soil = :ID");
        $Esoil->execute(array( 
                              ':type' => $_POST['select'],
                              ':detail' => $_POST['textinput'],
                              ':ID' => $_POST['ID']
                            ));

        $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">แก้ไขสำเร็จ</span>
                                                แก้ไขข้อมูลดินสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';

        $Esoil = $this->db->prepare("SELECT * FROM soil");
        $Esoil->execute();
        $esoildata = $Esoil->fetchAll();
        Session::init();
        Session::set('Soildata', $esoildata);
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/soil');
}
//editweed
 public function beforeeditweedd()
    {
        echo $_POST['id'];

        $eweed = $this->db->prepare("SELECT * FROM weed WHERE id_weed = '".$_POST['id']."'");
        $eweed->execute();
        $eweeddata = $eweed->fetch();

        print_r($eweeddata);
        Session::init();
        Session::set('eweededit', $eweeddata);
        header('location: '.URL.'UserInfor/editweedd');
    }
    public function aftereditweedd()
    {
        echo $_POST['ID'].'<br>';
        echo $_POST['name'].'<br>';
        echo $_POST['select'].'<br>';
        echo $_POST['textinput'].'<br>';

        $editweeddata = $this->db->prepare("UPDATE weed SET 
                                                   name_weed = :name ,
                                                   type_weed = :type ,
                                                   detail_weed = :detail 
                                    WHERE weed.id_weed = :id");
        $editweeddata->execute(array( ':name' => $_POST['name'],
                              ':type' => $_POST['select'],
                              ':detail' => $_POST['textinput'],
                              ':id' => $_POST['ID']
                            ));

        $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">แก้ไขสำเร็จ</span>
                                                แก้ไขข้อมูลศัตรูพื้ชสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';

        $editweeddata = $this->db->prepare("SELECT * FROM weed");
        $editweeddata->execute();
        $editweeddatadata = $editweeddata->fetchAll();
        Session::init();
        Session::set('Weeddata', $editweeddatadata);
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/weed');
    }

//edituser 1
     public function beforeedituser1()
    {
        echo $_POST['id'];

        $shuser = $this->db->prepare("SELECT       *
                                      FROM         user 
                                      LEFT JOIN    user_data
                                      ON           user.id_userdata=user_data.id_userdata 
                                      WHERE        user.id_user='".$_POST['id']."'
                                        "); //WHERE user_data.id_userdata = '".$_POST['id']."'
        $shuser->execute();
        $shuserdata = $shuser->fetch();

        print_r($shuserdata);
        Session::init();
        Session::set('edituser', $shuserdata); //session 
        header('location: '.URL.'UserInfor/edituser');
    }
    
    public function afteredituser1()
    {
        echo $_POST['id'].'<br>';
        echo $_POST['user'].'<br>';
        echo $_POST['email'].'<br>';
        echo $_POST['name'].'<br>';
        echo $_POST['last'].'<br>';
        echo $_POST['career'].'<br>';
        echo $_POST['sex'].'<br>';

        $edituserdata = $this->db->prepare("UPDATE user_data SET 
                                                  
                                                   name_user = :user ,
                                                   email_user = :email ,
                                                   fist_name = :name,
                                                   last_name = :last,
                                                   career = :career,
                                                   sex_user = :sex
                                    WHERE user_data.id_userdata = :id");
        $edituserdata->execute(array( ':id'     => $_POST['id'],
                                      ':user'   => $_POST['user'],
                                      ':email'  => $_POST['email'],
                                      ':name'   => $_POST['name'],
                                      ':last'   => $_POST['last'],
                                      ':career' => $_POST['career'],
                                      ':sex'    => $_POST['sex']
                            ));

        $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                             <span class="badge badge-pill badge-success">แก้ไขสำเร็จ</span>
                                                แก้ไขข้อมูลสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';
        $user = $this->db->prepare("SELECT       *
                                   FROM         user 
                                   LEFT JOIN    user_data
                                   ON           user.id_userdata=user_data.id_userdata");
        $user->execute();
        $userdata = $user->fetchAll();
        Session::init();
        Session::set('Userdata', $userdata);
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/usera');
    }


      public function beforeeditpass()
    {
        echo $_POST['id'];

        $shuser = $this->db->prepare("SELECT       *
                                      FROM         user 
                                      LEFT JOIN    user_data
                                      ON           user.id_userdata=user_data.id_userdata 
                                      WHERE        user.id_user='".$_POST['id']."'
                                        "); //WHERE user_data.id_userdata = '".$_POST['id']."'
        $shuser->execute();
        $shuserdata = $shuser->fetch();

        print_r($shuserdata);
        Session::init();
        Session::set('edituser', $shuserdata); //session 
        header('location: '.URL.'UserInfor/editpass');
    }
    
    public function aftereditpass()
    {
        echo $_POST['id'].'<br>';
        //echo $_POST['user'].'<br>';
        //echo $_POST['password'].'<br>';
        echo $_POST['newpassword'].'<br>';
        echo md5($_POST['newpassword']).'<br>';


        $edituserdata = $this->db->prepare("UPDATE user SET 
                                                   password = :newpassword
                                             WHERE id_user = :id"
                                          );
        $edituserdata->execute(array( ':id'     => $_POST['id'],
                                      ':newpassword'   => md5($_POST['newpassword'])

                            ));

        $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">รีเซ็ต</span>
                                                รหัสผ่านสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';
        Session::init();
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/usera');
    }
    
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function shrice(){
         echo $_POST['id'];

        $shrice = $this->db->prepare("SELECT * FROM rice WHERE id_rice = '".$_POST['id']."'");
        $shrice->execute();
        $shricedata = $shrice->fetch();

        print_r($shricedata);
        Session::init();
        Session::set('shriced', $shricedata); //session 
        header('location: '.URL.'UserInfor/showrice');

    }
     function shweed(){
         echo $_POST['id'];

        $shweed = $this->db->prepare("SELECT * FROM weed WHERE id_weed = '".$_POST['id']."'");
        $shweed->execute();
        $shweeddata = $shweed->fetch();

        print_r($shweeddata);
        Session::init();
        Session::set('shweedd', $shweeddata); //session  เหลืแอง ๆตรงกันกับหน้าโชวฺ
        header('location: '.URL.'UserInfor/showweed');

    }
    function shfer(){
         echo $_POST['id'];

        $shfer = $this->db->prepare("SELECT * FROM fertilizer WHERE id_fer = '".$_POST['id']."'");
        $shfer->execute();
        $shshferdata = $shfer->fetch();

        print_r($shshferdata);
        Session::init();
        Session::set('shrferd', $shshferdata); //session 
        header('location: '.URL.'UserInfor/showfer');

    }
    function shsoil(){
         echo $_POST['id'];

        $shsoil = $this->db->prepare("SELECT * FROM soil WHERE id_soil = '".$_POST['id']."'");
        $shsoil->execute();
        $shshsoildata = $shsoil->fetch();

        print_r($shshsoildata);
        Session::init();
        Session::set('shsoild', $shshsoildata); //session 
        header('location: '.URL.'UserInfor/showsoil');

    }

     function shuser(){
         echo $_POST['id'];

        $shuser = $this->db->prepare("SELECT       *
                                      FROM         user 
                                      LEFT JOIN    user_data
                                      ON           user.id_userdata=user_data.id_userdata 
                                      WHERE        user.id_user='".$_POST['id']."'
                                        "); //WHERE user_data.id_userdata = '".$_POST['id']."'
        $shuser->execute();
        $shuserdata = $shuser->fetch();

        print_r($shuserdata);
        Session::init();
        Session::set('shuser', $shuserdata); //session 
        header('location: '.URL.'UserInfor/showuser');

    }
    /*  function drop ----------------------------------------------------------------------------------------------------------------------------------*/
     function delrice(){
         echo $_POST['id'];

        $dprice = $this->db->prepare("DELETE FROM rice WHERE rice.id_rice = ".$_POST['id']." ");
        $dprice->execute();
        $dropricedata = $dprice->fetch();

        print_r($dropricedata);

         $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">ลบข้อมูลสำเร็จ</span>
                                                ลบข้อมูลข้าวสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';

        $rice = $this->db->prepare("SELECT * FROM rice");
        $rice->execute();
        $ricedata = $rice->fetchAll();
        Session::init();
        Session::set('RiceData', $ricedata);
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/rice');

    }


     function delweed(){
         echo $_POST['id'];

        $dpweed = $this->db->prepare("DELETE FROM weed WHERE weed.id_weed = ".$_POST['id']." ");
        $dpweed->execute();
        $dropweeddata = $dpweed->fetch();

        print_r($dropweeddata);

         $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">ลบข้อมูลสำเร็จ</span>
                                                ลบข้อมูลศัตรูพืชสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';

        $editweeddata = $this->db->prepare("SELECT * FROM weed");
        $editweeddata->execute();
        $editweeddatadata = $editweeddata->fetchAll();
        Session::init();
        Session::set('Weeddata', $editweeddatadata);
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/weed');



    }


     function delfer(){
         echo $_POST['id'];

        $delfer = $this->db->prepare("DELETE FROM fertilizer WHERE fertilizer.id_fer = ".$_POST['id']." ");
        $delfer->execute();
        $delferdata = $delfer->fetch();

        $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">ลบข้อมูลสำเร็จ</span>
                                                ลบข้อมูลปุ๋ยสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';
         $fertilizer = $this->db->prepare("SELECT * FROM fertilizer");
        $fertilizer->execute();
        $fertilizerdata = $fertilizer->fetchAll();
        Session::init();
        Session::set('Fertilizer', $fertilizerdata);
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/fertilizer');

    }


     function delsoil(){
         echo $_POST['id'];

        $dpsoil = $this->db->prepare("DELETE FROM soil WHERE soil.id_soil = ".$_POST['id']." ");
        $dpsoil->execute();
        $dropsoildata = $dpsoil->fetch();

        print_r($dropsoildata);
        $messagebox = '
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">ลบสำเร็จ</span>
                                                ลบมูลดินสำเร็จ
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';

        $Esoil = $this->db->prepare("SELECT * FROM soil");
        $Esoil->execute();
        $esoildata = $Esoil->fetchAll();
        Session::init();
        Session::set('Soildata', $esoildata);
        Session::set('Message',$messagebox);
        header('location: '.URL.'UserInfor/soil');
    }


}