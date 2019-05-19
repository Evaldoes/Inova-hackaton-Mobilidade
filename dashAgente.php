<!doctype HTML>
<HTML lang="pt-br">
  <head>
    <?php include("includes/head.php"); ?>

  </head>

  <body>
    <div class="conteiner-inicio">
      <div class="filtro">
        <div class="bkg-inicio">
            <div class="box-cadastro">
                <div class="form-cad" >
                    <div class="box-form" method="POST"  style="border: 0;" action="">
                        <span class="titulo">Minhas Ocorrências</span>
                        <div>
                            <button class="add">+</button></div>
                        
                            <table>
                            
                                <tr>
                                    <td>
                                    <a class="nome-paciente" href="detalhesDisciplina.php?codigo=<?=$dic->codigo?>"><?=$dic->codigo?>pane em semáforo</a>
                                    <i class="fas fa-check check-list  " ></i>
                                    </td>
                                </tr>
                            
                            </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>



    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src=../"assets/js/scripts.js"></script>

  </body>
  </html>
