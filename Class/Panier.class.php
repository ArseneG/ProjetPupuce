<?php

require 'Commande';

class Panier extends Commande{
    protected $ClientId;
    protected $ProduitId;
    protected $Num_Paniers;

    public function __construct($ClientId, $ProduitId, $Num_Paniers) {
        $this->ClientId = $ClientId;
        $this->ProduitId = $ProduitId;
        $this->Num_Paniers = $Num_Paniers;
    }

    protected function DeleteProduit(){

    }

    protected function NewProduit(){

    }

    protected function ValidePanier(){

    }
}