<?php

class CtrlSncf2 extends CI_Controller
{
    public function index()
            {
                $data['activite']="Les Activités";
                
                $this->load->model("Model_Activite");
                
                $data['lesActivites']= $this->Model_Activite->GetAllActivites() ;
                
                $this->load->view("v_Activite",$data);
                
            }
            
    public function AfficherLesFormations()
            {
            
                $numActivite = $_GET['numActivite'];
        
                $this->load->model("Model_Formation");
                
                $data['lesFormations'] = $this->Model_Formation->GetAllFormations($numActivite);
                
                $this->load->view("v_Formation",$data);
        
            }
            
    public function AfficherLesAgents()
            {
                
                $numFormation = $_GET['numFormation'];

                $this->load->model("Model_Agent");

                $data['lesAgents'] = $this->Model_Agent->GetAllAgents($numFormation);

                $this->load->view("v_Agent",$data);
            }
            
}
