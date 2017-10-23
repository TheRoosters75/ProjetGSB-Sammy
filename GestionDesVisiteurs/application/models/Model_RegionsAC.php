<?php
class Model_RegionsAC extends CI_Model{
    public function getLesRegions(){
        $sql = $this->db->query('select REG_CODE, REG_NOM from region ');
    return $sql->result();
    }
    
}