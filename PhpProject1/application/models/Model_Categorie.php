<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Categorie extends CI_Model
{
    public function GetAllCategories()
    {
        $sql = $this->db->query("select * from categorie");
        
        return $sql->result();        
    }
    
    public function GetCategorieById($id)
    {
        $sql = $this->db->query("select * from categorie where  = ",$id);
        
        return $sql->result(); 
    }
}

