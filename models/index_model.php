<?php

class Index_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        echo $_POST['login_username'];
        echo "<br>";
        echo $_POST['password'];
        echo "<br>";

        $sth = $this->db->prepare("SELECT       *
                                   FROM         user 
                                   LEFT JOIN    user_data
                                   ON           user.id_userdata=user_data.id_userdata
                                   WHERE        user.username = :login AND user.password = md5(:password)
                                   ");

        $sth->execute(array(
            ':login' => $_POST['login_username'],
            ':password' => $_POST['password']
        ));
        
        $data = $sth->fetch();
        
        $count =  $sth->rowCount();

        print_r($data);

        echo "<br>";
        echo $data['id_userdata'];
        echo "<br>";
        echo $data['username'];
        echo "<br>";
        echo $data['password'];
        echo "<br>";
        echo $data['status'];
        echo "<br>";
        echo $data['email_user'];
        echo "<br>";
        echo $data['sex_user'];
        echo "<br>";
        echo $data['fist_name'];
        echo "<br>";
        echo $data['last_name'];
        echo "<br>";
        echo $data['career'];
        echo "<br>";
        echo $data['picture'];
        echo "<br>";
        

        if ($count > 0) {
            //view rice
            $rice = $this->db->prepare("SELECT * FROM rice");
            $rice->execute();
            $ricedata = $rice->fetchAll();
            //view fertilizer    
            $fertilizer = $this->db->prepare("SELECT * FROM fertilizer");
            $fertilizer->execute();
            $fertilizerdata = $fertilizer->fetchAll();
             //view soil   
            $soil = $this->db->prepare("SELECT * FROM soil");
            $soil->execute();
            $soildata = $soil->fetchAll();
             //view weed   
            $weed = $this->db->prepare("SELECT * FROM weed");
            $weed->execute();
            $weeddata = $weed->fetchAll();
            //user
            $user = $this->db->prepare("SELECT       *
                                   FROM         user 
                                   LEFT JOIN    user_data
                                   ON           user.id_userdata=user_data.id_userdata");
            $user->execute();
            $userdata = $user->fetchAll();
            // login
            Session::init();
            Session::set('loggedIn', true);
            Session::set('Datalogin', $data);
            // session view
            Session::set('RiceData', $ricedata);
            Session::set('Fertilizer', $fertilizerdata);
            Session::set('Soildata', $soildata);
            Session::set('Weeddata', $weeddata);
            // session viewuser
            Session::set('Userdata', $userdata);
            //Session::set('Authen',$data['role']);
            echo "Login Pass";
            header('location: '.URL.'UserInfor');
        } else {
            echo "Login Fail";
            $messagebox = '
            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                            <span class="badge badge-pill badge-danger">ผิดพลาด</span>
                                                ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้องกรุณาลองใหม่
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
            ';
            Session::init();
            Session::set('Message',$messagebox);
            header('location: '.URL);
        }
    }
    
}