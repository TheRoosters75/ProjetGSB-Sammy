<?php

class Model_TableauVisiteurAc extends CI_Controller{
    public function getlesvisiteurs(){
        $sql = $this->db->query("select VIS_MATRICULE,VIS_NOM,Vis_PRENOM,VIS_VILLE from visiteur ");
        return $sql->result();
                
    }
}