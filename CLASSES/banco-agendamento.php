<?php

Class agendamento
{
	private $pdo;
	public $msgErro = "";//tudo ok

	public function conectar($nome, $host, $agendamento, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome,$agendamento,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}

	public function cadastrar($nome, $cpf,$bairro,$complemento, $endereco, $cep, $email, $telefone, $data,$ponto,$lixo_implode )
    
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
			$sql = $pdo->prepare("INSERT INTO agendamentos (nome_agendamento, cpf_agendamento,bairro_agendamento, complemento_agendamento, endereco_agendamento, cep_agendamento, email_agendamento, telefone_agendamento, data_agendamento,ponto_agendamento, lixo_agendamento ) VALUES (:n, :c,:b,:cm, :e, :cp, :em, :t, :cl,:p, :l)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":c",$cpf);
			$sql->bindValue(":b",$bairro);
			$sql->bindValue(":cm",$complemento);
			$sql->bindValue(":e",$endereco);
            $sql->bindValue(":cp",$cep);
            $sql->bindValue(":em",$email);
            $sql->bindValue(":t",$telefone);
            $sql->bindValue(":cl",$data);
			$sql->bindValue(":p",$ponto);
            $sql->bindValue(":l",$lixo_implode);
			
			$sql->execute();
			return true; //tudo ok
		}
	}

    
	public function logar($email, $senha)
	{
		global $pdo;
		//verificar se o email e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT id_usuario FROM agendamentos WHERE email = :e AND senha = :s");
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
	}
}

?>