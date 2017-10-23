<?php

class Ctrl_Accueil extends CI_Controller{

    public function index() {
        //
        $data['titre'] = 'Gestion tickets ==> connexion';
        //$data['connexion'] = 
        //$this->load->view('v_Connexion',$data);
        $this->load->view('v_Connexion');
    }
    public  function afficherTickets(){
        $code = $_GET['idticket'];
        $model = $this->load->model('Model_Tickets');
        $data['tickets'] = $this->Model_Tickets->getLesTickets($code);
        $this->load->view('v_Tickets',$data);
    }

    public function  afficherGestionsTickets()
            {
        $codeGestions = $_GET['codeGestions'];
        $model = $this->load->model('Mode_GestionsTickets');
        $data['gestions'] = $this->Model_GestionsTickets->getGestionsTickets($codeTicket);
        $this->load->view('v_Gestions',$data);
    }

    public function verifierLogin()
    {
        $login = $_GET['login'];
        $mdp = $_GET['mdp'];
        $this->load->model('Model_Connexion');
        $data=$this->Model_Connexion->afficherConnexion($login,$mdp);
        //var_dump($data);

       if( $data[0]->idUser=="")
       {

           $this->load->view('v_Connexion');
       }
         else {
           $this->load->view('v_Ticket');
       }

    }
}