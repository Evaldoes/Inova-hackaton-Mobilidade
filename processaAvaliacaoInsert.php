<!doctype HTML>
<HTML lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>PIBEC</title>
		<link rel="stylesheet" href="../assets/css/reset.css">
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="../assets/css/sucessoAvaliacao.css">
		<link rel="stylesheet" href="../assets/css/principal.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/rodape.css"/>

	</head>

	<body>

		<!-- Bloco faixa -->
		<div class="blocoFaixaIbcCetam row col-md-12">
			<img class="imgFaixaIbcCetam" src="../assets/img/faixaIbcCetam.jpg"></img>
		</div><!-- Fim bloco fixa -->


		<!-- Bloco Barra Menu-->
		<div class="blocoOpcoesMenuBarra">
			<nav>
				<ul class="menu">
					<a href="index.html"><li>HOME</li></a>
				</ul>
			</nav>
		</div>
		<!--Fim Bloco Barra Menu-->

		<main class="blocoMain container">

			<div col-md-8>

				<?php

				if	(array_key_exists('idCurso', $_POST))	{
					$opcaoSimNao = "S";
					$idCurso = $_POST['idCurso'];

					$idProfessor = $_POST['idProfessor'];
					$sugestao = $_POST['sugestao'];


					$nota = $_POST['notaQ1'];


					$nota = $_POST['notaQ2'];
					#include_once(!conexao.php);
					include "conexao.php";

					session_start();

					$idQuesito = 1;
					$idQuestao = 2;
						$idPessoa = 1;
						$idSetor = 1;

					$sql = "select cadastrarAvaliacao('{$sugestao}','{$idPessoa}',
					'{$idCurso}','{$idProfessor}','{$idSetor}')";
					$salvo1 = mysqli_query($conexao, $sql);

					$sql = "select cadastrarNota('{$nota}', '{$idQuestao}')";
					$salvo2 = mysqli_query($conexao, $sql);

					$idQuesito = 2;
					$idQuestao = 3;


					$sql = "select cadastrarNota('{$nota}', '{$idQuestao}')";
					$salvo4 = mysqli_query($conexao, $sql);

					mysqli_close($conexao);

					if($salvo1 and $salvo2){
						include "sucessoAvaliacao.php";
					}else{
						echo "<P id='pMsg'>Opss!! <br> Houve um erro de inserção de dados.</P>";
					}
					#$linhas = 1;
					//$linhas = mysqli_affected_rows($conexao);

				}else{
					echo "<P id='pMsg'>Erro! Possivelmente há campos vazios da tela anterior.</P>";

				}

				?>

			</div>

		</main>

		<footer>
			<address>
				<script src="../assets/js/texto-rodape.js"></script>
			</address>
		</footer>
	</div>
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/js/scripts.js"></script>

</body>
</html>
