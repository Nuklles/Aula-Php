<?php
session_start();
include('validar_usuario.php');
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $matricula = $_POST["matricula"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    
    $conexao = mysqli_connect("localhost", "root", "", "FPB");

    
    if (mysqli_connect_errno()) {
        die("Falha ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    
    $query = "SELECT * FROM cadastro WHERE matricula = '$matricula'";
    $resultado = mysqli_query($conexao, $query);

    
    if (mysqli_num_rows($resultado) == 1) {
        
        $query = "SELECT * FROM login WHERE matricula = '$matricula'";
        $resultado = mysqli_query($conexao, $query);

        
        if (mysqli_num_rows($resultado) == 0) {
            
            if(!empty($senha)){
                $query = "INSERT INTO login (matricula, login, senha) VALUES ('$matricula', '$login', '$senha')";
                $resultado = mysqli_query($conexao, $query);

                if ($resultado) {
                    echo "Usuário cadastrado com sucesso!";
                } else {
                    echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
                }
            }else{
                echo "O campo senha é obrigatório!";
            }
        } else {
            echo "Já existe um usuário cadastrado com esta matrícula!";
        }
    } else {
        echo "Matrícula não encontrada!";
    }

    
    mysqli_close($conexao);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Novo Usuário</title>
    
</head>
<body>
    <h1>Cadastrar Novo Usuário</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Matrícula: <input type="text" name="matricula"><br>
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Cadastrar">
    </form>
    <br><br>
    <a href="principal.php">Voltar para o Menu Principal</a>
</body>
</html>
