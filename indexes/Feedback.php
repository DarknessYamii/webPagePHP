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


        <title>Feedback</title>
    </head>
    <body class="bFeedback">
       <!--Navegation Bar-->
       <?php $mi_pagina="feedback"; ?>
       <?php
       include '../topSide.php';
       ?>
             <div class="container-fluid">
             <form class="feedbackForm">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control inputFeedback" id="inputEmail">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputUsername">Usuario</label>
                  <input type="text" class="form-control inputFeedback" id="inputUsername">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputGame">Juego Favorito</label>
                  <input type="text" class="form-control inputFeedback" id="inputGame" placeholder="Ej: League Of Legends">
                </div>
                <textarea class="form-group col-12 inputFeedback" rows="15" name="message">Escriba lo que mas le ha gustado de la pagina y lo que menos.
                  </textarea>
            </div>
            <h1 class="feedback">Que te ha parecido la pagina</h1>
             <div class="row">
                <div class="col-md-6 col-lg-3">
                  <div class="card" style="width: 18rem;">
                    <img src="../gifs/triste.gif" class="card-img-top" alt="Mal">
                    <div class="card-body">
                      <h5 class="card-title">Mal</h5>
                      <p class="card-text">A la pagina le faltan muchos detalles,caracteristicas y ademas no es bonita hacia el usuario. 1-4 Nota</p>
                     <!--Boton que muestra por pantalla un mensaje-->
                      <button onclick="alert('Gracias por votar')" class="btn btn-dark">Votar</button>
                  
                  </div>
               </div>
             </div>
             <div class="col-md-6 col-lg-3">
              <div class="card" style="width: 18rem;">
                <img src="../gifs/pasable.gif" class="card-img-top" alt="Pasable">
                <div class="card-body">
                  <h5 class="card-title">Pasable</h5>
                  <p class="card-text">Le falta algun que otro pequeño detalle. 5-6 Nota</p>
                  <!--Boton que muestra por pantalla un mensaje-->
                  <button onclick="alert('Gracias por votar')" class="btn btn-dark">Votar</button>
              
              </div>
           </div>
         </div>
         <div class="col-md-6 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="../gifs/feliz.gif" class="card-img-top" alt="Bien">
            <div class="card-body">
              <h5 class="card-title">Bien</h5>
              <p class="card-text">Esta bastante completo con muchas caracteristicas. 7-9 Nota</p>
              <!--Boton que muestra por pantalla un mensaje-->
              <button onclick="alert('Gracias por votar')" class="btn btn-dark">Votar</button>
          
          </div>
       </div>
     </div>
     <div class="col-md-6 col-lg-3">
      <div class="card" style="width: 18rem;">
        <img src="../gifs/perfecto.gif" class="card-img-top" alt="Perfecto">
        <div class="card-body">
          <h5 class="card-title">Perfecto</h5>
          <p class="card-text">Esta perfecta. Cumple con todos los objetivos que tiene que cumplir una pagina, animaciones, caracteristicas, carrousels, cards, etc.... 10 Nota</p>
          <!--Boton que muestra por pantalla un mensaje-->
          <button onclick="alert('Gracias por votar')" class="btn btn-dark">Votar</button>
      
      </div>
   </div>
 </div>
            </div>
             <!--Boton que muestra por pantalla un mensaje--> 
            <button onclick="alert('Gracias por enviar su FeedBack. Se lo agradecemos')" type="submit" class="btn btn-success">Enviar FeedBack</button>
            </form>
          </div>
          <!--Div el cual contiene el footer con todas las redes sociales-->
          <?php
         include '../downSide.php';
                  ?>
            <!--Script el cual dice el mensaje a monstrar en el boton-->
            <script>
                function votacion() {
                  document.getElementById("votar").innerHTML = "Gracias por su votacion";
                }
                </script>
                <!--JQuary de Bootstrap-->
             <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>      
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
             <!--Script que sirve para el hosting en firebase-->
             <!-- The core Firebase JS SDK is always required and must be listed first -->
             <script src="/__/firebase/8.1.1/firebase-app.js"></script>
     
             <!-- TODO: Add SDKs for Firebase products that you want to use
                 https://firebase.google.com/docs/web/setup#available-libraries -->
             <script src="/__/firebase/8.1.1/firebase-analytics.js"></script>
     
             <!-- Initialize Firebase -->
             <script src="/__/firebase/init.js"></script>
    </body>
</html>