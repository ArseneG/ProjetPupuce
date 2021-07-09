<?php
    abstract class Personne {
        protected $Nom = 'testN';
        protected $Prenom = 'testP';
        protected $Mail = 'test@test.com';
        protected $Adresse = '181 moyenne corniche des pugets';
        protected $Cp = '06700';
        protected $Ville = 'st laurent du var';
        protected $DateDeNaissance = time();
        protected $Id;

        public function __construct($Nom, $Prenom, $Mail, $Adresse, $Cp, $Ville, $DateDeNaissance, $Id) {
            $this->Nom=$Nom;
            $this->Prenom=$Prenom;
            $this->Mail=$Mail;
            $this->Adresse=$Adresse;
            $this->Cp=$Cp;
            $this->Ville=$Ville;
            $this->DateDeNaissance=$DateDeNaissance;
            $this->Id=$Id;
        }
        
        public function Modifier_info($information) {
            if (is_array($information)){
                foreach($information as $key => $value){
                    $this->$key=$value;           
                }
                return true;
                } else {
                    return false;
            }
        }

        public function getters($Nom){
            return $this->$Nom;
        }

        public function setters($Nom, $Value){
            return $this->$Nom = $Value;
        }
    }