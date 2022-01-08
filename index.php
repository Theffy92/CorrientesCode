<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="css/style.css?v=<?php echo(rand()); ?>" />
    <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>

    <title>Theffy in Spanish</title>
</head>
<body>
<header id="main">
  <!--menu responsive-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light  d-md-block">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">Inicio<span class="sr-only">(actual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#curso">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#nosotros">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contacto</a>
        </li>
      </ul>    
  </nav>	
<!--leyenda que aparece encima de la imagen de la cabecera-->
<div class="image text-center " id=home>
  <img src="img/FONDO22.jpeg" class="img-fluid" alt="Responsive image">
  <div class="caption sm-none">
	  <p class="esto ">Los mejores cursos de programación </p>
    <p class="esto ">desde Corrientes-Argentina</p>
    <a class="btn btn-success" href="" role="button">Listado de cursos</a>
  </div>
</div>
</header>
<!--aca comienza el contenido del sitio web-->
<div class="container-fluid mt-3 p-5">
  <div class="row mt-3" id=curso>
      <div class="col-12">
      <!--descripcion de los cursos destacados-->
        <div class="row shadow p-5">
        <h1 class="text-center p-5">Cursos destacados</h1>
          <div class="col-sm ">
            <h5 class="text-center">Diseño Web</h5>
              <a class="rounded-button d-flex justify-content-center" href="">
                <ion-icon name="color-palette-outline" size="large"></ion-icon>
              </a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt laboriosam porro quibusdam expedita iste sequi aut
              velit adipisci sit non, assumenda minima, obcaecati ratione corporis provident reprehenderit vero perspiciatis nam.</p>
          </div>
          <div class="col-sm">
            <h5 class="text-center">Aplicaciones Móviles</h5>
              <a class="rounded-button" href="">
              <ion-icon name="logo-android" size="large" ></ion-icon>
              <ion-icon name="logo-apple" size="large"></ion-icon>
              </a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt laboriosam porro quibusdam expedita iste sequi aut
              velit adipisci sit non, assumenda minima, obcaecati ratione corporis provident reprehenderit vero perspiciatis nam.</p>
          </div>
          <div class="col-sm">
            <h5 class="text-center">E-Commerce</h5>
              <a class="rounded-button" href="">
                <ion-icon name="card-outline" size="large"></ion-icon>
              </a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt laboriosam porro quibusdam expedita iste sequi aut
              velit adipisci sit non, assumenda minima, obcaecati ratione corporis provident reprehenderit vero perspiciatis nam.</p>
          </div>
        </div>
      </div>
  </div>
  <div class="row m-3" id=nosotros>
      <div class="col-12">
        <div class="row shadow p-5">
        <h1 class="text-center">Acerca de nosotros</h1>
          <div class="col-6 ">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt laboriosam porro quibusdam expedita iste sequi aut
              velit adipisci sit non, assumenda minima, obcaecati ratione corporis provident reprehenderit vero perspiciatis nam.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis libero iusto neque, soluta aspernatur at. Recusandae 
            odio odit a magni maiores. Sint recusandae corporis laudantium itaque tempora unde doloribus eaque!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti odit nesciunt animi dolorem, enim corporis! Nemo dolore, 
            labore molestiae debitis, ut possimus eveniet necessitatibus porro, voluptatem iste nesciunt obcaecati omnis!</p>
          </div>
          <div class="col-6 ">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt laboriosam porro quibusdam expedita iste sequi aut
              velit adipisci sit non, assumenda minima, obcaecati ratione corporis provident reprehenderit vero perspiciatis nam.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis libero iusto neque, soluta aspernatur at. Recusandae 
            odio odit a magni maiores. Sint recusandae corporis laudantium itaque tempora unde doloribus eaque!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti odit nesciunt animi dolorem, enim corporis! Nemo dolore, 
            labore molestiae debitis, ut possimus eveniet necessitatibus porro, voluptatem iste nesciunt obcaecati omnis!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row shadow m-3 p-5" id="contact">
      <h1 class="text-center">Contacto</h1>
        <form>
            <div class="row">
              <div class="form-group col-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-6">
                <label for="inputPassword4">Telefono</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Telefono">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Correo Electronico</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="correo electronico">
            </div>
            <div class="form-group">
              <label for="inputAddress2"></label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Mensaje</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
            </div>
              <div class="boton form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Enviar</button>
              </div>
            </div>
        </form>
      </div>
</div>
<footer class="text-center text-dark" >
  <!-- Copyright, todos los derechos reservados -->
  <div class="text-center p-3" >
    © 2021 Copyright:
    <a class="text-dark" href="#">Theffy 2021</a>
  </div>
  <!-- link de recursos que uso para los iconos y menu(javascript) -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</footer>
</body>
</html>