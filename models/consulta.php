<?php
    if (isset($_SESSION['usuario_id'])) {
      // Consulta para obter os dados do usuário
      $sql = "SELECT * FROM usuario WHERE id_usuario = " . $_SESSION['usuario_id'];
      $result = $conexao->query($sql);

      if ($result && $result->num_rows > 0) {
        $dados_usuario = $result->fetch_assoc();
        $usuario = new Usuario(
          $dados_usuario['id_usuario'],
          $dados_usuario['nome'],
          $dados_usuario['email'],
          $dados_usuario['senha'],
          $dados_usuario['pontos'],
          $dados_usuario['casa_id']
        );
      } else {
        // Trata o erro da consulta (opcional)
        echo "Erro na consulta: " . $conexao->error;
      }
    } else {
      // Redireciona para a página de login se o usuário não estiver logado
      header("Location: ../../login.php"); 
      exit();
    }

?>