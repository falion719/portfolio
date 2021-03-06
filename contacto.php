<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/ap.ico" />
</head>

<body id="contacto">
  <header>
    <div class="container">
        
    <nav class="navbar navbar-expand-md px-0">
        <button class="navbar-toggler mb-1" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto text-center">
                <li class="nav-item pr-5">
                    <a class="nav-link  " href="index.php">Inicio</a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link " href="sobre-mi.php">Sobre mí</a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link " href="proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link active" href="contacto.php">Contacto</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
            </div>
        </div>
    </nav>        </div>

</header>
<main>
  <div class="container ">
      <div class="row">
          <div class="col-12 mt-sm-5">
              <h1>Contacto</h1>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-6 col-12 mt-4">
              <p>Te invito a que te contactes enviándome un mensaje o bien por <a href="https://api.whatsapp.com/send?phone=541162423341">whatsapp</a>.</p>
          </div>
          <div class="col-sm-6 col-12 mt-4">
              <form action="" method="POST">
                  <div class="mb-3">
                      <input type="text" id="txtNombre" name="txtNombre" class="form-control shadow" placeholder="Nombre">
                  </div>
                  <div class="mb-3">
                      <input type="email" id="txtCorreo" name="txtCorreo" class="form-control shadow" placeholder="Correo">
                  </div>
                  <div class="mb-3">
                    <input type="tel" id="txtTelefono" name="txtTelefono" class="form-control shadow" placeholder="Telefono">
                </div>
                  <div class="mb-3">
                      <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow" placeholder="Mensaje"></textarea>
                  </div>
                  <div class="text-right">
                      <button type="submit" class="btn">ENVIAR</button>
                  </div>
               </form>
          </div>
      </div>

  </div>
</main>
<footer>
  <div class="container">
      <div class="row mt-5">
          <div class="col-sm-3 col-12 text-sm-left text-capitalize pb-sm-0 pb-3">
              <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
              <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                  Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
          </div>
          <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
              <a href="mailto:info@depcsuite.com">info@nelsontarche.com.ar</a>
          </div>
          <div class="col-sm-3 col-12 text-right">
              <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
          </div>

      </div>
  </div>
</footer></body>
</html>