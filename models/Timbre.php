<?php

namespace App\Models;
use App\Models\CRUD;

error_reporting(E_ALL);
ini_set('display_errors', 1);



class Timbre extends CRUD {
    protected $table='timbre';
    protected $primaryKey='idtimbre';
    protected $fillable = ['nametimbre', 'descriptiontimbre', 'historyvaluetimbre', 'datecreationtimbre', 'dimensiontimbre', 'certifietimbre', 'tiragetimbre', 'useriduser', 'countryidcountry', 'conditionsidconditions', 'coloridcolor'];

}

