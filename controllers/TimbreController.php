<?php

namespace App\Controllers;
use App\Providers\View;
use App\Models\User;
use App\Providers\Auth;
use App\Models\Color;
use App\Models\Conditions;
use App\Models\Country;
use App\Models\Timbre;
use App\Models\Image;

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

    public function store($data =[]) {

    
     $data['useriduser'] = $_SESSION['id_user'];

        $timbre = new Timbre;
        $insert = $timbre->insert($data);
        if($insert) {

            $idtimbre = $timbre->getLastInsertId();
           
        }

        $image = new Image;

         echo "<pre>";
        print_r($image);
        echo "</pre>";
    


        $data['timbreidtimbre'] = $idtimbre;

        $images = $_FILES['imageurl'];

        echo "<pre>";
        print_r($images);
        echo "</pre>";
        

              $folderupload = __DIR__ . '/../public/uploads/';
              echo "<pre>";
              print_r($folderupload);
              echo "</pre>";
              
      
        $targetfile = $folderupload . basename($_FILES['imageurl']['name']);
        echo "<pre>";
              print_r($targetfile);
              echo "</pre>";
            
        $moved = move_uploaded_file($_FILES['imageurl']['tmp_name'], $targetfile);
        echo "<pre>";
        print_r($moved);
        echo "</pre>";
       
        $data['imageurl'] = basename($_FILES['imageurl']['name']);


        echo "<pre>";
        print_r($data);
        echo "</pre>";
        $image->insert($data);

        die();



        // foreach ($image as $images) {
           
        // $folderupload = __DIR__ . '/../public/uploads/';
        // $targetfile = $folderupload . basename($_FILES["imageurl"]["name"]);
        // $moved = move_uploaded_file($_FILES["imageurl"]["tmp_name"], $targetfile);
        // $data['imageurl'] = basename($_FILES["imageurl"]["name"]);

   
        //     $image->insert($data);
        // };
       
  
       
   


        if($insertimage) {
           
            echo "Merci Dieu image uploaded";

        }  else {
    echo "ne marche pas, aide Dieu";
    }

       
    }


}

        // echo "<pre>";
        // print_r($insertimage);
        // echo "</pre>";
        // die();




