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

    public function Update($ref = null)
    {
        if ($ref == null ) redirect('/Home');
        $this->load->view('common/header.php');
        $this->load->view('common/nav');


        $data = array('produit' => Produit::find($ref));
        $this->load->view('UpdateProd_form', $data);

        $this->load->view('common/footer');
    }






    public function Delete($ref = null)
    {
        if ($ref == null ) redirect('/Home');
        $this->load->view('common/header.php');
        $this->load->view('common/nav');

        if (Produit::find($ref)->qteStock == 0) {
            $data = array('produit' => Produit::find($ref));
            $this->load->view('DeleteProd_form', $data);
        }
        else {
            redirect('/Home');
        }

        $this->load->view('common/footer');
    }







    public function Ajout()
    {
  //     $img = $this->input->post('img');
  //     //Sauvegarde de l'image dans le dossier assets/images/prod
  //     $config['upload_path'] = '../../assets/images/prod/';
  //     $config['allowed_types'] = 'jpg';
  //     $config['max_size'] = '200';
  //     $config['max_width'] = '200';
  //     $config['max_height'] = '200';
  //     $this->load->library('upload', $config);
  //
  // //        $upload_data = $this->upload->data();
  // //        $this->db->set('../../assets/images/prod/', $upload_data[$img]);

        // ||||||||||||||||| //
        $error = "";
        if ($_FILES['image'] != null && $_FILES['image']['error'] == 0) {
            $size = getimagesize($_FILES['image']['tmp_name']);

            if ($size[0] <= 200 && $size[1] <= 200) {
                $ext = strtolower(substr(strrchr($_FILES['image']['name'], '.'),1));
                var_dump($ext);
                if ($ext == 'jpg') {
                    $nom = 'assets/images/prod/' . $this->input->post('ref'). '.jpg';
                    $resultat = move_uploaded_file($_FILES['image']['tmp_name'],  $nom);
                    if (!$resultat) {
                        $error = "Le fichier n'as pas pu etre deplacer dans le dossier";
                    }
                }
                else {
                    $error = "Fichier a une extention invalide (.jpg uniquement)";
                }
            }
            else {
                $error = "Fichier est supérieur a : 200x200px";
            }
        }
        else {
            $error = "Fichier non envoyer ou erreur inconnu";
        }

        if ($error === "") {
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

            redirect('Home');
        }
        else
        {
            $this->load->view('common/header.php');
            $this->load->view('common/nav');

            echo '<h1 style="color:black;">Echec lors de l\'ajout du produit</h1>';
            echo '<p style="color:black;">'. $error .'</p>';
            $this->load->view('AjoutProd_form');

            $this->load->view('common/footer');
        }
    }







    public function Modif($ref = null)
    {
      if ($ref == null ) redirect('/Home');

      $error = "";
      if ($_FILES['image'] != null && $_FILES['image']['error'] == 0) {
          $size = getimagesize($_FILES['image']['tmp_name']);

          if ($size[0] <= 200 && $size[1] <= 200) {
              $ext = strtolower(substr(strrchr($_FILES['image']['name'], '.'),1));
              var_dump($ext);
              if ($ext == 'jpg') {
                  $nom = 'assets/images/prod/' . $ref . '.jpg';
                  $resultat = move_uploaded_file($_FILES['image']['tmp_name'],  $nom);
                  if (!$resultat) {
                      $error = "Le fichier n'as pas pu etre deplacer dans le dossier";
                  }
              }
              else {
                  $error = "Fichier a une extention invalide (.jpg uniquement)";
              }
          }
          else {
              $error = "Fichier est supérieur a : 200x200px";
          }
      }
      else {
          $error = ""; //il est posible de ne pas changer l'image donc pas d'erreur ici
      }

      $produit = Produit::find($ref);
      if ($error === "" && $produit != null) {

          Produit::where('refProd', $ref )
                      ->update([  'nomProd'   => $this->input->post('nom'),
                                  'descProd'  => $this->input->post('desc'),
                                  'PUHTProd'  => $this->input->post('prix'),
                                  'categProd' => $this->input->post('cat')
                              ]);

          redirect('Prod/Update/'. $ref .'?ok');
      }
      else
      {
          $this->load->view('common/header.php');
          $this->load->view('common/nav');

          echo '<h1 style="color:black;">Echec lors de la modification du produit</h1>';
          echo '<p style="color:black;">'. $error .'</p>';

          $data = array('produit' => Produit::find($ref));
          $this->load->view('UpdateProd_form', $data);

          $this->load->view('common/footer');
      }

    }

    public function Enleve($ref = null)
    {
      if ($ref == null ) redirect('/Home');
      Produit::find($ref)->delete();
      redirect('/Home');
    }
}
