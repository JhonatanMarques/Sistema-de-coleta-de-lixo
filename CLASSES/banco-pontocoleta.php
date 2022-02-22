<?php

Class coleta
{
	private $pdo;
	public $msgErro = "";//tudo ok

	public function conectar($nome, $host, $coleta, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome,$coleta,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}

	public function cadastrar($nome,$bairro,$endereco,$complemento )
    
	{
		
		
		global $pdo;
        /*
		//verificar se já existe o email cadastrado
		$sql = $pdo->prepare("SELECT id_usuario FROM agendamento WHERE email = :e");
		$sql->bindValue(":e",$email);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; //ja esta cadastrado
		}
        */
		
		
		{
			//caso nao, Cadastrar
			$sql = $pdo->prepare("INSERT INTO pontodecoleta (nome_pontodecoleta, bairro_pontodecoleta, endereco_pontodecoleta, complemento_pontodecoleta) VALUES (:n,:b,:e,:c)");
			$sql->bindValue(":n",$nome);
            $sql->bindValue(":b",$bairro);
            $sql->bindValue(":e",$endereco);
            $sql->bindValue(":c",$complemento);
        
			$sql->execute();
			return true; //tudo ok
		}
	}

    /*
	public function logar($email, $senha)
	{
		global $pdo;
		//verificar se o email e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT id_usuario FROM agendamento WHERE email = :e AND senha = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true; //cadastrado com sucesso
		}
		else
		{
			return false;//nao foi possivel logar
		}
	}*/
}







?>