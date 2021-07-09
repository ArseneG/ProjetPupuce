<?php

require 'Personne';

class Client extends Personne {
    protected $DateDeCréationDeCompte=time();
    protected $Password='';
    public static $InfoClient=[];

    public function __construct($DateDeCréationDeCompte, $Password){
        $this->DateDeCréationDeCompte=$DateDeCréationDeCompte;
        $this->Password=$Password;
    }

    public function GetDateInscription(){
        echo $this->DateDeCréationDeCompte;
    }

    protected static function New($Nom, $Prenom, $Mail, $Adresse,$Cp, $Ville, $DateDeNaissance, $Id){
        self::$InfoClient = [$Nom, $Prenom, $Mail,
        $Adresse,$Cp, $Ville, $DateDeNaissance, $Id];
    }

    protected static function read(){
        return self::$InfoClient;
    }
    
    protected function Update(){

    }

    protected function Delete(){
        
    }

    protected function Authentification(){
    
            if (!empty($_POST['Password']) AND $_POST['Password'] == $this->Password 
            AND !empty($_POST['Mail']) AND $_POST['Mail'] == $this->Mail) {
                return true ;
            }
            else {
                echo 'Veuillez rééssayer.';
            }
    }
} 