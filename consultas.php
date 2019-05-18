<!doctype HTML>
<HTML lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Consulta</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>
		<form method="get" action="">
			filtrar por profissão: 
			<input type="text" name="filtro" class="campo" required="" autofocus="">
			<input type="submit" name="" value="pesquisar" class="btn">
		</form>
		 <?php 
		 	print("Resultados com a Palavra $filtro <br> <br>");		 	
		 	print("$registros registros encontrados <br> <br>");		 	
		 	while ($exibiRegistros = mysqli_fetch_array($consultas)) {
		 		$codigo = $exibiRegistros[0];
		 		$nome = $exibiRegistros[1];
		 		$email = $exibiRegistros[2];
		 		$profissao = $exibiRegistros[3];

		 		print("$codigo<br>");
		 		print("$nome<br>");
		 		print("$email<br>");
		 		print("$profissao<br>");

		 		mysql_close($conexao);
		 	}

		 	$filtro = isset($_get[filtro])?$_get[filtro]:"";
			$sql = "select * from Usuarios where profissao like %filtro"
		 ?>
			
	</body>
<HTML>