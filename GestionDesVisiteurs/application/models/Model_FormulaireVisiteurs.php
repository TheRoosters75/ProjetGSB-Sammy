<?php
class Model_FormulaireVisiteurs extends CI_Model{
    
    public function getVisiteurById($codeVisiteur)
    {
        $sql = $this->db->query("SELECT * FROM visiteur where vis_matricule = '".$codeVisiteur."'");
        return $sql->result();
    }
    
}