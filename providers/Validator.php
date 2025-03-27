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

    public function number()
    {
        if (!empty($this->value) && !is_numeric($this->value)) {
            $this->errors[$this->key] = "$this->name doit être un numéro!";
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

    public function image($key) {
        
       
        
         if(empty($this->value['imageurl']['tmp_name'][$key])){
            $this->errors[$this->key] [$key] = "Aucun fiche télechargé" . ($key +1);
            return $this;

         }

        $target_file = $_SERVER["DOCUMENT_ROOT"] . UPLOAD . basename($this->value['imageurl']['name'][$key]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if its an image
        $check = getimagesize($this->value['imageurl']['tmp_name'][$key]);
        if ($check == false) {
            $this->errors[$this->key] [$key] = "le format" . ($key+1). "n'est pas sopporté.";
        };

        //Check file size. no more than 500KB
        if ($this->value['imageurl']['size'][$key] > 500000) {
            $this->errors[$this->key] [$key] = "Limage" .($key+1). "est trop grande, moins de 500KB,svp.";
        }

        // Allow just img formats

        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png'] )) {
            $this->errors[$this->key][$key] = "téléversez une image en format JPG, JPEG, ou PNG, svp";
        }

        return $this;

    

    }

}