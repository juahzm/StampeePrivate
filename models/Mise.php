<?php

namespace App\Models;

use App\Models\CRUD;

error_reporting(E_ALL);
ini_set('display_errors', 1);



class Mise extends CRUD
{
    protected $table = 'mise';
    protected $primaryKey = 'idmise';
    protected $fillable = ['datedemise', 'valeurdemise', 'enchereidenchere', 'useriduserenchere'];
    protected $externalKey1 = 'enchereidenchere';
    protected $externalKey2 = 'useriduserenchere';
}
