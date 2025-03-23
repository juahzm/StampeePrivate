<?php

namespace App\Models;
use App\Models\CRUD;

error_reporting(E_ALL);
ini_set('display_errors', 1);



class Country extends CRUD {
    protected $table='country';
    protected $primaryKey='idcountry';
    protected $fillable = ['namecountry'];
}
