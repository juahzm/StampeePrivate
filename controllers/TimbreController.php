<?php

namespace App\Controllers;
use App\Providers\View;
use App\Models\User;
use App\Providers\Auth;
use App\Models\Color;
use App\Models\Conditions;
use App\Models\Country;

error_reporting(E_ALL);
ini_set('display_errors', 1);


class TimbreController{

    public function create() {

        if(Auth::session()){

        $country = new Country;
        $select= $country->select();
       

        $condition = new Conditions;
        $select2 = $condition->select();

        $color = new Color;
        $select3 = $color->select();


        return View::render('timbre/create', ['countries'=> $select, 'conditions'=> $select2, 'colors'=> $select3]);


        }


    }

    public function store() {

        
    }




}




