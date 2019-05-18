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
    <link rel="stylesheet" href="../assets/css/consultarCurso.css">
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
        <?php

        if	(array_key_exists('idSetor',	$_POST))	{

          $idSetor = $_POST["idSetor"];
          $descricao = $_POST["descricao"];

        }else {
          echo "Algum campo está vazio.";
        }
        ?>
      </div>
      <div class="row col-md-12">
        <h2> Selecione um curso</h2>
      </div>

      <!-- ***-- -->
      <!-- Bloco Filtro -->
      <!-- *** -->
      <div class="row col-md-8">
        <hr>
        <label class="labelConsultar">Filtrar: </label>
        <div class="form-group">
          <input type="text" name="curso" placeholder="Nome do curso."
          id="idInputFormFiltrar" class="form-control">
        </div>
      </div>
      <!-- Fim Bloco Filtro-->


      <!-- ***-- -->
      <!-- Bloco de Resultados de Busca-->
      <div class="row col-md-8 blocoTabelaResultado">

        <?php
        include "conexao.php";
        if ($conexao) {

          $selecaoBd = mysqli_select_db($conexao, "pibec");

          if ($selecaoBd) {
            // $nomeCurso = isset($_POST['nomeCurso']);

            $comandoSql = "select * from Curso";

            $retornoConsulta = mysqli_query($conexao, $comandoSql);

            $qntdRegistros = mysqli_num_rows($retornoConsulta);

            if ($retornoConsulta){

              ?>

              <table id="idTabCurso" class="table table-striped">
                <caption>
                  <?php print("$qntdRegistros")?> cursos listados(s). Selecione um
                </caption>
                <thead>
                  <tr>
                    <th scope="col">IdCurso.</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Escola</th>
                    <th scope="col">Módulo</th>
                    <th scope="col">Turno</th>
                  </tr>
                </thead>
                <tbody id="idTbody" class="tBody">
                  <?php
                  //  $listarRegistros = mysqli_fetch_array($retornoConsulta);
                  //mysqli_close($conexao);

                  //  while ($qntdRegistros) {
                  while ($listarRegistros = mysqli_fetch_array($retornoConsulta)) {
                    $idCurso = $listarRegistros[0];
                    $nome = $listarRegistros[1];
                    $escola = $listarRegistros[2];
                    $modulo = $listarRegistros[3];
                    $turno = $listarRegistros[4];
                    ?>
                    <tr class="linhaTbl">
                      <?php

                      echo "  <td class='td1'>$idCurso</td>";
                      echo "  <td class='td2'>$nome</td>";
                      echo "  <td class='td3'>$escola</td>";
                      echo "  <td class='td4'>$modulo</td>";
                      echo "  <td class='td5'>$turno</td>";
                      echo "</tr>";

                    }
                    mysqli_close($conexao);
                    ?>

                  </tbody>
                </table>

                <?php
              }
              /*Msg se erro de consulta
              echo "Erro de retorno de consulta dados.";
              */
            }
          }

          ?>

        </div>
        <!--Fim Bloco de Resultados de Busca -->

        <!-- ---------------------------- -->
        <!-- Bloco de Formulário Confirma Dados e Envia-->
        <div class="row col-md-6">

          <form method="post" action="consultarProfessor.php"
          id="idFormConfirmaDados" class="formConfirmaDados">
          <fieldset>
            <?php
            echo "<label name='label' class='lblForm'>Id Setor: </label>";
            echo "<input id='idIdSetor' type='text' name='idSetor' class='csInputForm'
                value='{$idSetor}'>";
            echo "<br>";
            echo "<label name='label' class='lblForm'>Setor: </label>";
            echo "<input id='idDescricao' type='text' name='descricao' class='csInputForm'
                value='{$descricao}'>";
            echo "<br>";
             ?>
            <label name="label" class="lblForm">Id Curso: </label>
            <input id="idIdCurso" type="text" name="idCurso" class="csInputForm" >
            <br>
            <label class="lblForm">Nome: </label>
            <input id="idNome" type="text" name="nomeCurso" class="csInputForm" >
            <br>
            <label class="lblForm">Escola: </label>
            <input id="idEscola" type="text" name="escola" class="csInputForm" >
            <br>
            <label class="lblForm">Módulo: </label>
            <input id="idModulo" type="text" name="modulo" class="csInputForm" >
            <br>
            <label class="lblForm">Turno: </label>
            <input id="idTurno" type="text" name="turno" class="csInputForm" >
            <br>
            <input type="submit" nome="btnAvancar" value="Avançar >>" class="bnt">

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
    <script src="../assets/js/selecionarCursoDaLista.js"></script>
    <script src="../assets/js/filtra.js"></script>

  </body>
  </html>
