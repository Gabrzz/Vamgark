<?php
file_put_contents('debug.log', "Arquivo processa_login.php acessado com sucesso.\n", FILE_APPEND);
require_once 'Conexao.php';
session_start();

// Ativar exibição de erros
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Registrar dados recebidos no log
file_put_contents('debug.log', "Recebido POST: " . print_r($_POST, true) . "\n", FILE_APPEND);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $senha = $_POST["senha"];

    file_put_contents('debug.log', "Processando email: $email\n", FILE_APPEND);

    $stmt = $conexao->prepare("SELECT * FROM usuario WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        file_put_contents('debug.log', "Usuário encontrado: " . print_r($usuario, true) . "\n", FILE_APPEND);

        if ($usuario['senha'] == $senha) {
            $_SESSION['usuario_id'] = $usuario['id_usuario'];
            echo 1;
            exit();
        } else {
            echo 2;
        }
    } else {
        $stmt = $conexao->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $senha);

        if ($stmt->execute()) {
            $_SESSION['usuario_id'] = $conexao->insert_id;
            echo 1;
            exit();
        } else {
            file_put_contents('debug.log', "Erro ao criar usuário: " . $stmt->error . "\n", FILE_APPEND);
            echo 3;
        }
    }

    $stmt->close();
}
?>
