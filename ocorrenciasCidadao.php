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
              <div class="form-cad" >
                <div class="box-form" method="POST"  style="border: 0;" action="">
                  <div class="box-ocorrencia">
                    <div class="ocorrencia ocorr-resolvida">
                      <div class="dados">
                        <div>
                          <span class="span-chato">Cod: 000</span>
                        </div>
                        <div>
                          <span class="span-chato">Buraco na pista</span>
                        </div>
                        <div>
                          <span class="date span-chato">02/05/19</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-ocorrencia">
                      <div class="ocorrencia ocorr-nao-resolvida">
                        <div class="dados">
                          <div>
                            <span class="span-chato">Cod: 000</span>
                          </div>
                          <div>
                              <span class="span-chato">Buraco na pista</span>
                          </div>
                          <div>
                            <span class="date span-chato">02/05/19</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
                <div class="box-foot">
                <div class="bolinhas">
                          <div>
                            <div class="green"></div>
                            <span class="span-chato">resolvido</span>
                          </div>
                          <div>
                            <div class="red"></div>
                              <span class="span-chato">Pendente<span>
                          </div>
                          
                        </div>
                </div>
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
