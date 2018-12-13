<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('Categorie','CategModel', TRUE);
        $lesProduits = Categorie::find(9)->produits;
        foreach ($lesProduits as $produit){
            echo $produit->nomProd . "<br>";
        }
    }
    
}