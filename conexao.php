
<?php
Class agendamento
{
	private $pdo;
	public $msgErro = "";//tudo ok

	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}

	public function cadastrar($nome, $cpf,$bairro,$complemento, $endereco, $cep, $email, $telefone, $coleta,$lixo)
	{
		global $pdo;
		//verificar se já existe o email cadastrado
		$sql = $pdo->prepare("SELECT id_usuario FROM agendamento WHERE email = :e");
		$sql->bindValue(":e",$email);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; //ja esta cadastrado
		}
		
		else
		{
			//caso nao, Cadastrar
			$sql = $pdo->prepare("INSERT INTO agendamento (nome, telefone,cpf, tipo_pessoa, email, senha) VALUES (:n, :t,:c,:p, :e, :s)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":t",$telefone);
			$sql->bindValue(":c",$cpf);
			$sql->bindValue(":p",$tipo_pessoa);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha));
			$sql->execute();
			return true; //tudo ok
		}
		
	}}
?>
