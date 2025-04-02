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
use App\Models\Enchere;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class TimbreController {
    
    public function create() {
        
        if (Auth::session()) {
            
            $country = new Country;
            $select = $country->select();
            
            $condition = new Conditions;
            $select2 = $condition->select();
            
            $color = new Color;
            $select3 = $color->select();
            
            return View::render('timbre/create', ['countries' => $select, 'conditions' => $select2, 'colors' => $select3]);
        }
    }

    public function store($data = []) {
        
        $data['useriduser'] = $_SESSION['id_user'];
        
        $validator = new Validator;
        $validator->field('nametimbre', $data['nametimbre'], 'le nom du timbre')->required()->max(25);
        $validator->field('descriptiontimbre', $data['descriptiontimbre'], 'la description')->required()->max2(100);
        $validator->field('datecreationtimbre', $data['datecreationtimbre'], 'la date')->required();
        $validator->field('tiragetimbre', $data['tiragetimbre'], 'la tirage')->required()->number();
        
        if ($_FILES['Imageurl']['size'] > 0) {
            foreach ($_FILES['Imageurl']['name'] as $key => $fileName) {
                $validator->field('Imageurl', $_FILES, 'Limage')->image($key);
            }
        }
        
        if ($validator->isSuccess()) {
            
            $timbre = new Timbre;
            $insert = $timbre->insert($data);
            if ($insert) {
                $idtimbre = $timbre->getLastInsertId();
            }
            
            $imageobj = new Image;
            $data['timbreidtimbre'] = $idtimbre;
            $images = $_FILES['Imageurl'];
            $primaryImageSet = false;
            
            $primaryImageIndex = isset($_POST['imageprimary']) ? key($_POST['imageprimary']) : null;
            
            for ($index = 0; $index < count($images['name']); $index++) {
                $image = $images['name'][$index];
                
                $folderupload = __DIR__ . '/../public/uploads/';
                $targetfile = $folderupload . basename($image); // target location
                $moved = move_uploaded_file($images['tmp_name'][$index], $targetfile); // Move the file to the target location
                $data['Imageurl'] = basename($image); // Prepare the data for insert
                
                if (!$primaryImageSet) {
                    $data['imageprimary'] = 1;
                    $primaryImageSet = true;
                } else {
                    $data['imageprimary'] = 0;
                }
                
                $insertimage = $imageobj->insert($data);
                    // echo "<pre>";
                    // print_r($data);  
                    // echo "</pre>";
                    // die(); 
                
            }
            
            if ($insertimage && $insert) {
                return View::redirect('user/catalogue?idtimbre=' . $idtimbre);//$insert . $insertimage
            }
        } else {
            $errors = $validator->getErrors();
            $c1 = new Country;
            $c1select = $c1->select();
            $co1 = new Color;
            $co1select = $co1->select();
            $con1 = new Conditions;
            $con1select = $con1->select();
            
            return View::render('timbre/create', ['errors' => $errors, 'timbre' => $data, 'insertimage' => $data, 'countries' => $c1select, 'conditions' => $con1select, 'colors' => $co1select]);
        }
    }

    public function show($data = []) {
        
        if (isset($data['idtimbre']) && $data['idtimbre'] != null) {
            $timbre = new Timbre;
            
            if ($selectId = $timbre->selectId($data['idtimbre'])) {
                $timbreData = $selectId[0];
                // print_r($timbreData);
                
                $color = new Color;
                $select2 = $color->selectId($timbreData['coloridcolor']);
                $timbreData['coloridcolor'] = $select2[0]['namecolor'];
                
                $country = new Country;
                $select3 = $country->selectId($timbreData['countryidcountry']);
                $timbreData['countryidcountry'] = $select3[0]['namecountry'];
                
                $condition = new Conditions;
                $select4 = $condition->selectId($timbreData['conditionsidconditions']);
                $timbreData['conditionsidconditions'] = $select4[0]['namecondition'];

                $image = new Image;
                
                $selectImage = $image->selectIdWhere($data['idtimbre']);
                // echo "<pre>";
                // print_r($selectImage);
                // echo "</pre>";
                // die();

                $enchere = new Enchere;
                $selectEnchere = $enchere->selectIdWhere($data['idtimbre']);
                //     echo "<pre>";
                // print_r($selectEnchere);
                // echo "</pre>";

                $timbreData['enchere'] = $selectEnchere[0];
                     echo "<pre>";
                print_r( $timbreData['enchere']);
                echo "</pre>";
              

                // Accessing the first item (0-indexed)
                //The reason we use $selectEnchere[0] is to extract the first record from the results of the query. This is helpful when you know that you expect only one enchere for the given idtimbre. By using $selectEnchere[0], you're extracting the data for the first (and possibly only) enchere related to the current timbre.


                
                
    
            $primaryImage = null;
            $otherImages = [];

            foreach ($selectImage as $img) {
                if ($img['imageprimary'] == 1) {
                    
                    $primaryImage = $img['Imageurl'];
                } else {
                    
                    $otherImages[] = $img['Imageurl'];
                }
            }

            $timbreData['imageprimary'] =$primaryImage;
            $timbreData['otherImages'] = $otherImages;
            // echo "<pre>";
            // print_r( $timbreData['imageprimary']);  
            // echo "</pre>";
            // echo "<pre>";
            // print_r( $timbreData['otherImages']);  
            // echo "</pre>";
               

          
                
                $timbreData['certifietimbre'] = ($timbreData['certifietimbre'] == 1) ? "Oui" : "Non";
                
                return View::render('catalogue/show', ['timbre' => $timbreData, 'color' => $select2[0], 
                'country' => $select3[0], 'condition' => $select4[0]]);
            } else {
                return View::render('error', ['msg' => 'le timbre n existe pas']);
            }
        }
        return View::render('error');
    }

    public function edit($data = []) {
        
        if (isset($data['idtimbre']) && $data['idtimbre'] != null) {
            $timbre = new Timbre;
            
            if ($selectId = $timbre->selectId($data['idtimbre'])) {
                $timbreData = $selectId[0];
                
                $country = new Country;
                $selectall = $country->select();
                $condition = new Conditions;
                $conditionselectall = $condition->select();
                $color = new Color;
                $colorselect = $color->select();
                
                return View::render('timbre/edit', ['timbre' => $timbreData, 'countries' => $selectall, 'conditions' => $conditionselectall, 'colors' => $colorselect]);
            }
        }
        return View::render('error');
    }

    public function update($data = [], $get = []) {
        
        $data['useriduser'] = $_SESSION['id_user'];
        
        $validator = new Validator;
        $validator->field('nametimbre', $data['nametimbre'], 'le nom du timbre')->required()->max(25);
        $validator->field('descriptiontimbre', $data['descriptiontimbre'], 'la description')->required()->max2(100);
        $validator->field('datecreationtimbre', $data['datecreationtimbre'], 'la date')->required();
        $validator->field('tiragetimbre', $data['tiragetimbre'], 'la tirage')->required()->number();
        
        if ($_FILES['Imageurl']['size'] > 0) {
            foreach ($_FILES['Imageurl']['name'] as $key => $fileName) {
                $validator->field('Imageurl', $_FILES, 'Limage')->image($key);
            }
        }
        
        if ($validator->isSuccess()) {
            
            $timbre = new Timbre;
            $update = $timbre->update($data, $get['idtimbre']);
            
            if ($update) {
                return view::redirect('user/catalogue');
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            return View::render('timbre/edit', ['errors' => $errors, 'timbre' => $data]);
        }
    }
}


    
    
    // echo "<pre>";
    // print_r($insertimage);  
    // echo "</pre>";
    // die();     
    
    
    
    
    
    
    
    
    
    
    