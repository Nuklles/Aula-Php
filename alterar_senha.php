<?php
session_start();
include('validar_usuario.php');
include('conexao.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Alterar sua senha</title>	
</head>
<body>
	<h2>Alterar sua senha</h2>
	<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "FPB";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
		}
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$login = $_POST["login"];
			$senha_atual = $_POST["senha_atual"];
			$nova_senha = $_POST["nova_senha"];
			
			
			$sql = "SELECT * FROM login WHERE login='$login' AND senha='$senha_atual'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				
				$sql = "UPDATE login SET senha='$nova_senha' WHERE login='$login'";
				if ($conn->query($sql) === TRUE) {
					echo "Senha alterada com sucesso!";
				} else {
					echo "Erro ao alterar senha: " . $conn->error;
				}
			} else {
				echo "Login e/ou senha atual incorretos!";
                
			}
			
		
		}
	?>
	<form method="post">
		<label>Login:</label>
		<input type="text" name="login" required>
		<br>
		<label>Senha atual:</label>
		<input type="password" name="senha_atual" required>
		<br>
		<label>Nova senha:</label>
		<input type="password" name="nova_senha" required>
		<br>
		<input type="submit" value="Alterar senha">
	</form>
	<br>
	<a href="principal.php">Voltar para o menu principal</a>
</body>
</html>
