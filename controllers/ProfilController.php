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

            return  View::render('profile/index');
        }
    }

    public function store($data = [])
    {

        $data['useriduserenchere'] = $_SESSION['id_user'];
        $idtimbre = $data['idtimbre'];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";


        $mise = new Mise;
        $miseinsert = $mise->insert($data);


        return View::redirect('user/catalogue/show?idtimbre=' . $idtimbre);
    }
}
