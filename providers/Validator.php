<?php
namespace App\Providers;
use App\Models;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Validator {
    private $errors = array();
    private $key;
    private $value;
    private $name; //ppur renomer le champ de validation


    public function field($key, $value, $name = null){
        $this->key = $key;
        $this->value = $value;
        if($name == null) {
            $this->name = ucfirst($key); //upercasefirstcharacter
        }else {
            $this->name =ucfirst($name);
        }
        return $this; //methode enchaine, return l'objet


    }

    //si la donne existe ou pas
    public function required() {
        if(empty($this->value)){
            $this->errors[$this->key] = "$this->name est requis";
        }
        return $this;
    }
    public function max($length) {
        if(strlen($this->value)> $length){
            $this->errors[$this->key]= "$this->name doit contenir moins de 12 caractères";
            
        }
        return $this;

    }

    public function email() {
        if (!empty($this->value) && !filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$this->key]="l'e-mail est invalid, $this->name a besoin de @ et .";
        }
        return $this;
    }

    public function isSuccess() {
        if(empty($this->errors))
        return true;

    }

    public function getErrors() {
        if(!$this->isSuccess()){
            return $this->errors;
        }
    }

    public function unique($model){
        $model = 'App\\Models\\'.$model;
        $model = new $model;
        $unique = $model->unique($this->key, $this->value);
        if($unique){
            $this->errors[$this->key]="$this->name doit être unique.";
        }
        return $this;
    }





}