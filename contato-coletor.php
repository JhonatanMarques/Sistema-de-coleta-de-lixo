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
        <li><a href="sobre-coletor.html">Sobre nós</a></li>
		<li><a href="separar-coletor.html">Como separar o lixo?</a></li>
        <li><a href="contato.php">Contato</a></li>
    </ul>
</nav>
</section>
<div id="corpo-form-cad">
	
	<h1>Entre em contato conosco</h1>
	<form method="POST">
		<label for="nome"> Nome Completo: </label>
		<input type="text" name="nome" maxlength="30">

		<label for="telefone"> Telefone: </label>
		<input type="text" name="telefone" maxlength="30">
		
		<label for="cpf"> Email: </label>
		<input type="text" name="email"  maxlength="11">

		<label for="tipo_pessoa"> Motivo do contato: </label>
		<select id="select-form" name="motivo">
		<option id="opcao" value="reclamacao">Reclamação</option>
 		<option id="opcao"value="duvida" selected>Dúvidas</option>
		<option id="opcao"value="Elogios" selected>Elogios</option>
	
		</select>
		
		<label for="Mensagem"> Mensagem: </label><BR><textarea id="texto"></textarea>
		
		

		
		<input type="submit" value="Enviar">

	</form>

</div>
 <section id="rodape">Todos os direitos reservados por <strong>Recicla NIT - Sistema de Reciclagem da Cidade de Niterói</strong></section>