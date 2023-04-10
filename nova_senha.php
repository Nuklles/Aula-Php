<?php

session_start();

include('conexao.php');
include('valida_usuario.php');

$matricula = $_SESSION['matricula'];

$senha = isset($_POST['nova_senha']) ? $_POST['nova_senha'] : '';

$update = "UPDATE login SET senha = '$senha' WHERE matricula= '$matricula'";
$query = mysqli_query($conexao, $update);

header('Location: principal.php');

?>