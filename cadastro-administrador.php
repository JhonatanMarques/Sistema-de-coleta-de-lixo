<?php
	require_once 'CLASSES/banco-administrador.php';
	$u = new administrador();
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Recicla NIT</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<nav id="menu">
	<ul>
        <li><h1>Recicla NIT</h1></li>
    </ul>
	<ul>
	<li><a href="index.php">Home</a></li>
		<li><a href="sobre-administrador.html">Sobre nós</a></li>
        <li><a href="index.php">Entrar</a></li>
        <li><a href="cadastro-coletor.php">Cadastrar coletor</a></li>
        <li><a href="lixo.php">Cadastrar lixo</a></li>
        <li><a href="cadastro-coleta.php">Cadastrar pontos de coleta</a></li>
		<li><a href="cadastro-administrador.php">Cadastrar administradores</a></li>
        

    </ul>
</nav>
</section>

<div id="corpo-form-cad">
	
	<h1>Cadastro de administradores</h1>
	<form method="POST">
		<label for="nome"> Nome Completo: </label>
		<input type="text" name="nome_administrador" maxlength="30">

		<label for="telefone"> Telefone: </label>
		<input type="text" name="telefone_administrador" maxlength="30">
		
		<label for="cpf"> CPF: </label>
		<input type="text" name="cpf_administrador"  maxlength="11">

        <label for="admissão"> Data de admissão: </label>
		<input type="date" name="admissao_administrador"  maxlength="11">
		
		<label for="email"> Email: </label>
		<input type="email" name="email_administrador" maxlength="40">
		
		<label for="password"> Senha: </label>
		<input type="password" name="senha_administrador" maxlength="15">

		<label for="password"> Confirmar Senha: </label>
		<input type="password" name="confSenha" maxlength="15">
		
		<input type="submit" value="Cadastrar">

	</form>
</div>
<section id="rodape">Todos os direitos reservados por <strong>Recicla NIT - Sistema de Reciclagem da Cidade de Niterói</strong></section> 
<?php
//verificar se clicou no botao
if(isset($_POST['nome_administrador']))
{
	$nome = addslashes($_POST['nome_administrador']);
	$telefone = addslashes($_POST['telefone_administrador']);
	$cpf = addslashes($_POST['cpf_administrador']);
    $data = addslashes($_POST['admissao_administrador']);
    $email = addslashes($_POST['email_administrador']);
	$senha = addslashes($_POST['senha_administrador']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty($nome) && !empty($telefone) && !empty($cpf) && !empty($data) && !empty($email) && !empty($senha) && !empty($confirmarSenha) )
	{
		$u->conectar("recicla_nit","localhost","root","");
		if($u->msgErro == "")//se esta tudo ok
		{
			if($senha == $confirmarSenha)
			{
				if($u->cadastrar($nome,$telefone,$cpf,$data,$email,$senha))
				{
					?>
					<div id="msg-sucesso">
					Cadastrado com sucesso! Acesse para entrar!
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
						Email ja cadastrado!
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="msg-erro">
					Senha e confirmar senha não correspondem
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro;?>
			</div>
			<?php
		}
	}else
	{
		?>
		<div class="msg-erro">
			Preencha todos os campos!
		</div>
		<?php
	}
}


?>
</body>
</html>


