<?php

function validarLoginRetornaNomeId($conexao, $login, $senha)
{
	$sql = "select idPessoa, nome from pessoa
	inner join usuario on (pessoa.idpessoa = usuario.Pessoa_IdPessoa)
	where login = '{$login}' and senha ='{$senha}'";
	$retorno = mysqli_query($conexao, $sql);
	$dados = array();
	while ($valorCampo = mysqli_fetch_assoc($retorno)) {
		$dados[] = $valorCampo;
	}
	return $dados;
}

?>
