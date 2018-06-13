<?php

class UserInfor extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index () {
        $this->view->render('header'); 
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('UserInfor/main');
    }
    function usera (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('UserInfor/user1');
    }
     function edit (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('UserInfor/editprofile');
    }
       function rice (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('UserInfor/ricemanet');
    }
    function fertilizer (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('UserInfor/fertilizer');
    }
     function soil (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('UserInfor/soil');
    }
    function weed (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('UserInfor/weed');
    }
     function add (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('add/addprofile');
    }
    function addrice (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('add/Addrice');
    }
    function addsoil (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('add/addsoil');
    }
      function addweed (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('add/addweed');
    }
     function addfertilizer (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('add/addfertilizer');
    }
    /*--------------------------------------------------------------------------------------------------------
    ----------------------------------------------------------------------------------------------------------
    ----------------------------------------------------------------------------------------------------------
    */
    //lone data
    function lonerice(){
        $this->model->lonerice();
    }
    function lonesoil(){
        $this->model->lonesoil();
    }
    function lonefert(){
        $this->model->lonefert();
    }   
    function loneweed(){
        $this->model->loneweed();
    }
    //endlone data
    function addricedata (){
        $this->model->addrice();
    }
    function addsoildata (){
        $this->model->addsoil();
    }
    function addweeddata (){
        $this->model->addweed();
    }

     function addfertilizerdata (){
        $this->model->addfiertilizer();
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     function editfer (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('edit/editfertilizer');
    }
      function beforeeditfer(){
         $this->model->beforeeditfer();
    }
    function aftereditfer(){
         $this->model->aftereditfer();
    }

/*----------------------------------------------------------------------------------------*/
     function editsoil (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('edit/editsoil');
    }
      function beforeeditsoil(){
         $this->model->beforeeditsoil();
    }
    function aftereditsoil(){
         $this->model->aftereditsoil();
    }
/*----------------------------------------------------------------------------------------*/

     function editweedd (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('edit/editweed');
    }
     function beforeeditweedd(){
         $this->model->beforeeditweedd();
    }
    function aftereditweedd(){
         $this->model->aftereditweedd();
    }
/*----------------------------------------------------------------------------------------*/

     function editrice (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('edit/editrice');
    }
    function beforeeditrice(){
         $this->model->beforeeditrice();
    }
    function aftereditrice(){
         $this->model->aftereditrice();
    }


    /*-----------------------------------------------------------------------------------------*/
     function edituser (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('edit/editprofile');
    }
    function beforeedituser1(){
         $this->model->beforeedituser1();
    }
    function afteredituser1(){
         $this->model->afteredituser1();
    }



     function editpass (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('edit/editpass');
    }
    function beforeeditpass(){
         $this->model->beforeeditpass();
    }
    function aftereditpass(){
         $this->model->aftereditpass();
    }
/*----------------------------------------------------------------------------------------*/
    //show

    function showrice (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('show/showrice');
}
    function shrice(){
        $this->model->shrice();
    }


    function showfer (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('show/showfer');
}
    function shfer(){
        $this->model->shfer();
    }


    function showweed (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('show/showweed');
}
    function shweed(){
        $this->model->shweed();
    }
    

    function showsoil (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('show/showsoil');
}
    function shsoil(){
        $this->model->shsoil();
    }

    function showuser (){
        $this->view->render('header');
        $this->view->render('left');
        $this->view->render('Right');
        $this->view->render('show/showuser');
}
    function shuser(){
        $this->model->shuser();
    }
    /* function dorp  -------------------------------------------------------------------------------------------------------*/

    function delrice(){
        $this->model->delrice();
    }

      function delweed(){
        $this->model->delweed();
    }

    function delfer(){
        $this->model->delfer();
    }

    function delsoil(){
        $this->model->delsoil();
    }
}


