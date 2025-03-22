<?php

namespace App\Controllers;
use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;

error_reporting(E_ALL);
ini_set('display_errors', 1);


class AuthController {

    public function index(){

        return View::render('auth/index');


    }

    public function store($data=[]){
       

        $validator = new Validator;
        $validator->field('usernameuser', $data['usernameuser'], 'le nom dutilisateur')->required()->max(12);
        $validator->field('passworduser', $data['passworduser'], 'le mot de passe' )-> required()->max(12);

        if($validator->isSuccess()){

            $user = new User;
            $check = $user->checkUser($data['usernameuser'], $data['passworduser']);
            if ($check) {
                print_r($_SESSION);
                return View::redirect('user/profil');

            } else{
                return View::render('auth/index');
                }
            }else{
             
                $errors= $validator->getErrors();
                return View::render('auth/index', ['errors'=>$errors, 'user'=>$data]);

            }



        
    }

    public function delete(){

            session_destroy();
            return View::redirect('user/accueil/login');
    


    }
}


