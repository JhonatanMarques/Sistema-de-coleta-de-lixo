<?php 
require_once 'CLASSES/usuarios.php';
$u = new Usuario();
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/estilo.css">
	<title>Recicla NIT </title>
	<meta name="viewport" content="width=device-width">
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
        <li><a href="contato.php">Contato</a></li>
		<li><a href="index-coletor.php">Área do Coletor</a></li>
		<li><a href="index-administrador.php">Área do Administrador</a></li>
		
    </ul>
</nav>
</section>

<div id="corpo-form">
	<h1>Entrar<br>(Usuário)</h1>
	<form method="POST">
		<label for="email"> Email: </label>
		<input type="email" name="email_usuario">
		
		<label for="password"> Senha: </label>
		<input type="password"  name="senha_usuario">
		
		<input type="submit" value="ACESSAR">
		<a href="cadastro-usuarios.php">Ainda não é inscrito?<strong>Cadastre-se!</strong></a>
	</form>
</div>
 
<?php
if(isset($_POST['email_usuario']))
{
	$email = addslashes($_POST['email_usuario']);
	$senha = addslashes($_POST['senha_usuario']);
	
	if(!empty($email) && !empty($senha))
	{
		$u->conectar("recicla_nit","localhost","root","");
		if($u->msgErro == "")
		{
			if($u->logar($email,$senha))
			{
				header("location: agendamento.php");
			}
			else
			{
				?>
				<div class="msg-erro">
					Email e/ou senha estão incorretos!
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro; ?>
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
<section id="rodape">Todos os direitos reservados por <strong>Recicla NIT - Sistema de Reciclagem da Cidade de Niterói</strong></section>
</body>
</html>