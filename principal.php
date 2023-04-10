<?php 

session_start();

include('conexao.php');
include('valida_usuario.php');

$matricula = $_SESSION['matricula'];

$select =  "SELECT nome FROM cadastro 
			WHERE matricula = '$matricula'";
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_row($query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Principal</title>
</head>
<body>
	<center>
	<h1>Bem vindo, <?php echo $dado[0]; ?>!!</h1>
	<nav>
		<a href="consultar.php">Consultar Usuário</a><br>
		<a href="cadastrar.php">Cadastrar Usuário</a><br>
		<a href="alterar_senha.php">Alterar Senha</a><br>
		<a href="pesquisar_cnpj.php">Pesquisar CNPJ</a><br>
		<a href="gerar_json.php">Gerar arquivo Json do Cadastro</a><br>
		<a href="cadastro.json" target="_blank">Exibir Arquivo Json Gerado</a><br>
		<a href="enviar_cadastro" target="_blank">Enviar Cadastro</a><br>
		<a href="sair.php">Sair</a>
	</nav>
	</center>
</body>
</html>
