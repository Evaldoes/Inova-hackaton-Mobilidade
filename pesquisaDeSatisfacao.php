<!doctype HTML>
<HTML lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pibec</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/principal.css">
    <link rel="stylesheet" href="../assets/css/pesquisaDeSatisfacao.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/rodape.css"/>

  </head>

  <body>

    <main class=" container">

      <!-- Inicio Bloco Formulário Pesquisa de Satisfação -->
      <div class="blcoFormCabecalho col-md-12">

        <form method="post" action="processaAvaliacaoInsert.php" class="formPesqSats form-group" role="search">
          <?php
          if	(array_key_exists('idProfessor', $_POST))	{
            $idSetor = $_POST["idSetor"];
            $descricao = $_POST["descricao"];
            $idCurso = $_POST['idCurso'];
            $nomeCurso = $_POST['nomeCurso'];
            $escola = $_POST['escola'];
            $modulo = $_POST['modulo'];
            $turno = $_POST['turno'];
            $idProfessor = $_POST['idProfessor'];
            $nomeProfessor = $_POST['nomeProfessor'];
          }else{
            echo"erro";
          }
          ?>
          <div class="linhaCabecalho">

            <div class="col-md-12">
              <!-- Logo do Governo do Amazonas-->
              <img class="imgLogoGovAm" src="../assets/img/logoCetam.png"></img>
              <!-- Logo Cetam-->
              <img class="imgLogoCetam" src="../assets/img/logoCetam.png"></img>
            </div>
            <div class="rowCabecalho1">
              <!-- Informações Iniciais Do questionário-->

              <div class="colMdAuxi">

                <?php
                echo "<p>  Centro de Educação Tecnológica do Amazonas <br>
                $descricao <br>
                ";
                //idCurso:-->
                echo "  <input id='idIdCurso' type='text' value='$idCurso'
                name='idCurso' class='csInputForm' size='2'>";
                // nomeCurso:-->
                echo "<input id='idNomeCurso' type='text' value='$nomeCurso'
                name='nomeCurso' class='csInputForm' size='30'>";
                ?>
              </p>
            </div>
          </div>
        </div>

        <h1>Formulário do Aluno</h1>
        <p>
          <!-- Escola:-->
          <?php echo "Escola: <input id='idEscola' type='text' value='$escola'
          name='escola' class='csInputForm' size='10'>";?>
          <br>
          <!-- Modulo:-->
          <?php echo "Modulo: <input id='idModulo' type='text' value='$modulo'
          name='modulo' class='csInputForm' size='2'>";?>
          <!-- Turno:-->
          <?php echo "Turno: <input id='idTurno' type='text' value='$turno'
          name='turno' class='csInputForm' size='2'>";
          echo date('d/m/');?>
        </p>

        <p>1 = Péssimo  2 = Ruim  3= Bom  5 = Muito Bom </p>
        <p>
          <!-- idProfessor:-->
          <?php echo "Id: <input id='ididProfessor' type='text' value='$idProfessor'
          name='idProfessor' class='csInputForm' size='2'>";?>
          <!-- idProfessor:-->
          <?php echo "Prof.: <input id='idnomeProfessor' type='text' value='$nomeProfessor'
          name='nomeProfessor' class='csInputForm'>";?>
        </p>
      </div>


      <div class="col-md-12">
        <table class="table table-bordered">
          <caption> <h2>Auto Avaliação do Aluno na Disciplica </h2></caption>
          <thead>
            <tr>
              <th scope="col">Quesito</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <?php
              echo "<td>1. Fui assíduo e cumpridor do horário das aulas?";
              ?>
              [<input id="idQ1" type="text" name=notaQ1 class="inputFormNota">]
              <br>
              <label class="radio-inline">
                <input type="radio" nome=opcao1
                onclick="insereNotaCampoInput(1, 'idQ1')">1</label>

                <label class="radio-inline">
                  <input type="radio" name=opcao1
                  onclick="insereNotaCampoInput(2, 'idQ1')">2</label>

                  <label class="radio-inline">
                    <input type="radio" name="opcao1"
                    onclick="insereNotaCampoInput(3, 'idQ1')">3</label>

                    <label class="radio-inline">
                      <input type="radio" name="opcao1"
                      onclick="insereNotaCampoInput(4, 'idQ1')">4</label>

                      <label class="radio-inline">
                        <input type="radio" name="opcao1"
                        onclick="insereNotaCampoInput(5, 'idQ1')">5</label>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div class="col-md-12">
                <table class="table table-bordered">
                  <caption> <h2>Quanto ao Desempenho do Professor na Disciplica </h2></caption>
                  <thead>
                    <tr>
                      <th scope="col">Quesito</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>1. Fui assíduo e cumpridor do horário das aulas?
                        [<input id="idQ2" type="text" name="notaQ2" class="inputFormNota">]
                        <br>
                        <label class="radio-inline">
                          <input type="radio" nome="opcao2"
                          onclick="insereNotaCampoInput(1, 'idQ2')">1</label>

                          <label class="radio-inline">
                            <input type="radio" name="opcao2"
                            onclick="insereNotaCampoInput(2, 'idQ2')">2</label>

                            <label class="radio-inline">
                              <input type="radio" name="opcao2"
                              onclick="insereNotaCampoInput(3, 'idQ2')">3</label>

                              <label class="radio-inline">
                                <input type="radio" name="opcao2"
                                onclick="insereNotaCampoInput(4, 'idQ2')">4</label>

                                <label class="radio-inline">
                                  <input type="radio" name="opcao2"
                                  onclick="insereNotaCampoInput(5, 'idQ2')">5</label>
                                </td>
                              </tr>

                            </tbody>
                          </table>


                          <table class="table table-bordered">
                            <caption> <h2>Sugestões</h2></caption>
                            <thead>
                              <tr>
                                <th scope="col">Descrição</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td>
                                  <textarea id="idTxtAreaFormSugestao" name="sugestao"
                                  rows="2" cols="23"></textarea>
                                  <br>

                                </td>
                              </tr>

                            </tbody>
                          </table>


                          <br>
                          <input type="submit" value="Finalizar" class="bnt">

                        </form>
                      </div>
                    </div>
                    <!-- Fim Bloco Formulário Pesquisa de Satisfação -->

                  </main>

                  <footer>
                    <address>
                      <script src="../assets/js/texto-rodape.js"></script>
                    </address>
                  </footer>
                </div>
                <script src="../assets/js/jquery.js"></script>
                <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
                <script src="../assets/js/insereValorCampoInput.js"></script>
                <script src="../assets/js/scripts.js"></script>

              </body>
              </html>
