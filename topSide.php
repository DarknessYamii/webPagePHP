<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../index.php"><img src="../imagenes/logo2.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link navbarletra" href="../index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown <?php if($mi_pagina=="accion" || $mi_pagina=="moba" || $mi_pagina=="estrategia") echo " active"; ?>">
                  <a class="nav-link dropdown-toggle navbarletra" href="Categorias.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CATEGORIAS
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item navbarletra" href="Estrategia.php">Estrategia</a>
                    <a class="dropdown-item navbarletra" href="Accion.php">Accion</a>
                    <a class="dropdown-item navbarletra" href="MOBA.php">MOBA</a>
                  </div>
                </li>
                <li class="nav-item <?php if($mi_pagina=="feedback") echo " active"; ?>">
                  <a class="nav-link navbarletra" href="Feedback.php">FEEDBACK</a>
                  </li>
                <li class="nav-item <?php if($mi_pagina=="requisitos") echo " active"; ?>">
                    <a class="nav-link navbarletra" href="Requisitos.php">REQUISITOS</a>
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