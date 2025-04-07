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
use App\Models\Mise;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class TimbreController
{

    public function create()
    {

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

    public function store($data = [])
    {

        // $data['useriduser'] = $_SESSION['id_user'];
        // print_r($data['useriduser']);
        // die();

        $validator = new Validator;
        $validator->field('nametimbre', $data['nametimbre'], 'le nom du timbre')->required()->max(25);
        $validator->field('descriptiontimbre', $data['descriptiontimbre'], 'la description')->required()->max2(100);
        $validator->field('datecreationtimbre', $data['datecreationtimbre'], 'la date')->required();
        $validator->field('tiragetimbre', $data['tiragetimbre'], 'la tirage')->required()->number();


        if (!empty($_FILES['Imageurl']['name'])) {
            foreach ($_FILES['Imageurl']['name'] as $key => $fileName) {
                $size = $_FILES['Imageurl']['size'][$key];
                if ($size > 0) {
                    $validator->field("Imageurl[$key]", $_FILES, "Image $key")->image($key);
                }
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
                return View::redirect('user/catalogue?idtimbre=' . $idtimbre); //$insert . $insertimage
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

    public function show($data = [])
    {

        $timbre = new Timbre;
        $image = new Image;
        $enchere = new Enchere;

        $dataAll = $timbre->selectWithJoinAllId($data['idtimbre'], 'enchere', 'timbreidtimbreenchere', 'image', 'timbreidtimbre');
        // echo "<pre>";
        // print_r($dataAll);
        // echo "</pre>";
        // die();


        $timbreData = $dataAll[0];
        echo "<pre>";
        print_r($timbreData);
        echo "</pre>";

        $color = new Color;
        $select2 = $color->selectId($timbreData['coloridcolor']);
        $timbreData['coloridcolor'] = $select2[0]['namecolor'];
        echo "<pre>";
        print_r($select2);
        echo "</pre>";

        $country = new Country;
        $select3 = $country->selectId($timbreData['countryidcountry']);
        $timbreData['countryidcountry'] = $select3[0]['namecountry'];

        $condition = new Conditions;
        $select4 = $condition->selectId($timbreData['conditionsidconditions']);
        $timbreData['conditionsidconditions'] = $select4[0]['namecondition'];

        $timbreData['certifietimbre'] = $timbreData['certifietimbre'] === 1 ? 'Oui' : 'Non';


        $primaryImage = '';
        $otherImages = [];

        foreach ($dataAll as $imageData) {
            if ($imageData['imageprimary'] == 1) {
                $primaryImage = $imageData['Imageurl'];
            } else {
                $otherImages[] = $imageData['Imageurl'];
            }
        }
        $otherImages = array_merge($otherImages);
        echo "<pre>";
        print_r($otherImages);
        echo "</pre>";

        return View::render('catalogue/show', ['timbre' => $timbreData, 'images' => $dataAll, 'primaryImage' => $primaryImage, 'otherImages' => $otherImages]);
    }





    public function edit($data = [])
    {


        if (isset($data['idtimbre']) && $data['idtimbre'] != null) {
            $timbre = new Timbre;


            if ($selectId = $timbre->selectId($data['idtimbre'])) {
                $timbreData = $selectId[0];
                // print_r($timbreData);
                // die();

                $country = new Country;
                $selectall = $country->select();
                // print_r($selectall);
                $condition = new Conditions;
                $conditionselectall = $condition->select();
                $color = new Color;
                $colorselect = $color->select();

                return View::render('timbre/edit', ['timbre' => $timbreData, 'countries' => $selectall, 'conditions' => $conditionselectall, 'colors' => $colorselect]);
            }
        }
        return View::render('error');
    }

    public function update($data = [], $get = [])
    {


        $validator = new Validator;
        $validator->field('nametimbre', $data['nametimbre'], 'le nom du timbre')->required()->max(25);
        $validator->field('descriptiontimbre', $data['descriptiontimbre'], 'la description')->required()->max2(100);
        $validator->field('datecreationtimbre', $data['datecreationtimbre'], 'la date')->required();
        $validator->field('tiragetimbre', $data['tiragetimbre'], 'la tirage')->required()->number();


        if (!empty($_FILES['Imageurl']['name'])) {
            foreach ($_FILES['Imageurl']['name'] as $key => $fileName) {
                $size = $_FILES['Imageurl']['size'][$key];
                if ($size > 0) {
                    $validator->field("Imageurl[$key]", $_FILES, "Image $key")->image($key);
                }
            }
        }


        if ($validator->isSuccess()) {
            // Step 1: Delete existing images
            $img = new Image;
            $imgselect = $img->selectIdWhere($data['idtimbre']);

            foreach ($imgselect as $image) {
                $id = $image['idimage'];
                $img->delete($id);
            }


            $imageobj = new Image;
            $images = $_FILES['Imageurl'];
            $primaryImageSet = false;

            $primaryImageIndex = isset($_POST['imageprimary']) ? key($_POST['imageprimary']) : null;


            for ($index = 0; $index < count($images['name']); $index++) {
                $image = $images['name'][$index];
                $folderupload = __DIR__ . '/../public/uploads/';
                $targetfile = $folderupload . basename($image); // target location
                $moved = move_uploaded_file($images['tmp_name'][$index], $targetfile); // Move the file to the target location

                if ($moved) {

                    $data['timbreidtimbre'] = $data['idtimbre'];
                    $data['Imageurl'] = basename($image); // Store image filename in data

                    // Set primary image flag for the first image
                    if (!$primaryImageSet) {
                        $data['imageprimary'] = 1;
                        $primaryImageSet = true;
                    } else {
                        $data['imageprimary'] = 0;
                    }

                    // Insert image record into the database
                    $insertimage = $imageobj->insert($data);
                    if (!$insertimage) {
                        // Handle any insert failures here (e.g., roll back)
                        return View::render('error');
                    }
                }
            }

            // Step 3: Update timbre information
            $timbre = new Timbre;
            $update = $timbre->update($data, $get['idtimbre']);

            if ($update) {
                return View::redirect('user/catalogue');
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            return View::render('timbre/edit', ['errors' => $errors, 'timbre' => $data, 'insertimage' => $data]);
        }
    }
}




// echo "<pre>";
// print_r($insertimage);  
// echo "</pre>";
// die();     
