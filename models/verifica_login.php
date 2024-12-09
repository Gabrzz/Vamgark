<?php
session_start(); // Inicia a sessão

// Verifica se a variável de sessão do usuário está definida
if (!isset($_SESSION['usuario_id'])) {
  // Se não estiver logado, exibe o alerta e redireciona para a página de login
  echo "<script>alert('Eii, calma aí. Nosso site é apenas para os cadastrados. Faça seu Login ou Cadastre-se já!');</script>";
  echo "<script>window.location.href = '../index.php';</script>"; 
  exit(); // Encerra a execução do script
}

// Se estiver logado, continua a execução da página atual
// ...
?>