<?php       
    echo "<select id='lstComposant'>";
    foreach ($lesComposants as $composant)
    {
        echo "<option id='opt1' value='".$composant->CMP_CODE."'>".$composant->CMP_LIBELLE."</option>";
                                    
    }
    echo "</select>";
   
  