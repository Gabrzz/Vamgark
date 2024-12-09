<?php
include 'conexao.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['usuario_id'])) {
    $casa = $_POST["casa"];
    $usuario_id = $_SESSION['usuario_id'];

    // Prepara a consulta SQL com prepared statement
    $stmt = $conexao->prepare("INSERT INTO voto (casa, usuario_id) VALUES (?, ?)");
    $stmt->bind_param("si", $casa, $usuario_id);

    if ($stmt->execute()) {
        echo "Voto registrado com sucesso!";
    } else {
        echo "Erro ao registrar voto: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Erro: Usuário não logado ou requisição inválida.";
}

$conexao->close();
?>