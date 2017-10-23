<?php

class CtrlActivites extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Activites');
    }
    public function index()
    {
        //on charge les activités
        $data['lesActivites'] = $this->Model_Activites->getAllActivites();
        
        //var_dump($data);
        //on charge les formations d'une activité
        $this->load->model('Model_Formations');
        $data['lesFormations'] = $this->Model_Formations->getFormationsByActivite($data['lesActivites'][0]->numero);
        
        //var_dump($data);
        
        
        $this->load->view('AfficherActivites', $data);
    }
    
    function AfficherFormations()
    {
        $idActivite = $_GET['idActivite'];
        $this->load->model('Model_Formations');
        $data['lesFormations'] = $this->Model_Formations->getFormationsByActivite($idActivite);
        $this->load->view('AfficherFormations', $data);
    }
    
    function AfficherAgents()
    {
        $idFormation = $_GET['idFormation'];
        $this->load->model('Model_Agents');
        $data['lesAgents'] = $this->Model_Agents->getAgentsByFormation($idFormation);
        $this->load->view('AfficherAgents', $data);
    }
}

