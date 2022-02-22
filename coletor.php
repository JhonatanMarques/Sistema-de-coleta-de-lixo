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
        <li><a href="sobre-coletor.html">Sobre nós</a></li>
		<li><a href="separar-coletor.html">Como separar o lixo?</a></li>
        <li><a href="contato.php">Contato</a></li>

        

    </ul>
</nav>
<h1 class="centralizar"> Olá Coletor</h1>
</section>
<?php
    include("CLASSES/teste.php");

    $consulta = "SELECT * FROM agendamentos";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<div id="tabela">
<h2 class="centralizar">Pedidos de Coleta </h2>
<?php
    include("CLASSES/teste.php");

    $consulta = "SELECT * FROM agendamentos";
    $con = $mysqli->query($consulta) or die($mysqli->error);


?>
    <table>
  </tr>
  <tr>
            <th>CÓDIGO</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>BAIRRO</th>
            <th>ENDEREÇO</th>
            <th>COMPLEMENTO</th>
            <th>CEP</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>DIA SOLICITADO</th>
            <th>lixo</th>
        </tr>
    <?php while ($dado = $con->fetch_array()) {  ?>
        <tr>
            <td><?php echo $dado["id_agendamento"]; ?></td>
            <td><?php echo $dado["nome_agendamento"]; ?></td>
            <td><?php echo $dado["cpf_agendamento"]; ?></td>
            <td><?php echo $dado["bairro_agendamento"]; ?></td>
            <td><?php echo $dado["endereco_agendamento"]; ?></td>
            <td><?php echo $dado["complemento_agendamento"]; ?></td>
            <td><?php echo $dado["cep_agendamento"]; ?></td>
            <td><?php echo $dado["email_agendamento"]; ?></td>
            <td><?php echo $dado["telefone_agendamento"]; ?></td>
            <td><?php echo $dado["data_agendamento"]; ?></td>
            <td><?php echo $dado["lixo_agendamento"]; ?></td>

        </tr>
    
    <?php }?>
    </table>
    </div>

    <?php
    ?>
    </table>
    </div>
    <section id="rodape-coletor">Todos os direitos reservados por <strong>Recicla NIT - Sistema de Reciclagem da Cidade de Niterói</strong></section>
    

</body>
</html>