				<?php

				function processaUsuario (){

				}
				if ($_COOKIE["idUsuario"] and $_POST['login'] ){
				$nome = $_POST['nome'];
				$funcao = $_POST['funcao'];
				$email = $_POST['email'];
				$login =  $_POST['login'];
				$senha = $_POST['senha'];

					$idUsuario = $_COOKIE["idUsuario"];

					## ok

					include "conexao.php";

					$sql = "select cadastrarLogin('$nome','{$email}',
					'{$funcao}', '{$login}','{$senha}','{$idUsuario}')";

					if($retorno = mysqli_query($conexao, $sql)){

						$qntdRegistros = mysqli_num_rows($retorno);

						if ($qntdRegistros > 0)
						{
							echo "
							<script>
							alert('Cadastro realizado com sucesso');
							</script>
							";
							echo"<p id='pMsg'>Cadastro realizado com sucesso.</p>";
						}else{
							echo "<pid='pMsg'> Falha na inserção de dados. </p>";
						}
					}else{
						echo "Erro! Verifique se os dados foram preenchidos.";
					}
				}else {
					echo "Você precisa entrar com login e senha";

				}

				mysqli_close($conexao);
				?>
