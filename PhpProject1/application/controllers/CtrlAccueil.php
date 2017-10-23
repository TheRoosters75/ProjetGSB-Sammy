<?php

class CtrlAccueil extends CI_Controller
{
    public function index()
    {
        $data['titre'] = "Les catégories";
//          $data['nom'] = "Bob";
//            $data['prenom'] = "Bobby";
        
        $this->load->model("Model_Categorie");
        
        $data['lesCategories'] = $this->Model_Categorie->GetAllCategories();
        
        $this->load->view("v_accueil",$data);
    }
    
    public function AfficherLesJeux()
            
    {
//        $laCateg = $_GET['rbCateg'];
        $laCateg = $this->uri->segment(3);
        
        $this->load->model("Model_Jeux");
        
        //Appel de la méthode
        $data['lesJeux'] = $this->Model_Jeux->GetAllGamesByCateg($laCateg);
        
        //Appel de la vue
        $this->load->view("v_jeux",$data);
         
    }
    
}