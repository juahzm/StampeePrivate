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
use App\Providers\Validator;

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

        $validator = new Validator;
        $validator->field('nametimbre', $data['nametimbre'], 'le nom du timbre')-> required()->max(20);
        $validator->field('descriptiontimbre', $data['descriptiontimbre'], 'la description')-> required()->max(200);
        $validator->field('datecreationtimbre', $data['datecreationtimbre'], 'la date')-> required();
        $validator->field('tiragetimbre', $data['tiragetimbre'], 'la tirage')-> required()->number();
        if ($_FILES['imageurl']['size'] > 0) {
            foreach ($_FILES['imageurl']['name'] as $key => $fileName){
            $validator->field('imageurl', $_FILES, 'Limage')->image($key);
        }
        }

        if ($validator->isSuccess()) {


        $timbre = new Timbre;
        $insert = $timbre->insert($data);
        if($insert) {
            $idtimbre = $timbre->getLastInsertId();
        }

        $imageobj = new Image;
        $data['timbreidtimbre'] = $idtimbre;
         $images = $_FILES['imageurl'];
         
            for ($index = 0; $index < count($images['name']); $index++) {
             $image = $images['name'][$index];
            
             $folderupload = __DIR__ . '/../public/uploads/'; 
            $targetfile = $folderupload . basename($image);//target location
            $moved = move_uploaded_file($images['tmp_name'][$index], $targetfile);// Move the file to the target location
            $data['imageurl'] = basename($image); // Prepare the data for insert

          $insertimage = $imageobj->insert($data);
        
    
}
        if($insertimage &&  $insert) {
            return View::redirect('user/catalogue');}   

        
        
}else{
    $errors = $validator->getErrors();
        return View::render('timbre/create', ['errors' => $errors, 'timbre'=>$data, 'imageobj'=>$data]);


}


}


}

        

        
  

   





