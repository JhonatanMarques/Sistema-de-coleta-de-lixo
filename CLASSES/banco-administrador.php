<?php

Class administrador
{
	private $pdo;
	public $msgErro = "";//tudo ok

	public function conectar($nome, $host, $administradores, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome,$administradores,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
			
		}
	}

	public function cadastrar($nome, $telefone,$cpf,$data, $email, $senha)
	{
		
		
		global $pdo;
		//verificar se já existe o email cadastrado
		$sql = $pdo->prepare("SELECT id_administrador FROM administradores WHERE email_administrador = :e");
		$sql->bindValue(":e",$email);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; //ja esta cadastrado
		}
		
		else
		{
			//caso nao, Cadastrar
			$sql = $pdo->prepare("INSERT INTO administradores (nome_administrador, telefone_administrador, cpf_administrador, admissao_administrador, email_administrador, senha_administrador) VALUES (:n, :t,:c,:a, :e, :s)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":t",$telefone);
			$sql->bindValue(":c",$cpf);
			$sql->bindValue(":a",$data);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha));
			$sql->execute();
			return true; //tudo ok
		}
	}


	public function logar($email, $senha)
	{
		global $pdo;
		//verificar se o email e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT id_administrador FROM administradores WHERE email_administrador = :e AND senha_administrador = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_administrador'] = $dado['id_administrador'];
			return true; //cadastrado com sucesso
		}
		else
		{
			return false;//nao foi possivel logar
		}
	}
}
?>





