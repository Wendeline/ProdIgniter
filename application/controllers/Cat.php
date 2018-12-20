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
    
    public function Add()
    {
        $this->load->view('common/header.php');
        $this->load->view('common/nav');
        
        $this->load->view('AjoutCateg_form');
        
        $this->load->view('common/footer');
    }
        
    public function Update()
    {
        $this->load->view('common/header.php');
        $this->load->view('common/nav');
        
        $this->load->view('UpdateCateg_form');
        
        $this->load->view('common/footer');
    }
    
    public function Delete()
    {
        $this->load->view('common/header.php');
        $this->load->view('common/nav');
        
        $this->load->view('DeleteCateg_form');
        
        $this->load->view('common/footer');
    }
    
    public function Ajout()
    {
        $libel = $this->input->post('lib');
        $addCateg = new Categorie;
        
       $addCateg->libCateg = $libel;
        $addCateg->save();
        
       redirect('Home');
    }
    
    public function Modif()
    {
        $id = $this->input->post('id');
        $lib = $this->input->post('lib');
        Categorie::where('idCateg',$id)
                ->update(['libCateg'=>$lib]);
        redirect('Home');
    }
    
    public function Enleve()
    {
        $id = $this->input->post('id');
        $obj = Categorie::find($id);
        $lesProduits = $obj->produits;
        $nbProd = count($lesProduits);
        if ($nbProd ==0){
            $obj->delete();
            redirect('Home');
        }else{
            $this->load->view('common/header.php');
            $this->load->view('common/nav');
            
            echo '<p style="color:black;">Il existe encore des produits de cette catégorie, suppression impossible</p>';
            $this->load->view('DeleteCateg_form');

            $this->load->view('common/footer');
       
        }
    }
}