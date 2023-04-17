<?php
session_start();
include ('conexao.php');
include('validar_usuario.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "SELECT matricula, login, senha FROM login 
            WHERE login = '$login' AND senha = '$senha'";


$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_row($query);

if ($login == isset($dado[1]) && $senha == isset($dado[2])) {
    session_start();
    $_SESSION['matricula'] = $dado[0];
        header ("location: principal.php");
}

else    {
    
    echo "Usuario ou senha inválidos";
   

}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <br><br>
    <a href="index.php">Voltar para o Menu Principal</a>
</body>
</html>
