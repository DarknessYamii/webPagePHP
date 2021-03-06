<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
       <!--Estilo bootrstrap--> 
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
       <!--Estilo propio-->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <!--Fuente de letra usada en la pagina-->
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <title>Crusader Kings 3</title>
    </head>
    <body class="bRequisitos">
       <!--Navegation Bar-->
       <?php
       include '../topSide.php';
       ?>
            <?php
            include '../inCK3.php';
            ?>
              <!--Div que contiene el footer con todas las redes sociales--> 
              <?php
         include '../downSide.php';
                  ?>
        <!--JQuary de Bootstrap-->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>      
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       <!--Scripts usados para el uso del hosting en Firebase-->
       <!-- The core Firebase JS SDK is always required and must be listed first -->
       <script src="/__/firebase/8.1.1/firebase-app.js"></script>

       <!-- TODO: Add SDKs for Firebase products that you want to use
           https://firebase.google.com/docs/web/setup#available-libraries -->
       <script src="/__/firebase/8.1.1/firebase-analytics.js"></script>

       <!-- Initialize Firebase -->
       <script src="/__/firebase/init.js"></script>
    </body>
</html>