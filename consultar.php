<?php 

session_start();

include('conexao.php');
include('valida_usuario.php');

$matricula = $_SESSION['matricula'];

$select =  "SELECT nome, cadastro.matricula FROM cadastro
			INNER JOIN login ON cadastro.matricula = login.matricula";
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_all($query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<h1>Consulta de Usuários</h1>
		<h3>Nome</h3>
			<?php

			for ($linha=0; $linha<count($dado); $linha++) { ?>
					<a href="usuario.php?matricula=<?php echo $dado[$linha][1]; ?>">
						<?php echo $dado[$linha][0]; ?>
					</a> 
				<?php
				echo "<br>";
			}

			?><br>
			<a href="principal.php">Voltar</a>
	</center>
</body>
</html>