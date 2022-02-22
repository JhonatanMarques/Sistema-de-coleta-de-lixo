<?php
	require_once 'CLASSES/banco-pontocoleta.php';
	$u = new coleta();
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
    <li><a href="sobre-administrador.html">Sobre nós</a></li>
        <li><a href="index.php">Entrar</a></li>
        <li><a href="cadastro-coletor.php">Cadastrar coletor</a></li>
        <li><a href="lixo.php">Cadastrar lixo</a></li>
        <li><a href="cadastro-coleta.php">Cadastrar pontos de coleta</a></li>
		<li><a href="cadastro-administrador.php">Cadastrar administradores</a></li>
    
    </ul>
</nav>
</section>



        <div id="corpo-form">
            <form method="POST">
            <h1> Cadastro de <br>Pontos de coleta </h1>
            
                <label>Nome do Local:</label>
                <input type="text" name="nome_pontodecoleta">
               
                <label>Bairro:</label>
                    <select id="select-form" name="bairro_pontodecoleta">
                        <option id="opcao" select disable value="">Selecione</option>
                        <option id="opcao" value="Bairro de Fátima">Bairro de Fátima</option>
                        <option id="opcao" value= "Baldeador">Baldeador</option>
                        <option id="opcao" value="Barreto">Barreto</option>
                        <option id="opcao" value="Badu">Badu</option>
                        <option id="opcao" value="Cachoeiras">Cachoeiras</option>
                        <option id="opcao" value="Centro">Centro</option>
                        <option id="opcao" value="Charitas">Charitas</option>
                        <option id="opcao" value="Caramujo">Caramujo</option>
                        <option id="opcao" value= "Cubango">Cubango</option>
                        <option id="opcao" value= "Cafubá">Cafubá</option>
                        <option id="opcao" value= "Camboinhas">Camboinhas</option>
                        <option id="opcao" value= "Cantagalo">Cantagalo</option>
                        <option id="opcao" value= "Engenhoca">Engenhoca</option>
                        <option id="opcao" value= "Engenho do Mato">Engenho do Mato</option>
                        <option id="opcao" value= "Fonseca">Fonseca</option>
                        <option id="opcao" value= "Gragoatá">Gragoatá</option>
                        <option id="opcao" value= "Icaraí">Icaraí </option>
                        <option id="opcao" value= "Ingá">Ingá</option>
                        <option id="opcao" value= "Itaipu">Itaipu</option>
                        <option id="opcao" value= "Ilha da Conceição">Ilha da Conceição</option>
                        <option id="opcao" value= "Ititioca">Ititioca</option>
                        <option id="opcao" value= "Itacoatiara">Itacoatiara</option>
                        <option id="opcao" value= "Jurujuba">Jurujuba</option>
                        <option id="opcao" value= "Jacaré">Jacaré</option>
                        <option id="opcao" value= "Jardim Imbuí">Jardim Imbuí</option>
                        <option id="opcao" value= "Largo da Batalha">Largo da Batalha</option>
                        <option id="opcao" value= "Morro do Estado">Morro do Estado</option>
                        <option id="opcao" value= "Maravista">Maravista</option>
                        <option id="opcao" value= "Maceió">Maceió</option>
                        <option id="opcao" value= "Maria Paula">Maria Paula</option>
                        <option id="opcao" value= "Matapaca">Matapaca</option>
                        <option id="opcao" value= "Muriqui">Muriqui</option>
                        <option id="opcao" value= "Pé Pequeno">Pé Pequeno</option>
                        <option id="opcao" value= "Ponta d'Areia">Ponta d'Areia</option>
                        <option id="opcao" value= "Piratininga">Piratininga</option>
                        <option id="opcao" value= "Rio do Ouro">Rio do Ouro</option>
                        <option id="opcao" value= "Santa Rosa">Santa Rosa</option>
                        <option id="opcao" value= "São Domingos">São Domingos</option>
                        <option id="opcao" value= "São Francisco">São Francisco</option>
                        <option id="opcao" value= "Santa Bárbara">Santa Bárbara</option>
                        <option id="opcao" value= "Santana">Santana</option>
                        <option id="opcao" value= "São Lourenço">São Lourenço</option>
                        <option id="opcao" value= "Serra Grande">Serra Grande</option>
                        <option id="opcao" value= "Sapê">Sapê</option>
                        <option id="opcao" value= "anto Antônio">Santo Antônio</option>
                        <option id="opcao" value= "Tenente Jardim">Tenente Jardim</option>
                        <option id="opcao" value= "Viradouro">Viradouro</option>
                        <option id="opcao" value= "Vital Brazil">Vital Brazil</option>
                        <option id="opcao" value= "Viçoso Jardim">Viçoso Jardim</option>
                        <option id="opcao" value= "Vila Progresso">Vila Progresso</option>
                    </select>
                <label>Endereço:</label>
                <input type="text" name="endereco_pontodecoleta"> 
                <label>Complemento:</label>
                <input type="text" name="complemento_pontodecoleta"> 

                <input type="submit" value="Cadastrar">
                
                </div>

                
                <section id="rodape">Todos os direitos reservados por <strong>Recicla NIT - Sistema de Reciclagem da Cidade de Niterói</strong></section>
                <?php
//verificar se clicou no botao
if(isset($_POST['nome_pontodecoleta']))
{
    $nome = addslashes($_POST['nome_pontodecoleta']);
	$bairro = addslashes($_POST['bairro_pontodecoleta']);
	$endereco = addslashes($_POST['endereco_pontodecoleta']);
    $complemento = addslashes($_POST['complemento_pontodecoleta']);
 
    //verificar se esta preenchido
	if(!empty($nome) && !empty($bairro) && !empty($endereco) && !empty($complemento) )
	{
		$u->conectar("recicla_nit","localhost","root","");
		if($u->msgErro == "")//se esta tudo ok
		{
	
				if($u->cadastrar($nome, $bairro, $endereco, $complemento))
				{
					?>
					<div id="msg-sucesso">
					O Ponto de coleta foi cadastrado no banco de dados com sucesso!
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
						Falha no cadastro do Ponto de coleta !!
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