<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include("includes/head.php"); ?> 
  
</head>

<body>
<script>alert('Ocorrêcia Cadastrada, Obrigado!')</script>"

<div class="conteiner-inicio">
      <div class="filtro">
        <div class="bkg-inicio">
            <div class="box-cadastro">
                <div class="form-cad" >
                    <form class="box-form" method="POST"  style="border: 0;" action="controllers/register.php">
                        <div class="logo-report" style="color:white;">
                           <span style="color: black; background-color:#d5d628; font-size: 24px; padding: 5px; border-radius: 5px 0 0 5px;">REPOR</span><span style="color: #d5d628; background-color:black; font-size: 24px; padding: 5px; border-radius: 0 5px 5px 0;" >TRÂNSITO</span>
                        </div>
                        <span class="titulo-cadastro">Faça seu Cadastro</span>
                        <div class="box-input">
                            <label class="placehol required" for="">Nome</label>
                            <input class="input-text" name="nome" value="Evaldo cardoso" type="text" required> 
                        </div>
                        <div class="box-input">
                            <label class="placehol required" for="">Email</label>
                            <input class="input-text" name="email" value="teste@teste.com" type="text" required>
                        </div>
                        <div class="box-input">
                            <label class="placehol required" for="">Telefone</label>
                            <input class="input-text" name="telefone" value="12345679" type="text" required>
                        </div>
                        <div class="box-input">
                            <label class="placehol required" for="">Senha</label>
                            <input class="input-text" name="senha" value="123456" type="Password" required>
                        </div>
                        <div class="box-input">
                            <label class="placehol required" for="">Confirmar senha</label>
                            <input class="input-text" name="confirmar" value="123456" type="password" required>
                        </div>

                        <div class="form-submit">

                           <a href="dashCidadao.php"><input class="botao-2 " type="submit" value="Salvar" class="submit" id="submit" name="submit"> </a>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>


  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/scripts.js"></script>

</body>
</html>
