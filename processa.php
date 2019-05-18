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
			include "conexao.php";
			session_start();			
			$nome = $_POST['nome'];
			$email =  $_POST['email'];
			$profissao = $_POST['profissao'];
			## ok
			

			$sql = "insert into usuarios (nome, email, profissao) 
					values ('{$nome}', '{$email}', '{$profissao}')";
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
		
	</body>
<HTML>