<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorie extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->admin != TRUE) {
            redirect('/Login');
        }
    }
    
    public function index()
    {
        
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
}