<?php

class ProduitFournisseurs{
    protected $fournisseur_id;
    protected $produit_id;
    protected $Quantite;

    public function __construct($fournisseur_id, $produit_id, $quantite){
        $this->fournisseur_id = $fournisseur_id;
        $this->produit_id = $produit_id;
        $this->quantite = $quantite;
    }
}