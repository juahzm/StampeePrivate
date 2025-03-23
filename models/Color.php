<?php

namespace App\Models;
use App\Models\CRUD;

error_reporting(E_ALL);
ini_set('display_errors', 1);



class Color extends CRUD {
    protected $table='color';
    protected $primaryKey='idcolor';
    protected $fillable = ['namecolor'];
}
