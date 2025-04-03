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
use App\Models\Enchere;
use App\Models\Mise;

error_reporting(E_ALL);
ini_set('display_errors', 1);


class CatalogueController{
    
    
    public function index() {
        
        $timbre = new Timbre;
        $select = $timbre->select();
        $image = new Image;
        $selectimg = $image->select();
        
        $enchere = new Enchere;
        $selectEnchere = $enchere->select();
        echo "<pre>";
        print_r($selectEnchere); 
        echo "</pre>";
        
        
        foreach ($select as &$timbreRecord) {
            
            $timbreRecord['encheres'] = [];
            
            foreach ($selectEnchere as $enchereRecord) {
                if ($enchereRecord['timbreidtimbreenchere'] == $timbreRecord['idtimbre']) {
                    $timbreRecord['encheres'][] = $enchereRecord; // Attach the entire enchere record to the timbre
                    
                }
            }
            // echo "<pre>";
            // print_r($timbreRecord['encheres']); 
            // echo "</pre>";
            
            
            foreach ($selectimg as $img) {
                
                //     echo "<pre>";
                //     print_r($selectimg); 
                // echo "</pre>";
                
                
                if ($img['timbreidtimbre'] == $timbreRecord['idtimbre'] && $img['imageprimary'] == 1) {
                    $timbreRecord['Imageurl'] = $img['Imageurl'];
                    
                    
                }
            }
        }
        
        return  View::render('catalogue/index', ['timbres' => $select]);
        
    }
    
    
    
    
    
    
}









