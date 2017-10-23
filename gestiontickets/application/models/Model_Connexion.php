<?php

class Model_Connexion extends CI_Model
{
    public function afficherConnexion(){
        
        $sql = $this->db->query("select * from activite");
        
        return $sql->result();
        }
            
}