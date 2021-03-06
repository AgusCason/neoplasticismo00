<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icono/icono.png">
    <title>Neoplasticismo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>@import url('https://fonts.googleapis.com/css2?family=Graduate&family=Iceland&display=swap');</style>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class=" header container-fluid bg1">
        <div class="container logo text-white p-1">
            <div class="row">
                <div class="col-9 ">
                    <!-- Navbar Bootstrap -->
                    <nav class="navbar navbar-dark cl5 fixed-top">
                        <div class="container-fluid">
                            <div class="recuadrosnav">
                                <div class="recuadro_1 cl4">
                                    <a class="navbar-brand" href="index.html"><img src="img/icono/icono.png" alt="Neoplasticismo" class="logo"></a>
                                </div>
                                <div class="recuadro_2 cl2">
                                    <a href="index.html"><h2>NEOPLASTICISMO</h2></a>
                                </div>
                                <div class="recuadro_3 cl4">
                                    <p>.</p>
                                </div>
                                <div class="recuadro_3 cl4">
                                    <p>.</p>
                                </div>
                                <div class="recuadro_4 cl1">
                                    <p>.</p>
                                </div>
                                <div class="recuadro_5 cl5">
                                    <p>.</p>
                                </div>
                                <div class="recuadro_6 cl4">
                                    <p>.</p>
                                </div>
                                <div class="hamburguesa">
                                    <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                </div>
                            </div>
                            
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header bg-dark">
                              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body bg-dark">
                              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle " href="obras.html" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Obras
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                      <li><a class="dropdown-item" href="obras.html">Todos las Obras</a></li>
                                      <li><a class="dropdown-item " href="#">Composici??n I</a></li>
                                      <li><a class="dropdown-item active" href="obra00.html">Composici??n II</a></li>
                                      <li><a class="dropdown-item" href="#">Theo Van Doesburg</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="artistas.html" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Artistas
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="artistas.html">Todos los Artistas</a></li>
                                    <li><a class="dropdown-item" href="mondrian.html">Piet Mondrian</a></li>
                                    <li><a class="dropdown-item" href="bart.html">Bart Van der Leck</a></li>
                                    <li><a class="dropdown-item" href="doesburg.html">Theo Van Doesburg</a></li>
                                    <li><a class="dropdown-item" href="jacobus.html">Jacobus Johannes Pieter Oud</a></li>
                                    <li><a class="dropdown-item" href="rietveld.html">Gerrit Rietveld</a></li>
                                    <li><a class="dropdown-item" href="huszar.html">Vilmos Huzs??r</a></li>
                                  </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="historia.html">Historia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="filosofia.html">Filosof??a</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto.html">Contacto</a>
                                </li>
                              </ul>
                              <form action="resultados_buscar.php" method="post">
                                <label>
                                <input type="search" name="buscar" placeholder="Buscar..." />
                                <input type="submit" value="Enviar">
                                </label>
                              </form>
                            </div>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </header>
	<section class="">

    <article style="">
      <div class="resultados_buscar_titulo">
        <div class="resultados_buscar_titulo_espacio">
          <p>.</p>
        </div>
        <div class="resultados_buscar_titulo_texto">
          <h4> Resultados de busqueda</h4>
        </div>
        <div class="resultados_buscar_titulo_espacio1">
          <p>.</p>
        </div>
      </div>
      <div class="resultados_buscar_subtitulo">
        <div class="resultados_buscar_subtitulo_espacio1">
         <?php
	         include('conexion.php');
       	   $buscar = $_POST['buscar'];
	         echo "Su consulta: <em>".$buscar."</em><br>";
     	     $consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
          ?>          
        </div>
        <div class="resultados_buscar_subtitulo_espacio2">
	        <p>Cantidad de Resultados: 
	        <?php
		       $nros=mysqli_num_rows($consulta);
		       echo $nros;
	        ?>
	        </p>
	        <?php
		       while($resultados=mysqli_fetch_array($consulta)) {
	        ?>          
        </div>
      </div>
      <div class="resultados_buscar_resultado">
        <div class="resultados_buscar_resultado_img cl2">
             <img class="" src="<?php echo $resultados['foto']; ?>" alt="">         
        </div>
        <div class="resultados_buscar_resultado_texto">
           <h4>
            <?php
               echo $resultados['nombre'] . " ";
               echo $resultados['apellido'];
            ?>
            </h4>
            <p class="card-text">
            <?php	
			         echo $resultados['bio'];
	          ?>
            </p>
        </div>
      </div>
      <?php
		   }

		    mysqli_free_result($consulta);
		    mysqli_close($conexion);

  	   ?>
    </article>
</section>
<footer class="container-fluid cl3 footer">
    <div class="container text-dark p-3 text-center">
        <div class="row justify-content-center">
            <div class="cl3">
                <span>
                    &copy; 2022 | Terminos y Condiciones | Agust??n Cas??n | UP <br> 
                </span>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>