<?php

require 'Personne';

class Employe extends Personne {
    protected $NumSecu;
    protected $Fonction='Employé';
    protected $Salaire=1300;
    protected $Superieur;
    public static $InfoEmploye;

    public function __construct($NumSecu, $Fonction, $Salaire, $Superieur,$Nom, $Prenom, $Mail, $Adresse, $Cp, $Ville, $DateDeNaissance, $Id){
        parent::__construct($Nom, $Prenom, $Mail, $Adresse, $Cp, $Ville, $DateDeNaissance, $Id);
        $this->NumSecu = $NumSecu;
        $this->Fonction = $Fonction;
        $this->Salaire = $Salaire;
        $this->Superieur = $Superieur;
    }

    protected static function Promotion($Fonction, $Salaire){
        self::$InfoEmploye[] = [$Fonction == 'responsable', $Salaire * 1.1];
    }
    
    protected static function New($Nom, $Prenom, $Mail, $Adresse,$Cp, $Ville, $DateDeNaissance, $Id, $NumSecu, $Fonction, $Salaire, $Supérieur){
        self::$InfoEmploye[] = [$Nom, $Prenom, $Mail, $Adresse,$Cp, $Ville, $DateDeNaissance, $Id,
        $NumSecu, $Fonction, $Salaire, $Supérieur];
    }

    protected function Update(){

    }

    protected function Delete(){

    }

    protected static function read(){
        return self::$InfoEmploye;
    }
} 