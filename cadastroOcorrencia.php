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
            <div class="box-nav">
              
              <div class="nav-icon">
                  <a class="text" href="dashCidadao.php">
                  <i class="fas fa-th-large"></i>
                  </a>
                  <a class="text" href="index.php">
                    <i class="fas fa-sign-out-alt"></i>
                  </a>
              </div>
            </div>
                <div class="form-cad-chato" >
                    <form class="box-form" method="POST"  style="border: 0;" action="">
                        <span class="titulo">Nova Ocorrência</span>
                        <div class="box-input">
                            <label class="placehol" for="">Categoria</label>
                            <input class="input-text" value="Buracos na Pista" type="text">
                        </div>
                        <div class="box-input">
                            <label class="placehol" for="">Latitude</label>
                            <input class="input-text" value="-257.57.895" type="text">
                        </div>
                        <div class="box-input">
                            <label class="placehol" for="">Logitude</label>
                            <input class="input-text" value="-255.255.255.255" type="text">
                        </div>
                        <div class="box-input">
                            <label class="placehol" for="">Ocorrência</label>
                            <textarea class="area" type="area-text" value="muitos buracos na pista  " cols="30" rows="5"></textarea>
                        </div>  

                        <div class="form-submit">
                           <a href="ocorrenciasCidadao.php"><input class="botao " type="button" value="Salvar" class="submit" id="submit" name="submit"> </a>
                        </div>

                    </form>
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
