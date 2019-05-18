<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PIBEC</title>
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="../assets/css/principal.css">
  <link rel="stylesheet" href="../assets/css/carousel.css">
  <link rel="stylesheet" href="../assets/css/login.css">
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
        <a href="index.html"><li>Home</li></a>
        <a href="consultarCurso.php"><li>Avaliar</li></a>
        <a href="login.php"><li>Login</li></a>
      </ul>
    </nav>
  </div>
  <!--Fim Bloco Barra Menu-->


  <main class="container">
    <div class="row">
      <div class="col-md-2 b1ocoAux"> </div>

      <section class="col-md-6 blocoLogin">
        <hr>
        <div class="row">
          <img src="../assets/img/user.png"
          class="blocoImgLogin">
        </div>

        <div class="row blocoForm">
          <form method="post" action="processaLogin.php">

            <div class="blocoFormInput">
              <label for="login">Login:</label> <br>
              <input type="text" name="login" class="campoInput" required="" >
              <br>
              <label for="senha">Senha:</label><br>
              <input type="PASSWORD" name="senha" class="campoInput" required="" >
              <br><br>
            </div>



            <div class="blocoFormBtn">
              <input type="submit" value="Entrar" class="bnt">
              <input type="reset" value="Limpar" class="bnt">
            </div>

            <br><br>
          </form>
        </div>

      </section>
      <div class="col-md-2 b1ocoAux"> </div>
    </div>




  </main>

  <footer>
    <address>
      <script src="../assets/js/texto-rodape.js"></script>
    </address>
  </footer>

  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/scripts.js"></script>

</body>
</html>
