<?php
	require_once 'CLASSES/banco-lixo.php';
	$u = new lixo();
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
    </ul>
</nav>
</section>



        <div id="corpo-form">
            <form method="POST">
            <h1> Cadastro de Lixo </h1>
            
                <label>Nome do lixo:</label>
                <input type="text" name="nome_lixo"> 

                <input type="submit" value="Cadastrar">
                
                </div>

                
                <section id="rodape">Todos os direitos reservados por <strong>Recicla NIT - Sistema de Reciclagem da Cidade de Niterói</strong></section>
                <?php
//verificar se clicou no botao
if(isset($_POST['nome_lixo']))
{
	$nome = addslashes($_POST['nome_lixo']);

	
    
    //verificar se esta preenchido
	if(!empty($nome))
	{
		$u->conectar("recicla_nit","localhost","root","");
		if($u->msgErro == "")//se esta tudo ok
		{
	
				if($u->cadastrar($nome))
				{
					?>
					<div id="msg-sucesso">
					O lixo foi cadastrado no banco de dados com sucesso!
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
						Falha no cadastro do lixo !!
                        verifique se existe algum campo não preenchido.
					</div>
					<?php
				}
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: verifique se existe algum campo não preenchido.".$u->msgErro;?>
			</div>
			<?php
		}
	
}


?>
    
            </form>
        </div>
    </body>

</html>