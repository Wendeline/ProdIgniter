<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prod extends CI_Controller {
    
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
        
        $this->load->view('AjoutProd_form');
        
        $this->load->view('common/footer');
    }
        
    public function Update()
    {
        $this->load->view('common/header.php');
        $this->load->view('common/nav');
        
        $this->load->view('UpdateProd_form');
        
        $this->load->view('common/footer');
    }
    
    public function Delete()
    {
        $this->load->view('common/header.php');
        $this->load->view('common/nav');
        
        $this->load->view('DeleteProd_form');
        
        $this->load->view('common/footer');
    }
    
    public function Ajout()
    {
        $img = $this->input->post('img');
        //Sauvegarde de l'image dans le dossier assets/images/prod
        $config['upload_path'] = '../../assets/images/prod/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '200';
        $config['max_width'] = '200';
        $config['max_height'] = '200';
        $this->load->library('upload', $config);
        
//        $upload_data = $this->upload->data();
//        $this->db->set('../../assets/images/prod/', $upload_data[$img]);
        
        if (!$this->upload->do_upload($img)) 
        {
            
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
          //Ajout du produit dans la base de données
            $addProd = new Produit();

            $addProd->refProd = $this->input->post('ref');
            $addProd->nomProd = $this->input->post('nom');
            $addProd->descProd = $this->input->post('desc');
            $addProd->PUHTProd = $this->input->post('prix');
            $addProd->dateAjoutProd = Date("Y-m-d");
            $addProd->qteStock = 0;
            $addProd->categProd = $this->input->post('cat');
            $addProd->save();
            
            //redirect('Home');
        }
        else
        {
            $this->load->view('common/header.php');
            $this->load->view('common/nav');
            echo '<p style="color:black;">Echec lors de l\'ajout du produit</p>';
            $this->load->view('AjoutProd_form');

            $this->load->view('common/footer');
        }
    }
    
    public function Modif()
    {
        
    }
    
    public function Enleve()
    {
        
    }
}