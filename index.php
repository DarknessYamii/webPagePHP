<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
       <!--Estilo bootrstrap--> 
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
       <!--Estilo propio-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <!--Fuente de letra usada en la pagina-->
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
      


        <title>Videojuegos</title>
    </head>
    <body>
       <!--Navegation Bar-->
       <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"><img src="imagenes/logo2.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link navbarletra" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle navbarletra" href="indexes/Categorias.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CATEGORIAS
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item navbarletra" href="indexes/Estrategia.php">Estrategia</a>
                    <a class="dropdown-item navbarletra" href="indexes/Accion.php">Accion</a>
                    <a class="dropdown-item navbarletra" href="indexes/MOBA.php">MOBA</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link navbarletra" href="indexes/Feedback.php">FEEDBACK</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link navbarletra" href="indexes/Requisitos.php">REQUISITOS</a>
                </li>
              </ul>
              <!--Widget de Spotify-->
              <li class="nav-item">
                <iframe src="https://open.spotify.com/embed/playlist/5AHH67GYsljwoB1q6UGvWg?si=Cxj-IMl4QF-q7F9qh3bjrQ&player.setVolume(5)" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </li>
              <form class="form-inline my-2 my-lg-0">
                <input class="mr-sm-2" type="search" placeholder="Buscador" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0  navbarletra buscador" type="submit">Buscar</button>
              </form>
            </div>  
          </nav>
         </header>
         <section>
           <!--Carrousel de imagenes con los juegos mas destacados de 2020-->
           <article>
            <div id="destacados" class="carousel slide w-75 container-md" data-ride="carousel">
              <div class="row justify-content-start">
                <div class="col-12">
                <h1 class="destacadosh1 telefono-p">DESTACADOS <span style="color: royalblue;">DEL</span> <span style="color: magenta;">MOMENTO</span></h1>
              </div>
              </div>
                <ol class="carousel-indicators">
                <li data-target="#destacados" data-slide-to="0" class="active"></li>
                <li data-target="#destacados" data-slide-to="1"></li>
                <li data-target="#destacados" data-slide-to="2"></li>
                <li data-target="#destacados" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="imagenes/cyberpunk.jpg" class="d-block w-100" alt="Cyberpunk">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Cyberpunk 2077</h5>
                    <p>Cyberpunk 2077 es el nuevo videojuego de rol en primera persona con estructura de mundo abierto de CD Projekt RED.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="imagenes/demon.jpg" class="d-block w-100" alt="Demon's Soul">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Demon's Soul</h5>
                    <p>Juego ARPG en Tercera Persona orientado a la dificultad, puzzles etc...</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="imagenes/project.jpg" class="d-block w-100" alt="Project Athia">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Project Athia</h5>
                    <p>Se trata de una aventura sobrenatural para PlayStation 5 (PS5) y PC. </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="imagenes/assassin.jpg" class="d-block w-100" alt="Assassin Creed Valhalla">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="celesteazul">Assassin Creed Valhalla</h5>
                    <p class="celesteazul">El nuevo juego de Ubisoft ya nombrado como mejor juego del año 2020. </p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#destacados" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#destacados" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </article>
        </section>
        <section>
          <!--Grid de imagenes con 6 juegos famosos con Link hacia sus respectivas paginas de categorias GRID DE 4 MD Y 1 EN GENERAL-->
          <article>
            <h2 class="center"><span style="color: rgb(76, 255, 52);">JUEGOS</span></h2>
            <div class="container-md">
              <div class="row justify-content-around">
                <div class="col-md-4">
                  <img src="imagenes/uncharted.jpeg" class="image-overlay" alt="uncharted 3"/>
                  <div class="overlay">
                    <div class="text"><p>Uncharted 3</p><p><a class="btn btn-primary" href="indexes/Accion.php" role="button">INFO</a></p></div>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <img src="imagenes/xcom.jpeg" class="image-overlay" alt="xcom"/>
                  <div class="overlay">
                    <div class="text"><p>XCOM 2</p><p><a class="btn btn-primary" href="indexes/Estrategia.php" role="button">INFO</a></p></div>
                  </div>
                </div>
                <div class="col-md-4">
                  <img src="imagenes/lol.jpg" class="image-overlay" alt="league of legends "/>
                  <div class="overlay">
                    <div class="text "><p>League Of Legends.</p> <p><a class="btn btn-primary" href="indexes/MOBA.php" role="button">INFO</a></p></div>
                  </div>
                </div>
              </div>
              <div class="row bordertop">
                <div class="col-md-4">
                  <img src="imagenes/ck3.jpg" class="image-overlay" alt="Crusaider King 3"/>
                  <div class="overlay">
                    <div class="text"><p>Crusaider King 3</p><p><a class="btn btn-primary" href="indexes/Estrategia.php" role="button">INFO</a></p></div>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <img src="imagenes/dota.jpg" class="image-overlay" alt="Dota"/>
                  <div class="overlay">
                    <div class="text"><p>Dota</p><p><a class="btn btn-primary" href="indexes/MOBA.php" role="button">INFO</a></p></div>
                  </div>
                </div>
                <div class="col-md-4">
                  <img src="imagenes/lof2.jpg" class="image-overlay" alt="The Last Of Us II "/>
                  <div class="overlay">
                    <div class="text"><p>The Last Of Us II</p><p><a class="btn btn-primary" href="indexes/Accion.php" role="button">INFO</a></p></div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
        <!--Div en cual contiene informacion sobre los 3 motores graficos mas usados tanto como para juegos como para gente novata que quiere aprender por si mismos-->
        <div class="container-md separacion motores">
          <aside class="img-fluid" style="background-image: url(imagenes/aside.jpg);background-attachment: fixed; background-size: cover;">
            <!--Grid con la imagen del motor grafico y a su derecha una descripcion de este-->
            <div class="row">
              <div class="col-12">
                <h1 class="motor telefono-p">MOTORES <span class="motor2">GRAFICOS</span></h1>
              </div>
              <div class="row">
              <img src="imagenes/unity.png" alt="unity" class="img-fluid col-md-5 col-sm-12 w-auto ">
                <p class="p-motores col-md-5 col-sm-10"> <a href="https://unity.com/es">Unity</a> es un motor de videojuego multiplataforma creado por Unity Technologies. 
                  Unity está disponible como plataforma de desarrollo para Microsoft Windows, Mac OS, Linux. La plataforma de 
                  desarrollo tiene soporte de compilación con diferentes tipos de plataformas.</p>
              </div>
              <div class="row">
               <img src="imagenes/ue.png" alt="unreal engine" class="img-fluid col-md-5 col-sm-12 w-auto">
                <p class= "p-motores col-md-5 col-sm-10"><a href="https://www.unrealengine.com/en-US/">Unreal Engine</a> es un motor de juego creado por la compañía Epic Games, mostrado inicialmente en el shooter en primera persona Unreal en 1998.
                  Su lenguaje de programacion usado es C++ y es codigo abierto. Este motor grafico es usado por famosos videojuegos ya que este da una calidad grafica increible
                   y mucha libertad de creacion</p>
              </div>
              <div class="row">
                <img src="imagenes/cryengine.png" alt="cryengine" class="img-fluid col-md-5 col-sm-12 w-auto">
                <p class="p-motores col-md-5 col-sm-10"><a href="https://www.cryengine.com">CryEngine</a> es un motor de juego creado por la empresa alemana desarrolladora de 
                  software Crytek, originalmente un motor de demostración para la empresa Nvidia, que al demostrar un gran 
                  potencial se implementa por primera vez en el videojuego Far Cry, desarrollado por la misma empresa creadora 
                  del motor.</p>
              </div>
           </div>
           </aside>
        </div>
                 <!--Div que contiene el footer con todas las redes sociales--> 
             <div class="container-fluid blackback">
                <blockquote class="blockquote"> 
                  <footer class="blockquote-footer">
                    <div class="container-md">
                      <div class="row justify-content-around">
                        <div class="col-md-4">
                          <p>Instagram:<a href="https://www.instagram.com/andresrd2002/"><img src="imagenes/instagram.png" class="redsocial" alt="insta"></a>/andresrd2002</p>
                        </div>
                        <div class="col-md-4">
                          <p>Twitter:<a href="https://twitter.com/AndresRuizDelga"><img src="imagenes/twitter.png" class="redsocial" alt="twitter"></a>/AndresRuizDelga</p>
                        </div>
                        <div class="col-md-4">
                          <p>Facebook:<a href="https://www.facebook.com/andres.ruizdelgado02/"><img src="imagenes/facebook.png" class="redsocial" alt="facebook"></a>/andres.ruizdelgado02</p>
                        </div>
                        <div class="col-md-6">
                          <p class="gmail">Gmail:<img src="imagenes/gmail.png" class="redsocial" alt="gmail"></a>andresruizdelgado12@gmail.com</p>
                        </div>
                        <div class="col-md-6">
                          <p>Discord:<img src="imagenes/discordia.png" class="redsocial" alt="discord"></a>/D̲̅α̲̅я̲̅kи̲̅є̲̅ร̲̅ร̲̅Y̲̅α̲̅м̲̅i#7424</p>
                        </div>
                      </div>
                    </div>
                    
                  </footer>
                </blockquote>
              </div>
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