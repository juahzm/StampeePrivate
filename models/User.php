<?php

namespace App\Models;
use App\Models\CRUD;

error_reporting(E_ALL);
ini_set('display_errors', 1);



class User extends CRUD {
    protected $table='user';
    protected $primaryKey='iduser';
    protected $fillable = ['nameuser', 'usernameuser', 'passworduser', 'emailuser'];


    public function hasPassword($passworduser){
        return password_hash($passworduser, PASSWORD_BCRYPT, ['cost'=>10]); 
    }


    public function checkUser($usernameuser, $passworduser){
 
    
        $user  =$this->unique('usernameuser', $usernameuser);
        // print_r($user);
        if($user) {

            if(password_verify($passworduser, $user['passworduser'])){
                session_regenerate_id();
                 $_SESSION['id_user'] = $user['iduser'];
                 $_SESSION['name_user'] = $user['nameuser'];
                $_SESSION['user_fingerprint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);

               return true;

        }else{

            return false;
        }}else{
            return false;
        }
    
      
     }

}