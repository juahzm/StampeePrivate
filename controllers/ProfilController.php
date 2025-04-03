<?php

namespace App\Controllers;
use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;
use App\Models\Mise;
use App\Models\Enchere;
use App\Models\Timbre;

class ProfilController{
    

    public function index() {
        if(Auth::session()){

        return  View::render('profile/index');

        }
    }

    public function store($data=[]) {
        print_r($data);

    
        
        $mise = new Mise;
        $insert = $mise->insert($data);

        //sent the data to the view for retriving all mises from user, select avec le iner join enchere timbre et image

           
            return View::render('profile/index');


    }

}