<?php

namespace App\Controllers;

use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;
use App\Models\Mise;
use App\Models\Enchere;
use App\Models\Timbre;

class ProfilController
{


    public function index()
    {

        if (Auth::session()) {



            $sessionid = $_SESSION['id_user'];
            // print_r($sessionid);

            $mise = new Mise;
            $miseSelect0 = $mise->selectWithJoinAll3($sessionid, 'enchere', 'enchereidenchere', 'idenchere',  'timbre', 'timbreidtimbreenchere',  'idtimbre',  'image', 'timbreidtimbre');
            // echo "<pre>";
            // print_r($miseSelect0);
            // echo "</pre>";


            return  View::render('profile/index', ['mise' => $miseSelect0]);
        }
    }




    public function store($data = [])
    {

        $data['useriduserenchere'] = $_SESSION['id_user'];
        $idtimbre = $data['idtimbre'];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $validator = new Validator;
        $validator->field('valeurdemise', $data['valeurdemise'], 'doit etre un numero')->required()->number();

        if ($validator->isSuccess()) {

            $mise = new Mise;
            $miseSelect = $mise->select();
            $miseinsert = $mise->insert($data);
        } else {
            $errors = $validator->getErrors();
        }
        return View::redirect('user/catalogue/show?idtimbre=' . $idtimbre, ['miseSelect' => $miseSelect, 'errors' => $errors]);
    }
}
