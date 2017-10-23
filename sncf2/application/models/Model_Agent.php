<?php

class Model_Agent extends CI_Model
{
    function GetAllAgents($numFormation)
    {
    
        $sql = $this->db->query("select prenom, nom from agent, inscription where Agent.code = inscription.codeAgent and numeroFormation='".$numFormation."'");
    
        return $sql->result();
        
    }
    
}

