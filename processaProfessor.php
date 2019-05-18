
		<?php
			#include_once(!conexao.php);

			include "conexao.php";
			if ($_COOKIE["idUsuario"] and $_POST['nome'] ){
				$nome = $_POST['nome'];				
				$email = $_POST['email'];
				$especialidade = $_POST['especialidade'];
				$idUsuario = $_COOKIE["idUsuario"];
				## ok

			$sql = "select cadastrarProfessor('{$nome}', '{$email}', '{$especialidade}', '{$idUsuario}')";


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

