<!doctype HTML>
<HTML lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Sistema de Cadastro WEB</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>
		<div class="container">			
			<nav>
				<ul class="menu">
				<a href="index.php"><li>CADASTRO</li></a>
				<a href="consultas.php"><li>CONSULTAS</li></a>

			</ul>
			</nav>
			<section>
				<h1>Cadastro de usuários</h1>
				<span>
					<?php echo date('d/m'); ?>
				</span>
				<hr><br><br>
				<form method="POST" action="processa.php">
					Nome:<br>
					<input type="text" name="nome" class="campo" maxlength="40" required="" autofocus=""><br>

					Email:<br>
					<input type="email" name="email" class="campo" maxlength="50" required ><br>

					Profissão:<br>
					<input type="text" name="profissao" class="campo" maxlength="50" required="" ><br><br>

					<input type="submit" value="Salvar" class="bnt">
					<input type="reset" value="Limpar" class="bnt">
					<br><br>
				</form>
			</section>
		</div>
			
	</body>
<HTML>