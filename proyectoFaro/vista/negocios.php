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
            <a class="nav-link" href="./contacto.php">Deportes</a>
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
        <img src="./img/negocio1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center my-3">Así es el robot humanoide de Tesla</h5>
          <p class="card-text">El evento, organizado por el fabricante de automóviles Tesla, busca atraer talentos para que se unan a la compañía. Elon Musk afirmó que el robot "Optimus de Tesla" puede hacer mucho más de lo que demostró en la presentación.</p>
          <a href="https://cnnespanol.cnn.com/category/negocios/" class="btn btn-primary">Mas información...</a>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="./img/negocio2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center my-3">Apple fabrica el iPhone 14 en la India mientras los dolores de cabeza de China aumentan</h5>
          <p class="card-text text-justify">Apple comenzó a fabricar su nuevo iPhone 14 en la India, ya que el gigante tecnológico busca diversificar su cadena de suministro lejos de China. <br>
          Aunque la empresa fabrica la mayor parte de sus productos en China, ha decidido empezar a producir sus últimos dispositivos en la India mucho antes que con las generaciones anteriores. </p>
          <a href="https://cnnespanol.cnn.com/2022/09/26/apple-fabrica-iphone-14-india-china-trax/" class="btn btn-primary">Mas información...</a>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="./img/negocio3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center my-3">WhatsApp de pago, así será la nueva opción para negocios</h5>
          <p class="card-text">La app de mensajería WhatsApp estaría trabajando en un plan de suscripción exclusivo para su versión de empresas, WhatsApp Business, con el que pretenden añadir nuevas funciones como la habilidad de vincular hasta 10 dispositivos en una misma cuenta.</p>
          <a href="https://www.eleconomista.es/tecnologia/noticias/11725257/04/22/WhatsApp-de-pago-asi-sera-la-nueva-opcion-para-negocios-.html" class="btn btn-primary">Mas información...</a>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="./img/negocio4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center my-3">El entorno regulatorio es el área peor valorada por los inversores extranjeros</h5>
          <p class="card-text">El entorno regulatorio español es el área peor valorado por los inversores extranjeros según el 'Barómetro del clima de negocios en España desde la perspectiva del inversor extranjero', realizado conjuntamente por ICEX-Invest in Spain, Multinacionales por marca España y el International Center for Competitiveness del IESE, que recoge la valoración y la importancia que otorgan más de 730 empresas extranjeras al clima de negocios en España.</p>
          <a href="https://www.eleconomista.es/economia/noticias/11632784/02/22/El-entorno-regulatorio-es-el-area-peor-valorado-por-los-inversores-extranjeros.html" class="btn btn-primary">Mas información...</a>
        </div>
      </div>

    </div>

    <div class="video m-5 d-flex p-2 justify-content-center">

      <iframe width="640" height="360" src="https://www.youtube.com/embed/eokekqxPsFI" title="Última Hora: Putin anuncia formalmente la anexión a Rusia de los cuatro territorios ucranianos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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