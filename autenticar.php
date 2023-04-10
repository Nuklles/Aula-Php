<?php

include('conexao.php');
include('valida_usuario.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "SELECT matricula, login, senha FROM login
			WHERE login = '$login' AND senha = '$senha'";
/*
POSTGRES
$query = pg_exec($conexao, $select);
$dado = pg_fetch_row($query);
*/
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_row($query);

if ($login == isset($dado[1]) && $senha == isset($dado[2])) {
	session_start();
	$_SESSION['matricula'] = $dado[0];
	header ("location: principal.php");
}
else {
	header ("location: index.php");
}

?>