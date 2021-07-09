<?php

require 'Personne';

class Fournisseur extends Personne {
    protected $CodeComptable;
    public static $InfoFournisseur;

    public function __construct($CodeComptable){
        $this->CodeComptable = $CodeComptable;
    }

    protected static function New($Nom, $Prenom, $Mail, $Adresse,$Cp, $Ville, $DateDeNaissance, $Id){
        self::$InfoFournisseur = [$Nom, $Prenom, $Mail, $Adresse,$Cp, $Ville, $DateDeNaissance, $Id];
    }

    protected static function Read(){
        return self::$InfoFournisseur;
    }

    protected function Update(){

    }

    protected function Delete(){

    }
}