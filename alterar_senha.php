<?php

session_start();

include('valida_usuario.php');

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
	<form id="alterar_senha" action="nova_senha.php" method="POST">
		Nova Senha: <input type="password" name="nova_senha">
		<input type="submit" name="enviar" value="Trocar Senha">
	</form>
</center>
</body>
</html>