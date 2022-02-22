<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
        <title> Recicla NIT - Administrador </title>
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
    
        

    </ul>
</nav>
</section>
<h1 class="centralizar"> Olá Administrador</h1>
<?php
include("CLASSES/teste.php");

$consulta = "SELECT * FROM usuarios";
$con = $mysqli->query($consulta) or die($mysqli->error);


?>

<div id="tabela">
 <h2 class="centralizar">Usuários Cadastrados</h2>
    <table>
  </tr>
        <tr>
            <th>CÓDIGO</th>
            <th>NOME</th>
            <th>TELEFONE</th>
           <!-- <th>CPF</th>-->
            <th>EMAIL</th>
        </tr>
    <?php while ($dado = $con->fetch_array()) {  ?>
        <tr>
            <td><?php echo $dado["id_usuario"]; ?></td>
            <td><?php echo $dado["nome_usuario"]; ?></td>
            <td><?php echo $dado["telefone_usuario"]; ?></td>
            <!--<td><?php// echo $dado["cpf_usuario"]; ?></td>-->
            <td><?php echo $dado["email_usuario"]; ?></td>
        </tr>
    
    <?php }?>
    </table>
    </div>
    

    
<div id="tabela">
<?php
    include("CLASSES/teste.php");

    $consulta = "SELECT * FROM agendamentos";
    $con = $mysqli->query($consulta) or die($mysqli->error);


?>

    <h2 class="centralizar">Pedidos de Coleta</h2>
    <table>
  </tr>
  <tr>
            <th>CÓDIGO</th>
            <th>NOME</th>
           <!-- <th>CPF</th>-->
            <th>BAIRRO</th>
            <th>ENDEREÇO</th>
            <th>COMPLEMENTO</th>
            <th>CEP</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>DIA SOLICITADO</th>
            <th>PONTO DE ENTREGA</th>
            <th>LIXO</th>
        </tr>
    <?php while ($dado = $con->fetch_array()) {  ?>
        <tr>
            <td><?php echo $dado["id_agendamento"]; ?></td>
            <td><?php echo $dado["nome_agendamento"]; ?></td>
            <!--<td><?php// echo $dado["cpf_agendamento"]; ?></td>-->
            <td><?php echo $dado["bairro_agendamento"]; ?></td>
            <td><?php echo $dado["endereco_agendamento"]; ?></td>
            <td><?php echo $dado["complemento_agendamento"]; ?></td>
            <td><?php echo $dado["cep_agendamento"]; ?></td>
            <td><?php echo $dado["email_agendamento"]; ?></td>
            <td><?php echo $dado["telefone_agendamento"]; ?></td>
            <td><?php echo $dado["data_agendamento"]; ?></td>
            <td><?php echo $dado["ponto_agendamento"]; ?></td>
            <td><?php echo $dado["lixo_agendamento"]; ?></td>

        </tr>
    
    <?php }?>
    </table>
    </div>

    <?php
include("CLASSES/teste.php");

$consulta = "SELECT * FROM coletores";
$con = $mysqli->query($consulta) or die($mysqli->error);


?>

<div id="tabela">
 <h2 class="centralizar">Coletores Cadastrados</h2>
    <table>
  </tr>
        <tr>
            <th>CÓDIGO</th>
            <th>NOME</th>
            <th>TELEFONE</th>
            <!--<th>CPF</th>-->
            <th>EMAIL</th>
        </tr>
    <?php while ($dado = $con->fetch_array()) {  ?>
        <tr>
            <td><?php echo $dado["id_coletores"]; ?></td>
            <td><?php echo $dado["nome_coletor"]; ?></td>
            <td><?php echo $dado["telefone_coletor"]; ?></td>
           <!--<td><?php// echo $dado["cpf_coletor"]; ?></td>-->
            <td><?php echo $dado["email_coletor"]; ?></td>
        </tr>
    
    <?php }?>
    </table>
    </div>
    <section id="rodape">Todos os direitos reservados por <strong>Recicla NIT - Sistema de Reciclagem da Cidade de Niterói</strong></section>
</body>
</html>
    

</body>
</html>
