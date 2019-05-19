<?php
    session_start();
    require_once "../class/Usuario.php";

    if(isset($_POST['email']) && isset($_POST['senha'])){
            $usuarioSuspeito = new Usuario();
            $usuarioSuspeito->email = $_POST['email'];
            $usuarioSuspeito->setPasswd($_POST['senha']);
            if($usuarioSuspeito->auth()){
                $_SESSION['cidadao'] = $usuarioSuspeito->email;
                header('Location: /dashCidadao.php');
                die();
            }else{
                echo "<script>alert('Email ou Senha inválido!')</script>";
                echo "<meta http-equiv='refresh' content='0, url=/index.php'>";
                
            }
    
    }    

?>