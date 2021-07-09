<?php

require 'Fournisseur';

class Produits extends Fournisseur {
    protected $Id;
    protected $Nom='';
    protected $Description='';
    protected $Image='';
    protected $Prix;
    protected $QuantitéEnStock=1;
    public static $Articles;

    public function __construct($Id, $Nom, $Description, $Image, $Prix, $QuantitéEnStock){
        $this->Id = $Id;
        $this->Nom = $Nom;
        $this->Description = $Description;
        $this->Image = $Image;
        $this->Prix = $Prix;
        $this->QuantitéEnStock = $QuantitéEnStock;
    }

    public function getInfo(){
        return self::$Articles;
    }

    protected function updateProduit(){

    }

    protected function deleteProduit(){

    }

    protected function createProduit(){
        self::$Articles = [$this->Id, $this->Nom, $this->Description,
        $this->Image,$this->Prix];
    }
}