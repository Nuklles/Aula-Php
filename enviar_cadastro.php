<?php
session_start();
include('validar_usuario.php');
include('conexao.php');

$select = "SELECT nome, cadastro.matricula, cpf, funcao FROM cadastro
            INNER JOIN login ON cadastro.matricula = login.matricula";
           
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_all($query);

for ($linha=0; $linha<count($dado); $linha++) {
    $nome = $dado[$linha][0];
    $matricula = $dado[$linha][1];
    $cpf = $dado[$linha][2];
    $funcao = $dado[$linha][3];
       
    
    $insert = "INSERT INTO cadastro (nome, matricula, cpf, funcao, unidade)
                VALUES ('$nome', '$matricula', '$cpf', $funcao, 113)";
    $queryinsert = pg_exec($conexao2, $insert);
  
}

header('location: cadastro_enviado.php')

?>
