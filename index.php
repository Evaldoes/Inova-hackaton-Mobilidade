<!doctype HTML>
<HTML lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PIBEC</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!--  <link rel="stylesheet" href="../assets/css/estilos.css"> -->
    <link rel="stylesheet" href="../assets/css/principal.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/rodape.css"/>

  </head>

  <body>
    <!-- Bloco faixa -->
    <div class="blocoFaixaIbcCetam">
      <img class="imgFaixaIbcCetam" src="../assets/img/faixaIbcCetam.jpg"></img>
    </div><!-- Fim bloco fixa -->

    <!-- Bloco Barra Menu-->
    <div class="blocoOpcoesMenuBarra">
      <nav>
        <ul class="menu">
          <a href="cliente.php"><li>PROFESSORES</li></a>
          <a href="consultarCurso.php"><li>AVALIAR</li></a>
          <a href="login.php"><li>LOGIN</li></a>
        </ul>
      </nav>
    </div>
    <!--Fim Bloco Barra Menu-->

    <!-- Bloco Carosel -->
    <div class="wrapper-carousel">
      <div id="carouselSlides" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carouselSlides" data-slide-to="0" class="active"></li>
          <li data-target="#carouselSlides" data-slide-to="1"></li>
          <li data-target="#carouselSlides" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img src="../assets/img/user1.png" alt="user1!">
            <div class="carousel-caption">
              <h2>Carousel<br>1</h2>
            </div>
          </div>

          <div class="item">
            <img src="../assets/img/user1.png" alt="user1!">
            <div class="carousel-caption">
              <h2>Carousel<br>2</h2>
            </div>
          </div>

          <div class="item">
            <img src="../assets/img/user1.png" alt="user1!">
            <div class="carousel-caption">
              <h2>Carousel<br>3</h2>
            </div>
          </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselSlides" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselSlides" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- Fim Bloco Carosel -->

    <main class="blocoMain">

      <div class="container">

        <div class="blocoImgPlanoDeFundoIbc">
          <img class="imgPlanoDeFundoIbc" src="../assets/img/pesquisa.png"></img>
        </div>

      </div>

    </main>

    <footer>
      <address>
        <script src="../assets/js/texto-rodape.js"></script>
      </address>
    </footer>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src=../"assets/js/scripts.js"></script>

  </body>
  </html>
