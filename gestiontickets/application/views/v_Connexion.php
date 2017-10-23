<!--<html>
    <head>
        <title>Gestion De Tickets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="JS/lesFonctions.js"></script>
         <script type="text/javascript"> 
             $
           (
               function()
                {

                   $("#envoye").click(
                           function()
                            {
                                afficherTickets();
                            }
                           );
                }
             );

          </script>
    </head>
    <body>
        <p>login </p>
        <input type="text" id="txtlogin">
        <br>
        <p>password</p>
        <input type="text" id="txtmdp"> 
        <br>
        <input type="button" value="Envoye" id="envoye">

    </body>
</html>
-->


<html>
    <head>
        <title>Gestion De Tickets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="JS/lesFonctions.js"></script>
         <script type="text/javascript"> 
           $
           (
               function()
                {
                   $("#envoye").click(
                           function()
                   {
                       afficherTickets();
                   }
                           );
                }
             );
          </script>
    </head>
    <body>
        <h1>Gestion de tickets ==> connexion</h1>
        <img src="Images/securite.jpg" alt="">
        <p>login </p>
        <input type="text" id="txtlogin">
        <br>
        <p>Password</p>
        <input type="password" id="txtmdp"> 
        <br>
        <input type="button" value="SE CONNECTER" id="envoyer">
        
    </body>
</html>
