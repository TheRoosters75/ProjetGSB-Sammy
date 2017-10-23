<?php     
    echo "<select id='lstRegions'>";
    foreach ($lesRegions as $region)
       {
            echo "<option id='opt1' value='".$region->REG_CODE."'>".$region->REG_NOM."</option>";
       }
    echo "</select>";
?>