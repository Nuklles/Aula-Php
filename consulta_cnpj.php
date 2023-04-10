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
		<h1>Pesquisar CNPJ</h1>
		<form id="pesquisar_cnpj" action="autenticar_cnpj.php" method="POST">
			CNPJ: <input type="text" name="pesquisar_cnpj">
			<input type="submit" name="pesquisar" value="Pesquisar">
		</form><br>
		<a href="principal.php">Voltar</a>
	</center>
<body>
    <br><br>    
    <form id="pesquisar" action="cnpj.php" method="POST">
	<meta charset="UTF-8">
	<title>Consultar CNPJ</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		h1 {
			text-align: center;
			margin-top: 30px;
		}
		form {
			width: 50%;
			margin: 0 auto;
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		input[type="text"] {
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 100%;
			max-width: 500px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #007bff;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		input[type="submit"]:hover {
			background-color: #0062cc;
		}
	</style>
 </head>
	<h1>Consultar CNPJ</h1>
	<form id="pesquisar" action="cnpj.php" method="POST">
		<label for="cnpj">CNPJ:</label>
		<input type="text" id="cnpj" name="cnpj" placeholder="Digite o CNPJ">
		<input type="submit" name="pesquisar" value="Pesquisar">
	</form>
    </body>
</html>
