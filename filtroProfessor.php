<!doctype HTML>
<HTML lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PIBEC</title>
  </head>

  <body>



    <!-- *** -->
    <!-- Bloco Filtro -->
    <!-- *** -->
    <div class="row col-md-8">
      <hr>
      <label class="labelConsultar">Filtrar: </label>
      <div class="form-group">
        <input type="text" name="nomeProfessor"
        id="idInputFormFiltrar" class="form-control"
        placeholder="Primeiro Nome Professor.">
      </div>
    </div>
    <!-- Fim Bloco Filtro-->

    <?php
    include "conexao.php";
    if ($conexao) {

      $selecaoBd = mysqli_select_db($conexao, "pibec");

      if ($selecaoBd) {

        //  $nomeCurso = isset($_GET['nomeCurso'])?$_GET['nomeCurso']:"";

        // $nomeCurso = isset($_POST['nomeCurso']);
        /*
        if	(array_key_exists('nomeProfessor',	$_POST))	{
        $palavra = $_POST['nomeProfessor'];
        $comandoSql = "select * from Professor where nome like '%$palavra%'";
      }else{
      $comandoSql = "select * from Professor";
    }
    */
    $comandoSql = "select * from pessoa p
	   inner join professor z on (p.idpessoa = z.Pessoa_IdPessoa);";

    $retornoConsulta = mysqli_query($conexao, $comandoSql);

    $qntdRegistros = mysqli_num_rows($retornoConsulta);

    if ($retornoConsulta){

      ?>

      <table id="idTabProfessor" class="table table-striped">
        <caption>
          <?php print("$qntdRegistros")?> Resultados Listados(s). Selecione um.
        </caption>
        <thead>
          <tr>
            <th class="thTbl1" scope="col">IdProfessor.</th>
            <th scope="col">Nome</th>
          </tr>
        </thead>
        <tbody id="idTbody" class="tBody">
          <?php

          while ($listarRegistros = mysqli_fetch_array($retornoConsulta)) {
            $idPessoa = $listarRegistros[0];
            $nomeProfessor = $listarRegistros[1];
            ?>
            <tr class="linhaTbl">
              <?php

              echo "  <td class = 'td1'>$idPessoa</td>";
              echo "  <td class = 'td2'>$nomeProfessor</td>";
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


</body>
</html>
