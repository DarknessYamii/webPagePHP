<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
       <!--Estilo bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <!--Estilo propio-->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <!--Estilo para el buscador de abajo de la pagina-->
        <link rel="stylesheet" type="text/css" href="../css/estilopagination.css">
        <!--Estilo de fuente de letra-->
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        

        <title>MOBA</title>
    </head>
    <body>
       <!--Navegation Bar-->
       <?php $mi_pagina="moba"; ?>
       <?php
       include '../topSide.php';
       ?>
        <div class="container-fluid">
            <section>
                <article>
                    <h1 class="hLoL bounce-in-fwd">League Of Legends</h1>
                    <!--Grid que contiene la imagen del juego en cuestion y una pequeña informacion cuyo grid cambia de 6 a 12 cuando es pequeña resolucion-->
                    <div class="row">
                            <img src="../imagenes/lol.jpg" class="img-fluid col-md-6 col-sm-12 scale-up-ver-center" alt="League Of Legends">
                            <p class="col-md-6 bounce-in-right pLoL">League of Legends es el actual juego mas jugado alrededor del mundo. Este es el
                                mas famoso en cuanto a sus eSport (campeonatos de videojuegos). Es un juego 5v5 que trata de llegar
                                a la base enemiga y destruirla y el que lo consiga ganara, hay 2 modos de juegos, el competitivo
                                el cual por victoria ganaria puntos con los cuales pasara ligas desde Iron hasta Challenger, y el 
                                modo normal que es para divertirte o para probar diferentes personajes porque este juego esta formado por 
                                150 personajes cada uno con sus caracteristicas y para poder jugar competitivo debes saber jugar
                                con algunos personajes para poder dar un buen nivel 
                                <br/>
                                <!--Boton con animacion que te redirige hacia la informacion completa del juego-->
                                <span class="buttongames buttong" style="margin-left:30%;"><span class="translate"></span><a href="LoL.php">INFO</a></span>
                            </p>

                    </div>
                    
                </article>
                <article>
                    <h1 class="bounce-in-fwd hDota">Dota 2</h1>
                    <!--Grid que contiene la imagen del juego en cuestion y una pequeña informacion cuyo grid cambia de 6 a 12 cuando es pequeña resolucion-->
                    <div class="row">
                            <img src="../imagenes/dota.jpg" class="img-fluid col-md-6 col-sm-12 scale-up-ver-center" alt="Dota 2">
                            <p class="col-md-6 bounce-in-right pDota">Dota 2 es un juego multijugador de estrategia en tiempo real,
                               distribuido por la plataforma Steam de Valve. En este, dos equipos de cinco jugadores tienen el 
                               objetivo de destruir las estructuras rivales controlando a personajes denominados héroes
                               <br/>
                               <!--Boton con animacion que te redirige hacia la informacion completa del juego-->
                                <span class="buttongames buttong" style="margin-left:30%;"><span class="translate"></span><a href="Dota.php">INFO</a></span>
                            </p>
                    </div>
                   
                </article>
            </section>
        </div>
        <!--Buscador de la pagina categorias el cual te permite pasar de categoria sin unar la navegation bar-->
        <div class="pagination1">
          <ul>
            <li class="prev1"><a href="Accion.php">&lt;</a></li>
            <li><a href="Estrategia.php">Estrategia</a></li>
            <li><a href="Accion.php">Accion</a></li>
            <li class="active1"><a href="MOBA.php">MOBA</a></li>
            <li class="next1"><a href="Estrategia.php">&gt;</a></li>
          </ul>
        </div>
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