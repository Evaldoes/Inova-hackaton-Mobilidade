<!doctype HTML>
<HTML lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PIBEC</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/principal.css">
    <link rel="stylesheet" href="../assets/css/consultarProfessor.css">
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
        </ul>
      </nav>
    </div>
    <!--Fim Bloco Barra Menu-->

    <main class="container">


    <div class="row col-md-12">
      <h2> Selecione o Professor</h2>
    </div>

    <!-- **** -->
    <!-- Bloco de Resultados de Busca-->
    <!-- **** -->
    <div class="row col-md-8 blocoTabelaResultado">
      <?php
      include "filtroProfessor.php"
      ?>
    </div>
    <!--Fim Bloco de Resultados de Busca -->

    

    <!-- *** -->
    <!-- Início Bloco de Formulário Confirma Dados e Envia-->
    <!-- *** -->
    <div class="row col-md-6">


      <form method="post" action="resultadoPesquisaProfessor.php"
      class="formConfirmaDados">
      <fieldset>
      <br>
      <label class="lblForm">IdProfessor: </label>
      <input id="idIdProfessor" type="text" name="idProfessor" class="csInputForm">
      <br>
      <label class="lblForm">Nome: </label>
      <input id="idNomeProfessor" type="text" name="nomeProfessor" class="csInputForm">
      <br>
      
      <br>
      <br>
      <input type="submit" value="Avançar >>" class="bnt">
      </fieldset>
    </form>
  </div><!-- Fim Bloco de Formulário Confirma Dados e Envia-->

</main>

<footer>
  <address>
    <script src="../assets/js/texto-rodape.js"></script>
  </address>
</footer>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/selecionarProfessorDaLista.js"></script>
<script src="../assets/js/filtra.js"></script>


</body>
</html>
