<?php

Class coletor
{
	private $pdo;
	public $msgErro = "";//tudo ok

	public function conectar($nome, $host, $coletor, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome,$coletor,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}

	public function cadastrar($nome, $telefone, $cpf, $email, $data, $senha)
    
	{
		
		
		global $pdo;
        
		//verificar se já existe o email cadastrado
		$sql = $pdo->prepare("SELECT id_coletores FROM coletores WHERE email_coletor = :e");
		$sql->bindValue(":e",$email);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; //ja esta cadastrado
		}
      
		
		
		{
			//caso nao, Cadastrar
			$sql = $pdo->prepare("INSERT INTO coletores (nome_coletor, telefone_coletor, cpf_coletor, email_coletor, admissao_coletor, senha_coletor) VALUES (:n, :t,:c,:e, :a, :s)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":t",$telefone);
			$sql->bindValue(":c",$cpf);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":a",$data);
            $sql->bindValue(":s",md5($senha));
			$sql->execute();
			return true; //tudo ok
		}
	}

    
	public function logar($email, $senha)
	{
		global $pdo;
		//verificar se o email e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT id_coletores FROM coletores WHERE email_coletor = :e AND senha_coletor = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_coletores'] = $dado['id_coletores'];
			return true; //cadastrado com sucesso
		}
		else
		{
			return false;//nao foi possivel logar
		}
	}
}







?>