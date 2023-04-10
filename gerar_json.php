<?php

include('conexao.php');

$select = "SELECT matricula, nome, cpf, descricao FROM cadastro
			INNER JOIN funcao ON funcao = id_funcao";
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_all($query);
file_put_contents("cadastro.json", json_encode($dado));

var_dump($dado);

echo $dado[0][1];