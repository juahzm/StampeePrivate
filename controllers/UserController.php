<?php
namespace App\Controllers;
use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;
use App\Models\CRUD;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class UserController {

    public function index(){

        return View::render('user/index');
    
    }

    public function create(){

        return View::render('user/create');

    
    }

    public function store($data =[]){
        $validator = new Validator;
        $validator->field('nameuser', $data['nameuser'], 'le nom')-> required()->max(30);
        $validator->field('usernameuser', $data['usernameuser'], 'le Nom d utilsateur')->unique('User')->required()->max(12); 
        $validator->field('passworduser', $data['passworduser'], 'le mot de passe')-> required()->max(12);
        $validator->field('emailuser', $data['emailuser'])-> required()->email();




        // print_r($data);

        if($validator->isSuccess()) {

        $user = new User;
        $data['passworduser'] = $user->hasPassword($data['passworduser'], PASSWORD_BCRYPT, ['cost'=>10]);
        $user = new User;
        $insert = $user->insert($data);

        if($insert) {
           
            return view::redirect('user/accueil/login');

        }

    } else {
        $errors = $validator->getErrors();
        return View::render('user/create', ['errors' => $errors, 'user'=>$data]);
    }
    
    }



}