<?php

    require_once "../class/Usuario.php";

    //REGISTRO CIDADAO
    if( isset($_POST['senha']) && isset($_POST['email']) ){
        
       
        $novoCidadao = new Usuario();
        $novoCidadao->nome                = $_POST['nome'];
        $novoCidadao->setPasswd($_POST['senha']);
        $novoCidadao->email               = $_POST['email'];
        $novoCidadao->telefone            = $_POST['telefone'];
        
        $novoCidadao->register();

        header('Location:   /index.php');
        die();
    }
?>