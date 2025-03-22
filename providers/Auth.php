<?php
namespace App\Providers;
use App\Providers\View;

class Auth {
    static public function session(){
        if(isset($_SESSION['user_fingerprint']) && $_SESSION['user_fingerprint'] == md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
            return TRUE;
        }else{
            return view::redirect('user/accueil/login');
            exit();
        }
    }
  

}




