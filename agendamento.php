<?php
	require_once 'CLASSES/banco-agendamento.php';
	$u = new agendamento();
?>
<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
        
		header("location: index.php");
		exit;
    
	}
    
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
        <li><a href="agendamento.php">Agendamento</a></li>
		<li><a href="separar-usuarios.html">Como separar o lixo?</a></li>
        <li><a href="sair.php"> Sair </a></li>
    </ul>
</nav>
</section>



        <div id="corpo-form">
            <form method="POST">
            <h1> Olá Usuário </h1>
            <h2> Agendamento </h2>
            
                <label>Nome:</label>
                <input type="text" name="nome_agendamento" placeholder="Digite o nome completo"> 

                <label>CPF:</label>
                <input type="text" name="cpf_agendamento" placeholder="Digite seu CPF">

                <!------------ BAIRRO --------------------->
                    <label>Bairro:</label>
                    <select id="select-form" name="bairro_agendamento">
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
                <input type="text" name="endereco_agendamento" placeholder="Digite seu endereço">

                <label>Complemento:</label>
                <input type="text" name="complemento_agendamento" placeholder="Digite um complemento">

                <label>CEP:</label>
                <input type="text" name="cep_agendamento" placeholder="Digite seu CEP">

                <label>E-mail:</label>
                <input type="email" name="email_agendamento" placeholder="Digite o seu melhor email">

                <label>Telefone:</label>
                <input type="tel" name="telefone_agendamento" placeholder="Digite seu número">

                <label>Data de coleta:</label>
                <input type="date" name="data_agendamento" placeholder="informe a data de coleta">
                
                <label>Ponto de entrega:</label>
                <select id="select-form" name="ponto_agendamento">
                        <option id="opcao" select disable value="">Selecione</option>
                        <option id="opcao" value="CLIN Ecoponto - Coleta e reciclagem">CLIN Ecoponto - Coleta e reciclagem</option>
                        <option id="opcao" value="Ecoenel">Ecoenel</option>
                        <option id="opcao" value="Cantina do Horto">Cantina do Horto</option>
                        <option id="opcao" value="Policlinica Comunitária da Engenhoca">Policlinica Comunitária da Engenhoca</option>
                        <option id="opcao" value="ETE Itaipu">ETE Itaipu</option>
                        <option id="opcao" value="Centro Social Urbano da Ilha da Conceição">Centro Social Urbano da Ilha da Conceição</option>
                </select>


                <!------------ LIXO --------------------->
                <label >Selecione o(s) tipo(s) de lixo</label><br><br>
                    
                <span id="lixo">    
                <input type="checkbox" name="lixo_agendamento[]" value="Plástico"> 
                <label>Plástico</label>
                    
                    
                <label>   
                <input type="checkbox" name="lixo_agendamento[]" value="Papel">
                Papel</label> 
                    
                    
                <input type="checkbox"  name="lixo_agendamento[]" value="Metal">
                <label>Metal</label> 
                    
                    
                <input type="checkbox"  name="lixo_agendamento[]" value="Vidro">
                <label>Vidro</label>


                
                    
                </span>  
                <input type="submit" value="Agendar">
                
                
                </div>

                
                <section id="rodape">Todos os direitos reservados por <strong>Recicla NIT - Sistema de Reciclagem da Cidade de Niterói</strong></section>
                <?php
//verificar se clicou no botao
if(isset($_POST['nome_agendamento']))
{
	$nome = addslashes($_POST['nome_agendamento']);
	$cpf = addslashes($_POST['cpf_agendamento']);
    $bairro = addslashes($_POST['bairro_agendamento']);
    $complemento = addslashes($_POST['complemento_agendamento']);
    $endereco = addslashes($_POST['endereco_agendamento']);
    $cep = addslashes($_POST['cep_agendamento']);
    $email = addslashes($_POST['email_agendamento']);
    $telefone = addslashes($_POST['telefone_agendamento']);
	$data = addslashes($_POST['data_agendamento']);
    $ponto = addslashes($_POST['ponto_agendamento']);
	$lixo = $_POST ["lixo_agendamento"];
    $lixo_implode = implode(",",$lixo);

	
    
    //verificar se esta preenchido
    if(!empty($nome) && !empty($cpf )  && !empty($bairro) && !empty($complemento) && !empty( $endereco) && !empty($cep) && !empty($email) && !empty($telefone) && !empty($data) && !empty($ponto) && !empty($lixo))
	{
		$u->conectar("recicla_nit","localhost","root","");
		if($u->msgErro == "")//se esta tudo ok
		{
	
				if($u->cadastrar($nome,$cpf,$bairro,$complemento,$endereco,$cep,$email,$telefone,$data,$ponto,$lixo_implode))
				{
					?>
					<div id="msg-sucesso">
					O agendamento foi concluído com sucesso,<br>
                    Em breve o administrador vai entrar em contato com você! 
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
						Falha no agendamento !!
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