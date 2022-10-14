<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro - Negocios</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./img/logo.png" alt="..." height="36">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./negocios.php">Negocios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./deportes.php">Deportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contacto.php">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
    <div class="noticias m-5 d-inline-flex p-2 flex-wrap justify-content-center">

      <div class="card m-3" style="width: 18rem;">
        <img src="./img/deporte1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center my-3">Bologna sufrió con el ‘descanso’ de Medel</h5>
          <p class="card-text">Tras caer con la Juventus, el equipo del “Pitbull” quedó en una complicada posición en la Serie A. Medel ingresó a los 61′, cuando su equipo perdía 2-0.</p>
          <a href="https://chile.as.com/futbol/chilenos-por-el-mundo/gary-medel-sufrio-una-nueva-derrota-en-bologna-n/" class="btn btn-primary">Mas información...</a>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="./img/deporte2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center my-3">Deportes Concepción le propina un duro golpe a Arturo Vidal</h5>
          <p class="card-text text-justify">Rodelindo Román cayó frente al ‘León de Collao’ y se despidió de la Segunda División. En 2023 competirá en la Tercera División A. </p>
          <a href="https://chile.as.com/futbol/deportes-concepcion-le-propina-un-duro-golpe-a-arturo-vidal-n/" class="btn btn-primary">Mas información...</a>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="./img/deporte3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center my-3">Es chileno y asoma como titular en final de la Copa Sudamericana</h5>
          <p class="card-text">Esta tarde, el Independiente del Valle de Matías Fernández se medirá ante Sao Paulo en Córdoba. El DT del conjunto ecuatoriano pasó por Chile.</p>
          <a href="https://chile.as.com/futbol/chilenos-por-el-mundo/es-chileno-y-asoma-como-titular-en-final-de-la-copa-sudamericana-n/" class="btn btn-primary">Mas información...</a>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="./img/deporte4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center my-3">“Parra la pasó mal, debutó con un buen partido y ahora podía tapar bocas; la U va a sentir orgullo”</h5>
          <p class="card-text">Alejandro Padilla, quien dirigió al guardameta azul en las inferiores de Huachipato, saca la voz: “Se fue injusto con él en su llegada a la U”.</p>
          <a href="https://chile.as.com/futbol/parra-la-paso-mal-debuto-con-un-buen-partido-y-ahora-podia-tapar-bocas-la-u-va-a-sentir-orgullo-n/" class="btn btn-primary">Mas información...</a>
        </div>
      </div>

    </div>

    <div class="video m-5 d-flex p-2 justify-content-center">

      <iframe width="640" height="360" src="https://www.youtube.com/embed/9jMxkEAaDtU" title="Deportes Temuco 1 - 5 Colo Colo | Copa Chile Easy 2022 - Tercera Ronda" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <div class="audio m-5 d-flex p-2 justify-content-center">

      <audio controls>
        <source src="./audio/audio-negocio.mp4" type="audio/mpeg">
        Your browser does not support the audio tag.
      </audio>

    </div>

    <footer class="bg-light text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #3b5998;"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <!-- Twitter -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #55acee;"
            href="#!"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>
    
          <!-- Google -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #dd4b39;"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>
    
          <!-- Instagram -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #ac2bac;"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <!-- Linkedin -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #0082ca;"
            href="#!"
            role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <!-- Github -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #333333;"
            href="#!"
            role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © Copyright:
        <a class="text-white" href="index.html">ElFaroAiep2022.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <script src="https://kit.fontawesome.com/b674fbd18e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>