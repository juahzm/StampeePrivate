<?php

namespace App\Controllers;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;
use App\Models\Timbre;
use App\Models\Image;
use App\Models\Color;
use App\Models\Conditions;
use App\Models\Country;

error_reporting(E_ALL);
ini_set('display_errors', 1);


class CatalogueController{
    

    public function index() {
        

        return  View::render('catalogue/index');

    }
}







