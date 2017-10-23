<!DOCTYPE html>
<html>
<head>
    <title>Exemple du cours</title>
        <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>

        <script type="text/javascript">

        $
        (
                function()
        {
            $('.opt').change(
                function()
        {
                   AfficherAgents($(this).val());
                }
            );
    } 






         );








        </script>
</head>
<body>
    <p>Choix de l'activité</p>
    <select id="lstCategories" onchange="AfficherFormation(this.value)">
<?php
    foreach ($lesActivites as $uneActivite)
    {
?>
    <option name="categ" value="<?php echo $uneActivite->numero ; ?>" ><?php echo $uneActivite->libelle ; ?>
<?php
    }
?>
        </select>
    <br><br>
    <div id="divFormations">
        <?php foreach($lesFormations as $formation) {
            echo "<input class='opt' name='optFormation' type='radio' value='".$formation->code."'>".$formation->intitule;
            echo "<br>";
        }
?>



    </div><br><br>
    <div id="divAgents"></div>
</body>
</html>