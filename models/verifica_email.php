<?php
include 'conexao.php';

// Ativar exibição de erros
error_reporting(E_ALL);
ini_set('display_errors', 1);

file_put_contents('debug.log', "Recebido POST para verificação: " . print_r($_POST, true) . "\n", FILE_APPEND);

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $stmt = $conexao->prepare("SELECT * FROM usuario WHERE email = ?");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        file_put_contents('debug.log', "Resultado da verificação: " . $result->num_rows . " rows\n", FILE_APPEND);

        if ($result->num_rows > 0) {
            echo 1;
            file_put_contents('debug.log', "Resultado da verificação: TRUE rows\n", FILE_APPEND);
        } else {
            echo 0;
            file_put_contents('debug.log', "Resultado da verificação: FALSE rows\n", FILE_APPEND);
        }
    } else {
        file_put_contents('debug.log', "Erro ao executar consulta: " . $stmt->error . "\n", FILE_APPEND);
        echo "Erro na consulta.";
    }

    $stmt->close();
}
?>
