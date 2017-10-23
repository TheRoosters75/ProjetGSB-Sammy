<html>
    <head>
        <title>Les catégories</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        
        <script type="text/javascript">
        //au chargement de la page    
        $
        (
             function()
             {
              $('#lstCategories').change(
                      function()
              {
                  afficherJeux();
              }

              );
               $('#btn1').click(function(){
                   ClickBouton1();
               });
                $('#btn2').click(function(){
                   ClickBouton2();
               });
               $('#txtValeur').val("17");
             }
        );
        
               
                
       
        
        </script>
    </head>
    <body>
        <h1>Les catégories</h1>
        
        <select id="lstCategories">
            <?php
            foreach ($lesCategories as $categ)
            {
                echo "<option value='".$categ->idCateg."'>".$categ->nomCateg."</option>";
            }
            
            ?>
                        
        </select>
        <div id="divJeux"></div>
        
        <input id="btn1" type="button" value="Bouton 1">
        <input id="btn2" type="button" value="Bouton 2">
        <input id="txtValeur" type="text">

    </body>
</html>

