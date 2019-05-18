<!doctype HTML>
<HTML lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PIBEC</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/usuario.css">
    <link rel="stylesheet" href="../assets/css/botao.css">
    <link rel="stylesheet" href="../assets/css/principal.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/rodape.css"/>

  </head>

  <body>

    <!-- Bloco faixa -->
    <div class="blocoFaixaIbcCetam row col-md-12">
      <img class="imgFaixaIbcCetam" src="../assets/img/faixaIbcCetam.jpg"></img>
    </div><!-- Fim bloco fixa -->


    <!-- Bloco Barra Menu-->
    <div class="blocoOpcoesMenuBarra">
      <nav>
        <ul class="menu">
          <a href="index.html"><li>Home</li></a>
          <a href="curso.php"><li>Curso</li></a>
          <a href="professor.php"><li>Professor</li></a>
          <a href="usuario.php"><li>Usuário</li></a>
          <a href="gestao.php"><li>Gestão</li></a>
        </ul>
      </nav>
    </div>
    <!--Fim Bloco Barra Menu-->

    <main class=" container">
      <div>
        <h1>Cadastro de Usuários</h1>
        <hr>
      </div>
      <div col-md-12>

        <section col-md-12 class="formulario">
          <form  action="processaUsuario.php" method="post">
            Nome<br>
            <input type="text" name="nome" class="campo" maxlength="45" required autofocus placeholder="Informe o nome"><br><br>
            Função<br>
            <input type="text" name="funcao" class="campo" maxlength="15" required placeholder="Informe a função"><br><br>
            E-mail<br>
            <input type="text" name="email" class="campo" maxlength="45" required placeholder="Informe o seu e-mail"><br><br>
            Login<br>
            <input type="text" name="login" class="campo" maxlength="45" required placeholder="Informe o seu login"><br><br>
            Senha<br>
            <input type="text" name="senha" class="campo" maxlength="8" required autofocus placeholder="Informe a senha"><br><br>
            <input type="submit" value="Salvar" class="btn" name="salvar">
            <input type="reset" value="Limpar" class="btn" name="limpar">
            <br><br><br>
          </form>
        </section>
        <?php
        //
        // if ($_GET['login']){
        //   include "processaUsuario.php";
        // }

        ?>
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
