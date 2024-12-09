<?php 
include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';

if (isset($_SESSION['usuario_id'])){
  $UsuarioController = new UsuarioController();
  $usuario = $UsuarioController->findId($_SESSION['usuario_id']);
} 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php' ?>
    <link rel="stylesheet" href="style.css">
    <title>Fórum</title> <!-- Nome da Página -->
</head>
<body>
    <?php 
    $pagina_atual = 4; 
    include '../includes/header.php' ?>
    
    <main>

    <?php 
    if(isset($_GET['redirecionado'])) {
    ?>

    <h1>FAZ O QUIZ PORRA</h1>
        
    <?php 
    }else {
    ?>

    <h1>Vamo ver sua casa né</h1>   

    <?php
    }
    ?>

    </main>

    <?php include '../includes/footer.php' ?>
</body>
</html>