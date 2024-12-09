<?php 
include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';

if (isset($_SESSION['usuario_id'])){
  $UsuarioController = new UsuarioController();
  $usuario = $UsuarioController->findId($_SESSION['usuario_id']);
} 

if ($usuario->getCasaId() == null) {
    header("Location: ../Quiz/?redirecionado=true");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php' ?>
    <link rel="stylesheet" href="style.css">
    <title>Sua Casa</title> <!-- Nome da Página -->
</head>
<body>
    <?php 
    $pagina_atual = 6; 
    include '../includes/header.php' ?>
    
    <main>



    </main>

    <?php include '../includes/footer.php' ?>
</body>
</html>