<?php

include('conexao.php');
include('valida_usuario.php');

$matricula = $_GET['matricula'];

$delete = "DELETE FROM login WHERE matricula = '$matricula'";
$query = mysqli_query($conexao, $delete);

header ('Location: consultar.php');

?>