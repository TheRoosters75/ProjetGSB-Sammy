<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gestions des visiteurs </title>
        
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="JS/lesFonctions.js"></script>
         
         <script type="text/javascript">
         
             $
           (
               function()
                {
                    
                    
                    // Au chargement de la page
                        getLesRegions();
                        
//                   
//                   //Quand le user change de region dans la liste
//                   $('#lstRegions').change(function() {
//                       $('#codeRegion').val($('#lstRegions').val()
//                  });
                   
                  
                   
                   
                }
             );
     
         
        </script>
    </head>
    <body>
        <h1>Page d'accueil : Gestion des visiteurs </h1>
        
        <div id="divRegions"></div>
  
        <p>Code Region </p> <input type="text" disabled="">

        <p>Liebelle Secteur</p> <input type="text" id="codeRegions" disabled="">
        
        <p>Nom Region</p> <input type="text" id="nomRegions">
        
        <br> <br>
        <input type="button" value="Modifier regions" id="modifier">
       
      
      
        <div id="Tableau" align="left">
    
       
    <table cellspacing="2px" cellpadding="2px;" rules="all" style="border:solid 1px black;">
        <caption>Listes des visiteurs</caption>
        <tr> 
            
              <th>Matricule</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Ville</th>
           
        </tr>    
       
        <?php 
        
        foreach($lesVisiteurs as $visiteur){
            echo "<tr>";
           
            echo"<td> <a href='index.php/Ctrl_AccueilVisiteurAc/getVueFormulaire/$visiteur->VIS_MATRICULE'>".$visiteur->VIS_MATRICULE."</a></td>";
            echo"<td>".$visiteur->VIS_NOM."</td>";
            echo"<td>".$visiteur->Vis_PRENOM."</td>";
            echo"<td>".$visiteur->VIS_VILLE."</td>";
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
            </div>
     
        </body>
</html>
