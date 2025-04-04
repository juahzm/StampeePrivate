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
            $this->errors[$this->key]= "$this->name doit contenir moins de 25 caractères";
            
        }
        return $this;

    }

    public function max2($length) {
        if(strlen($this->value)> $length){
            $this->errors[$this->key]= "$this->name doit contenir moins de 100 caractères";
            
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
        
       
        
        if (empty($this->value['Imageurl']['tmp_name'][$key])) {
            $this->errors["Imageurl[$key]"] = "Aucun fichier téléversé " . ($key + 1);
            return $this;
        }
        

        $target_file = $_SERVER["DOCUMENT_ROOT"] . UPLOAD . basename($this->value['Imageurl']['name'][$key]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        $check = getimagesize($this->value['Imageurl']['tmp_name'][$key]);

        if ($check == false) {
            $this->errors["Imageurl[$key]"] = "Le fichier " . ($key + 1) . " n'est pas une image valide.";
        }
        if ($this->value['Imageurl']['size'][$key] > 1000000) {
            $this->errors["Imageurl[$key]"] = "L'image " . ($key + 1) . " est trop grande, moins de 1MB svp.";
        }
        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
            $this->errors["Imageurl[$key]"] = "Téléversez une image au format JPG, JPEG ou PNG, svp.";
        }
        

        return $this;

    

    }

}