<?php

class Ctrl_Demo extends CI_Controller
{
    public function index()
    {
        //on charge le model
        $this->load->model("Model_Demo");
        //on fait appel à la methode du model
        $data['lesCategories'] = $this->Model_Demo->GetAllCategories();
        //on charge la vue dans laquelle on lui passe notre parametre $data qui est un tableau
        $this->load->view("Vue_Demo",$data);
    }
    function AfficherJeux()
    {
        $numCateg =  $_GET['toto'];
        $this->load->model("Model_Demo");
        //on fait appel à la methode du model
        $data['lesJeux'] = $this->Model_Demo->GetAllJeuxByCategories($numCateg);
        //on charge la vue dans laquelle on lui passe notre parametre $data qui est un tableau
        $this->load->view("Vue_Jeux",$data);        
    }
}