<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if ($this->session->admin != TRUE) {
            redirect('/Login');
        }
    }

    public function index()
    {
        $this->load->view('common/header.php');
        $this->load->view('common/nav');

        $data = array('categs' => Categorie::all());
        $this->load->view('CategUpdateDelete', $data);

        $this->load->view('AjoutCateg_form');

        $this->load->view('common/footer');
    }

    public function Ajout()
    {
        $libel = $this->input->post('lib');
        $addCateg = new Categorie;

       $addCateg->libCateg = $libel;
        $addCateg->save();

       redirect('cat');
    }

    public function Modif($id)
    {
        $lib = $this->input->post('lib');
        Categorie::where('idCateg',$id)
                ->update(['libCateg'=>$lib]);
        redirect('Cat');
    }

    public function Enleve($id)
    {
        $obj = Categorie::find($id);
        $lesProduits = $obj->produits;
        $nbProd = count($lesProduits);
        if ($nbProd ==0){
            $obj->delete();
            redirect('Cat');
        }else{
            $this->load->view('common/header.php');
            $this->load->view('common/nav');

            $data = array('categs' => Categorie::all());
            $this->load->view('CategUpdateDelete', $data);

            $this->load->view('AjoutCateg_form');

            $this->load->view('common/footer');

        }
    }
}
