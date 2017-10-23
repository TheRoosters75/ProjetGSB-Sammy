<?php

class Ctrl_AccueilVisiteurAc extends CI_Controller{
    public function index(){
       $this->load->model('Model_TableauVisiteurAc');
       $data ['lesVisiteurs'] = $this->Model_TableauVisiteurAc->getlesvisiteurs();
        $this->load->view('v_AccueilAc',$data);
        
    } 
    public function getVueFormulaire (){
       
        $codeVisiteur = $this->uri->segment(3);
        $this->load->model("Model_FormulaireVisiteurs");   
        $data['visiteur'] = $this->Model_FormulaireVisiteurs->getVisiteurById($codeVisiteur);  
        $this->load->view('v_FormulaireVisiteursAc',$data);
        
    }
    public function getLesRegions(){
        //$codeRegion = $_GET['codeRegion'];
        $this->load->model('Model_RegionsAC');
        $data['lesRegions'] = $this->Model_RegionsAC->getLesRegions();
        $this->load->view('v_AfficherRegions',$data);
        
    }
  
    }
