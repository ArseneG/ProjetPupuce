<?php
    abstract class Personne {
        public $Nom ;
        public $Prenom ;
        public $Mail ;
        public $Adresse ;
        public $Cp ;
        public $Ville ;
        public $DateDeNaissance ;

        public function __construct($Nom, $Prenom, $Mail, $Adresse, $Cp, $Ville, $DateDeNaissance) {
            $this->Nom=$Nom;
            $this->Prenom=$Prenom;
            $this->Mail=$Mail;
            $this->Adresse=$Adresse;
            $this->Cp=$Cp;
            $this->Ville=$Ville;
            $this->DateDeNaissance=$DateDeNaissance;
            
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