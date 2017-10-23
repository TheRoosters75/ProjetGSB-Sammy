<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formulaire ajout d'un visiteur</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="JS/lesFonctions.js"></script>
         <script type="text/javascript">
         
//             
//         $  (
//               function()
//                {
//                    
//                    $("#regionsFormulaire").change(function(){ 
//                         function(){
//                        ($(this).val());
//                    });
//                        
//                   
//                   
//                   
//                   
//                }
//             );
         
        </script>
    </head>
    <body>
        <?php 
        
     echo "<p> matricule</p> <input type='text' value='".$visiteur[0]->VIS_MATRICULE."'>";
      echo "<p> nom</p> <input type='text' value='".$visiteur[0]->VIS_NOM."'>";
       echo "<p> Prenom</p> <input type='text' value='".$visiteur[0]->Vis_PRENOM."'>";
        echo "<p> Adresse</p> <input type='text' value='".$visiteur[0]->VIS_ADRESSE."'>";
         echo "<p>CP </p> <input type='text' value='".$visiteur[0]->VIS_CP."'>";
         echo "<p>Ville </p> <input type='text' value='".$visiteur[0]->VIS_VILLE."'>";
         echo "<p>Date d'embauche</p> <input type='text' value='".$visiteur[0]->VIS_DATEEMBAUCHE."'>";
         echo "<p>code secteur </p> <input type='text' value='".$visiteur[0]->SEC_CODE."'>";
         echo "<p>code laboratoire </p> <input type='text' value='".$visiteur[0]->LAB_CODE."'>";
        
 
             ?>
                
        
    </body>
</html>
