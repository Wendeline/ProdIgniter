<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProduitCT extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $displayProduit = Param::find(1)->displayProduit;

        $data = array('page' => 'Accueil');
        $this->load->view('common/head', $data);
        $this->load->view('common/nav');

        $this->showMeProduit(Produit::where('activerP', 1)->get());

        $this->load->view('common/script_end_body');
        $this->load->view('common/footer');
    }

    private function page($page = null)
    {

    }

    private function showMeProduit($produits, $page = null)
    {
        $page = ($page == null) ? 1 : $page;
        $data = array('produits' => $produits);
        $this->load->view('pages/produit', $data);
    }

    private function affichage($idRef = null)
    {
        $data = array('produit' => $idRef );
        $this->load->view('pages/produit', $data);
    }



    // public function save($refProd, $nomProd, $descProd, $PUHTProd, $qteStock, $categProd) {
    //     Produit::create(array( 'refProd'   => $refProd,
    //                         'nomProd'   => $nomProd,
    //                         'descProd'  => $descProd,
    //                         'PUHTProd'  => $PUHTProd,
    //                         'qteStock'  => $qteStock,
    //                         'categProd' => $categProd
    //                      ));
    // }

    // public function mdf_stock() {
    //     Produit::where(['refProd'  => $this->input->post('refProd')])
    //           ->update(['qteStock' => $this->input->post('qteStock')]);
    // }
}
