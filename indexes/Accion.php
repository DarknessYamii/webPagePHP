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
 
        <title>Accion</title>
    </head>
    <body>
      <!--Navegation Bar-->
      <?php $mi_pagina="accion"; ?>

       <?php
       include '../topSide.php';
       ?>
             <div class="container-fluid">
              <section>
                  <article>
                      <h1 class="hTlou bounce-in-fwd">The Last Of Us 2</h1>
                      <!--Grid que contiene la imagen del juego en cuestion y una pequeña informacion cuyo grid cambia de 6 a 12 cuando es pequeña resolucion-->
                      <div class="row">
                              <img src="../imagenes/lof2.jpg" class="img-fluid col-md-6 col-sm-12 scale-up-ver-center" alt="The Last Of Us 2">
                              <p class="col-md-6 bounce-in-right pTlou">The Last of Us: Parte II es una obra maestra, creo que merece 
                                la pena empezar por ahí sin dar rodeos. La primera entrega también lo fue. Y resulta alucinante ver
                                 cómo Naughty Dog ha cogido aquel universo creado hace ahora siete años y ha sido capaz de añadirle 
                                 capas y capas que mejoran prácticamente todo lo que se podía mejorar.

                                No hablo sólo de los gráficos, donde el salto es verdaderamente espectacular, sino de la historia y 
                                de cómo está narrada, de las mecánicas jugables, del subidón de tensión y terror en los muchos 
                                encuentros con los diversos tipos de infectados, donde el sigilo es importantísimo para salir airoso,
                                 y más, mucho más.
                                 <br/>
                                 <!--Boton con animacion que te redirige hacia la informacion completa del juego-->
                                  <span class="buttongames buttong" style="margin-left:30%;"><span class="translate"></span><a href="TLOU.php">INFO</a></span>
                              </p>
  
                      </div>
                      
                  </article>
                  <article>
                      <h1 class="bounce-in-fwd hUncharted">Uncharted 3</h1>
                      <!--Grid que contiene la imagen del juego en cuestion y una pequeña informacion cuyo grid cambia de 6 a 12 cuando es pequeña resolucion-->
                      <div class="row">
                              <img src="../imagenes/uncharted.jpeg" class="img-fluid col-md-6 col-sm-12 scale-up-ver-center" alt="Uncharted 3">
                              <p class="col-md-6 bounce-in-right pUncharted">Uncharted 3 es el tercer videojuego de acción-aventura de la
                                 saga Uncharted, y la secuela de los dos videojuegos anteriores: Uncharted: El Tesoro de Drake y
                                  Uncharted 2: El Reino de los Ladrones. Es un videojuego exclusivo para PlayStation 3 desarrollado
                                   por Naughty Dog y publicado por Sony Computer Entertainment. La historia se centra alrededor de
                                    Nathan Drake y su mentor Víctor Sullivan que viajan alrededor del mundo buscando una legendaria
                                     ciudad perdida que finalmente les llevará a la Península Arábiga y el vasto desierto de Rub' al
                                      Khali, también conocido como el Cuarto Vacío. La legendaria ciudad perdida ha sido conocida por
                                       varios nombres, incluyendo "Ubar", "Iram de los Pilares" y "la Atlántida de las Arenas". El
                                        juego se basa en las aventuras de T.E. Lawrence y Sir Francis Drake.
                                 <br/>
                                 <!--Boton con animacion que te redirige hacia la informacion completa del juego-->
                                  <span class="buttongames buttong" style="margin-left:30%;"><span class="translate"></span><a href="Uncharted.php">INFO</a></span>
                              </p>
                      </div>
                     
                  </article>
              </section>
          </div>
          <!--Buscador de la pagina categorias el cual te permite pasar de categoria sin unar la navegation bar-->
          <div class="pagination1">
            <ul>
              <li class="prev1"><a href="Estrategia.php">&lt;</a></li>
              <li><a href="Estrategia.php">Estrategia</a></li>
              <li class="active1"><a href="Accion.php">Accion</a></li>
              <li><a href="MOBA.php">MOBA</a></li>
              <li class="next1"><a href="MOBA.php">&gt;</a></li>
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