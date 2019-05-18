<!doctype HTML>
<?php session_start(); ?>
<HTML lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CadastroWeb</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>

		<?php
		#include_once(!conexao.php);
		include "funcValidaLoginRetornaNomeId.php";
		include "conexao.php";
		$login =  $_POST['login'];
		$senha = $_POST['senha'];
		## ok
		echo "$login";
		echo "$senha";

	//	$selecaoBd = mysqli_select_db($conexao, "pibec");

		/*
		*Valida e retorna um registro (arrey) com o Nome e Id do Usuário.
		*/
	 //	$retorno = validarLoginRetornaNomeId($conexao, $login, $senha);

		// $arrayName = array('' => , );

		//$qntdRegistros = sizeof($retorno);
		$sql = "select idPessoa, nome from pessoa
		inner join usuario on (pessoa.idpessoa = usuario.Pessoa_IdPessoa)
		where login = '{$login}' and senha =md5('{$senha}')";
		$retorno = mysqli_query($conexao, $sql);
		mysqli_close($conexao);
		$qntdRegistros = mysqli_num_rows($retorno);
		// echo ". Quantidade Registros: $qntdRegistros";

		if ($qntdRegistros > 0)
		{
			while ($exibiRegistros = mysqli_fetch_array($retorno)) {
		 		$idPessoa = $exibiRegistros[0];
		 		$nome = $exibiRegistros[1];
		 		print("<br> Id Pessoa: $idPessoa<br>");
		 		print("Nome:$nome<br>");


				setcookie ("idUsuario", $idPessoa,time()+3600);  /* expire in 1 hour */
				setcookie ("nomeUsuario", $nome,time()+3600);  /* expire in 1 hour */
		 	}
			 include "gestao.php";
		}
		else{
			// unset($_SESSION['login']);
			// unset($_SESSION['senha']);
			 echo "Usuario ou senha incorreto.";
		}

		?>



		</body>
		<HTML>
