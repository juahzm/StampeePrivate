<?php

namespace App\Controllers;
use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;

class ProfilController{
    

    public function index() {
        if(Auth::session()){

        return  View::render('profile/index');

    }
}

}