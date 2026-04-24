<?php

$host = "localhost";
$user = "root";
$pass = "Rolan@2009";
$db = "sistema_login";

// Conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Receber dados
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta
$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);

// Verificar
if ($result->num_rows > 0) {
    echo "Login realizado com sucesso!";
} else {
    echo "Email ou senha incorretos!";
}

$conn->close();
?>
