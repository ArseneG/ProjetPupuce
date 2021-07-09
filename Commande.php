<?php

require 'Client';

class Commande extends Client {
    protected $NumCommande;
    protected $DateCommande=time();
    protected $DateDeLivraison=time();
    protected $Num_Panier;

    public function __construct($NumCommande, $DateCommande, $DateDeLivraison, $Num_Panier){
        $this->NumCommande = $NumCommande;
        $this->DateCommande = $DateCommande;
        $this->DateDeLivraison = $DateDeLivraison;
        $this->Num_Panier = $Num_Panier;
    }

    public function GetFacture() {
        
    }
}