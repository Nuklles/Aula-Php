<?php
$conexao=MYSQLI_connect('Localhost','root','','FPB');

   if (!$conexao){
      die('Não foi possivel conectar');
    }
   
$conexao2 = pg_connect("host=alunosfpb.postgresql.dbaas.com.br dbname=alunosfpb user=alunosfpb
                     password=Alunos@2023");
    if (!$conexao){
      die('Não foi possivel conectar');
                      }
?>