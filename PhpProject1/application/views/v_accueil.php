<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1><?php echo $titre; ?></h1>
<!--            <form action="index.php/CtrlAccueil/AfficherLesJeux" method="get">-->

        <?php
        
        
        foreach ($lesCategories as $categ)
        {

        ?>
                
                <a href="index.php/CtrlAccueil/AfficherLesJeux/<?php echo $categ->idCateg; ?>"> <?php echo $categ->nomCateg; ?> </a>
        
<!--                    <input name="rbCateg" type="radio" value="<?php echo $categ->idCateg; ?>"><?php echo $categ->nomCateg; ?>
        -->
        <br>
        <?php
        }
        
        ?>
         <input type="submit" value="Les Jeux">
        </form>
        
    </body>
</html>
