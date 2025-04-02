<?php

namespace App\Models;
use App\Models\CRUD;

error_reporting(E_ALL);
ini_set('display_errors', 1);


class Enchere extends CRUD {

    protected $table='enchere';
    protected $primaryKey='idenchere';
    protected $fillable = ['priceenchere', 'lordfavoriteenchere', 'startdateperiod', 'enddateperiod'];
    protected $externalKey = 'timbreidtimbreenchere';
    
}