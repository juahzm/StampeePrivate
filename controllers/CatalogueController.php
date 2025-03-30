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
        
       
      
        
        foreach ($select as $timbreRecord) {
            
             
            foreach ($selectimg as $img) {

            //     echo "<pre>";
            //     print_r($selectimg); 
            // echo "</pre>";
           


                if ($img['timbreidtimbre'] == $timbreRecord['idtimbre'] && $img['imageprimary'] == 1) {
                    $timbreRecord['Imageurl'] = $img['Imageurl']; // Set the imageurl field directly in the timbre object
                      
               echo "<pre>";
               print_r($img['Imageurl']); 
           echo "</pre>";
           
                }
            }
        }
        
               echo "<pre>";
            print_r($img['timbreidtimbre']); 
        echo "</pre>";
       
        
        return  View::render('catalogue/index', ['timbres' => $select]);
        
    }
    
    
    
    
    
}









