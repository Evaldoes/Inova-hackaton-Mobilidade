<?php

  $target="Usuario.php";
  if(basename($_SERVER["PHP_SELF"])== $target){
    die("<meta charset='utf-8'><title></title><script>window.location=('/')</script>");
  }
  
  class Usuario{
    public $nome;
    private $senha;
    public $email;
    public $telefone;

    public function setPasswd($senha){
      $this->senha = $senha;
    }
    
    public function getPasswd(){
      return $this->senha;
    }

    public function auth(){
      try {
        $db = new PDO("mysql:host=localhost; dbname=reportransito ", "root", "281295");
        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $statement = $db->prepare("SELECT senha FROM Usuarios WHERE email = :email");
        $statement->bindValue(':email',$this->email);
        $run = $statement->execute();
        $result = $statement->fetch();
        $senha = $this->senha;
        $hashed = $result['senha'];
        if(password_verify($senha,$hashed)){
          return TRUE;
        }else {
          return FALSE;
        }
      } catch(PDOException $exception){
        unset($db);
        echo $exception;
        return FALSE;
      }
        unset($db);
    }


    public function register(){
      try {
        $db = new PDO("mysql:host=localhost; dbname=reportransito", "root", "281295");
        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $db->beginTransaction();
        //CRIACAO DE USUARIO
        $statement = $db->prepare("INSERT INTO Usuarios (nome,senha,email,telefone) VALUES (:nome,:senha,:email,:telefone)");
        $statement->bindValue(':nome',$this->nome);
        $hashPass = password_hash($this->getPasswd(),PASSWORD_DEFAULT);
        $statement->bindValue(':senha',$hashPass);
        $statement->bindValue(':email',$this->email);
        $statement->bindValue(':telefone',$this->telefone);
        $statement->execute();

        $db->commit();
      } catch (PDOException $exception){
        $db->rollback();
        unset($db);
        echo $exception;
      }

      unset($db);
    }
    
  }

?>