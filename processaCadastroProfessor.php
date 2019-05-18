<!doctype HTML>
<HTML lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CadastroWeb</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>

		<?php
			#include_once(!conexao.php);



			
			$nome = $_POST['nome'];
			$matricula =  $_POST['matricula'];
			$especialide = $_POST['esp'];
			$email = $_POST['email'];
			
			## ok

			include "conexao.php";
			session_start();
			

			$sql = "insert into pessoa (nome, email, matricula)
					values ('{$nome}', '{$email}', '{$matricula}')";
			#$salvar = mysqli_query($conexao, $sql);

			
				$salvo = mysqli_query($conexao, $sql);
				
			

			

			

			
			$sql = "select idPessoa from pessoa where matricula = $matricula";

			$consulta = mysqli_query($conexao, $sql);
			$registros = mysqli_num_rows($consulta);

			while($exibirRegistros = mysqli_fetch_array($consulta)){
						$idPessoa = $exibirRegistros[0];
					}

			$sql = "insert into professor (especialidade, pessoa_idPessoa)
					values ('{$especialidde}', '{$idPessoa}')";
			#$salvar = mysqli_query($conexao, $sql);

			try {
				$salvo = mysqli_query($conexao, $sql);
				mysqli_close($conexao);
			} catch (PDOException $e) {
				echo "Falha na conexão com o banco de dados: ";
				die();
			}
			#$linhas = 1;
			//$linhas = mysqli_affected_rows($conexao);
		 ?>
		<script>
			alert("Cadastro realizado com sucesso");
		</script>;

		<?php
		include "cadastroProfessor.php";
		?>

	</body>
<HTML>
