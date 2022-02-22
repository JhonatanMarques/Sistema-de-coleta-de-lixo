<?php 
require_once 'CLASSES/banco-administrador.php';
$u = new administrador();
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
        <li><a href="index-administrador.php">Entrar</a></li>

    </ul>
</nav>
</section>

<div id="corpo-form">
    <h1></h1>
	<h1>Entrar <br>(Administrador)</h1>
	<form method="POST">
		<label for="email"> Email: </label>
		<input type="email" name="email">
		
		<label for="password"> Senha: </label>
		<input type="password"  name="senha">
		
		<input type="submit" value="ACESSAR">
		
	</form>
</div>
 
<?php
if(isset($_POST['email']))
{
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	
	if(!empty($email) && !empty($senha))
	{
		$u->conectar("recicla_nit","localhost","root","");
		if($u->msgErro == "")
		{
			if($u->logar($email,$senha))
			{
				header("location: areaadmin.php");
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