<?php

namespace App\Models;
use App\Models\CRUD;

error_reporting(E_ALL);
ini_set('display_errors', 1);



class Image extends CRUD {
    protected $table='image';
    protected $primaryKey='idimage';
    protected $fillable = ['imageprimary', 'imageurl', 'timbreidtimbre'];
    protected $externalKey = 'timbreidtimbre';
}