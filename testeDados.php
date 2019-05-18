<?php
if	(array_key_exists('idCurso',$_POST))	{
        echo	"valor:	"	.	$_POST['idCurso'];
        $idCurso = $_POST['idCurso'];
        $nomeCurso = $_POST['nomeCurso'];
        $escola = $_POST['escola'];
        $modulo = $_POST['modulo'];
        $turno = $_POST['turno'];

}else {
  echo "ERRO000000000000";
}
