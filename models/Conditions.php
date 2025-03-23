<?php

namespace App\Models;
use App\Models\CRUD;

error_reporting(E_ALL);
ini_set('display_errors', 1);



class Conditions extends CRUD {
    protected $table='conditions';
    protected $primaryKey='idcondition';
    protected $fillable = ['namecondition'];
}
