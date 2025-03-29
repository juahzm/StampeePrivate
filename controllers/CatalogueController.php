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

        $timbre = new Timbre;
        $select = $timbre->select();
        $image = new Image;
        $selectimg = $image->select();
        // echo "<pre>";
        // print_r($select);
        // echo "</pre>";
        // die();

        foreach ($select as &$timbre) {
            // Find the associated image for each timbre using timbreidtimbre
            $timbre['imageurl'] = null; // Default value if no image is found
            foreach ($selectimg as $img) {
                if ($img['timbreidtimbre'] == $timbre['idtimbre']) {
                    $timbre['imageurl'] = $img['imageurl']; // Set the imageurl field directly in the timbre object
                    break; // Stop searching once the matching image is found
                }
            }
        }
    
        
        return  View::render('catalogue/index', ['timbres' => $select]);

    }




 
}









