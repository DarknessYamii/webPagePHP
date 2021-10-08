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
       

        <title>Estrategia</title>
    </head>
    <body>
       <!--Navegation Bar-->

       <?php $mi_pagina="estrategia"; ?>
       <?php
       include '../topSide.php';
       ?>
               
                <div class="container-fluid">
                  <section>
                      <article>
                          <h1 class="hXcom bounce-in-fwd">XCOM 2</h1>
                          <!--Grid que contiene la imagen del juego en cuestion y una pequeña informacion cuyo grid cambia de 6 a 12 cuando es pequeña resolucion-->
                          <div class="row">
                                  <img src="../imagenes/xcom.jpeg" class="img-fluid col-md-6 col-sm-12 scale-up-ver-center" alt="XCOM 2">
                                  <p class="col-md-6 bounce-in-right pXcom">XCOM 2 es un videojuego de estrategia por turnos de 2016
                                     desarrollado por Firaxis Games y publicado por 2K Games. El juego es la secuela del reboot de la
                                      serie, XCOM: Enemy Unknown de 2012, y tiene lugar 20 años después de los eventos de Enemy
                                       Unknown. En el mismo, XCOM, una organización militar humana que intenta combatir una invasión
                                        alienígena, ha perdido la guerra y se reduce ahora a una fuerza de resistencia contra la 
                                        ocupación de la Tierra y contra el régimen totalitario establecido por los invasores. El
                                         juego se desarrolla en misiones de combate por turnos en el que el jugador comanda un pelotón
                                          de soldados que debe luchar contra enemigos, humanos y alienígenas, y completar objetivos
                                           específicos. Asimismo, los jugadores administran y controlan las operaciones del Vengador,
                                            una nave alienígena abandonada que funciona como base móvil para XCOM, ocupando el mando del
                                             departamento de ingeniería e investigación de la base durante el tiempo entre misiones.
                                             <br/>
                                             <!--Boton con animacion que te redirige hacia la informacion completa del juego-->
                                      <span class="buttongames buttong" style="margin-left:30%;"><span class="translate"></span><a href="Xcom.php">INFO</a></span>
                                  </p>
      
                          </div>
                          
                      </article>
                      <article>
                          <h1 class="bounce-in-fwd hCK">Crusader Kings 3</h1>
                          <!--Grid que contiene la imagen del juego en cuestion y una pequeña informacion cuyo grid cambia de 6 a 12 cuando es pequeña resolucion-->
                          <div class="row">
                                  <img src="../imagenes/ck3.jpg" class="img-fluid col-md-6 col-sm-12 scale-up-ver-center" alt="Crusader Kings 3">
                                  <p class="col-md-6 bounce-in-right pCK">Crusader Kings III es un título de estrategia a cargo de 
                                    Paradox Development y Paradox Interactive para PC, la tercera parte de tan celebrada saga medieval.
                                     Crusader Kings III es el heredero de un largo legado de experiencias de gran estrategia histórica y
                                      llega con un montón de formas nuevas de garantizar el éxito de tu casa real. Lidera a una entre
                                       cientos de familias reales o nobles en el medievo, mientras adquieres poder y prestigio generación
                                        tras generación.
                                     <br/>
                                     <!--Boton con animacion que te redirige hacia la informacion completa del juego-->
                                      <span class="buttongames buttong" style="margin-left:30%;"><span class="translate"></span><a href="CK3.php">INFO</a></span>
                                  </p>
                          </div>
                         
                      </article>
                  </section>
              </div>
              <!--Buscador de la pagina categorias el cual te permite pasar de categoria sin unar la navegation bar-->
            <div class="pagination1">
              <ul>
                <li class="prev1"><a href="MOBA.php">&lt;</a></li>
                <li class="active1"><a href="Estrategia.php">Estrategia</a></li>
                <li><a href="Accion.php">Accion</a></li>
                <li><a href="MOBA.php">MOBA</a></li>
                <li class="next1"><a href="Accion.php">&gt;</a></li>
              </ul>
            </div>
         
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