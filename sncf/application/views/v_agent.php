<html>
    <body>
    <h1>Les Agents</h1>

<?php

foreach ($lesAgents as $agent) {
    ?>

    <p><?php echo $agent->nom; ?>  -  <?php echo $agent->prenom; ?></p>
   
<?php    
}
?>

    </body>
</html>