<?php
  include '../models/conexao.php';
  session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include './includes/head.php'; ?>
  <title>Vamgark Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/menu.css">
  <link rel="icon" href="../img/vamgark-icon.png"> <!-- Icone da Página -->
</head>
<body class="menu">
  <div class="img">
    <a href="#"><img src="../img/Faq-icon.png" alt="Faq-icon.png"></a>
  </div>

  <div class="main-elements mt-5">
    <div class="my-5">
      <img class="logo" src="../img/logo-vamgark-whitefull.png" alt="VK-Academy Logo">
    </div>

    <div class="my-5">
      <?php if (isset($_SESSION['usuario_id'])) : ?>
        <?php 
          // Consulta para obter o nome do usuário 
          $sql = "SELECT nome FROM usuario WHERE id_usuario = " . $_SESSION['usuario_id'];
          $result = $conexao->query($sql);

          if ($result && $result->num_rows > 0) {
            $usuario = $result->fetch_assoc()['nome'];
          } else {
            // Trata o erro da consulta (opcional)
            echo "Erro na consulta: " . $conexao->error;
            $usuario = "Usuário"; // Define um nome padrão caso haja erro na consulta
          }
        ?>
        <a href="./Home/index.php"> 
          <button class="rounded-5 btn btn-light px-4">
            <span class="font f-32">Entrar como <?php echo $usuario; ?></span> 
          </button>
        </a>
        <a href="../models/logout.php" class="logout-link"> 
          <span>Não é <?php echo $usuario; ?>? Clique aqui para sair.</span> 
        </a>
      <?php else : ?>
        <a href="login.php"> 
          <button class="rounded-5 btn btn-light px-4">
            <span class="font f-32">Entrar</span>
          </button>
        </a>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>