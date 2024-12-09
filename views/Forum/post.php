<?php

include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';

if (isset($_SESSION['usuario_id'])) {
    $UsuarioController = new UsuarioController();
    $usuario = $UsuarioController->findId($_SESSION['usuario_id']);
}



?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regras</title>
    <link rel="stylesheet" href="style.css">
    <?php include '../includes/head.php'; ?>
    <?php include '../includes/bs-h.php'; ?>
</head>

<body>
    <?php include '../includes/header.php' ?>


    <main>
        
        

    </main>


    <?php include '../includes/bs-f.php' ?>
    <?php include '../includes/footer.php' ?>
</body>

</html>