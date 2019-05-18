<!doctype HTML>
<HTML lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PIBEC</title>
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../assets/css/estiloCadastro.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <!--  <link rel="stylesheet" href="../assets/css/estilos.css"> -->
  <link rel="stylesheet" href="../assets/css/index.css">
  <link rel="stylesheet" href="../assets/css/principal.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/rodape.css"/>

</head>

<body>

  <!-- Bloco faixa -->
  <div class="blocoFaixaIbcCetam row col-md-12">
    <img class="imgFaixaIbcCetam" src="../assets/img/faixaIbcCetam.jpg"></img>
  </div><!-- Fim bloco fixa -->


  <!-- Bloco Barra Menu-->
    <div class="blocoOpcoesMenuBarra row col-md-12">
      <nav>
        <ul class="menu">
          <a href="index.html"><li>HOME</li></a>
          <a href="index.html"><li>HOME</li></a>
          <a href="index.html"><li>HOME</li></a>
          <a href="index.html"><li>HOME</li></a>
          <a href="index.html"><li>HOME</li></a>
          <a href="index.html"><li>HOME</li></a>
        </ul>
      </nav>
    </div>
    <!--Fim Bloco Barra Menu-->

  <main class="blocoMain container">

    <div row col-md-8>

      <br>
      <h1>CADASTRO DE PROFESSOR</h1>
      <br>
      <hr>
        <section class="formulario">
          <form  action="processaCadastroProfessor.php" method="post">
          Nome<br>
          <input type="text" name="nome" class="campo" maxlength="45" required autofocus placeholder="Informe o nome"><br><br>
          Matrícula<br>
          <input type="text" name="matricula" class="campo" maxlength="10" required autofocus placeholder="Informe o nome a matrícula"><br><br>
          Especialidade<br>
          <input type="text" name="esp" class="campo" maxlength="45" required autofocus placeholder="Informe a especialidade"><br><br>
          E-mail<br>
          <input type="text" name="email" class="campo" maxlength="45" required placeholder="Informe o seu e-mail"><br><br>
          <input type="submit" value="Salvar" class="btnsalvar" name="salvar">
          <input type="reset" value="Linpar" class="btnlimpar" name="limpar">
          <br><br><br>
          </form>
        </section>

    </div>

  </main>

  <footer>
    <address>
      <script src="../assets/js/texto-rodape.js"></script>
    </address>
  </footer>
</div>
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src=../"assets/js/scripts.js"></script>

</body>
</html>
