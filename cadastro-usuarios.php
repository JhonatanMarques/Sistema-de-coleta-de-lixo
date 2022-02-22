<?php
	require_once 'CLASSES/usuarios.php';
	$u = new Usuario();
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
		<li><a href="sobre-usuario.html">Sobre nós</a></li>
		<li><a href="separar-usuarios.html">Como separar o lixo?</a></li>
        <li><a href="index.php">Entrar</a></li>
        
        

    </ul>
</nav>
</section>

<div id="corpo-form-cad">
	
	<h1>Cadastrar<br>Usuário</h1>
	<form method="POST">
		<label for="nome"> Nome Completo: </label>
		<input type="text" name="nome_usuario" maxlength="30">

		<label for="telefone"> Telefone: </label>
		<input type="text" name="telefone_usuario" maxlength="30">
		
		<label for="cpf"> CPF: </label>
		<input type="text" name="cpf_usuario"  maxlength="11">
		
		<label for="email"> Email: </label>
		<input type="email" name="email_usuario" maxlength="40">
		
		<label for="password"> Senha: </label>
		<input type="password" name="senha_usuario" maxlength="15">

		<label for="password"> Confirmar Senha: </label>
		<input type="password" name="confSenha" maxlength="15">
		
		<input type="submit" value="Cadastrar">

	</form>
</div>
<section id="rodape">Todos os direitos reservados por <strong>Recicla NIT - Sistema de Reciclagem da Cidade de Niterói</strong></section> 
<?php
//verificar se clicou no botao
if(isset($_POST['nome_usuario']))
{
	$nome = addslashes($_POST['nome_usuario']);
	$telefone = addslashes($_POST['telefone_usuario']);
	$cpf = addslashes($_POST['cpf_usuario']);
    $email = addslashes($_POST['email_usuario']);
	$senha = addslashes($_POST['senha_usuario']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty($nome) && !empty($telefone) && !empty($cpf) && !empty($email) && !empty($senha) && !empty($confirmarSenha) )
	{
		$u->conectar("recicla_nit","localhost","root","");
		if($u->msgErro == "")//se esta tudo ok
		{
			if($senha == $confirmarSenha)
			{
				if($u->cadastrar($nome,$telefone,$cpf,$email,$senha))
				{
					?>
					<div id="msg-sucesso">
					<p>Cadastrado com sucesso!</p>
					<p>Clique aqui para<a href="index.php">Entrar</a></p>
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