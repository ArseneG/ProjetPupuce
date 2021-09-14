<?php



class Client extends Personne {
    public $DateDeCréationDeCompte;
    public $Password;
    

    public function __construct($Nom, $Prenom, $Mail, $Adresse, $Cp, $Ville, $DateDeNaissance, $DateDeCréationDeCompte, $Password){
       parent::__construct($Nom, $Prenom, $Mail, $Adresse, $Cp, $Ville, $DateDeNaissance);
        $this->Nom=$Nom;
            $this->Prenom=$Prenom;
            $this->Mail=$Mail;
            $this->Adresse=$Adresse;
            $this->Cp=$Cp;
            $this->Ville=$Ville;
            $this->DateDeNaissance=$DateDeNaissance;
        $this->DateDeCréationDeCompte=$DateDeCréationDeCompte;
        $this->Password=$Password;
    }

    public function GetDateInscription(){
        echo $this->DateDeCréationDeCompte;
    }

    public function New($Nom, $Prenom, $Mail, $Adresse,$Cp, $Ville, $DateDeNaissance){
        self::$InfoClient = [$Nom, $Prenom, $Mail,
        $Adresse,$Cp, $Ville, $DateDeNaissance];
    }

    protected static function read(){
        return self::$InfoClient;
    }
    
    protected function Update(){

    }

    protected function Delete(){
        
    }

    public function helloWord(){
        echo "hello Word";
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