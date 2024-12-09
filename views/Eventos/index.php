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
    <title>Eventos</title> <!-- Nome da Página -->
</head>
<body>
    <?php 
    $pagina_atual = 3; 
    include '../includes/header.php' ?>
    
    <main>

    <div class="titulo"><h1>A <a id="dourado">Vamgark</a> em parceria com Harry Potter, oferece incríveis parques temáticos ao redor do mundo, <a id="dourado">veja alguns abaixo!</a></h1></div>
    <div class="container pure-g">
        <div class="evento pure-u-1 pure-u-md-1-4  ">
            <img src="../../img/banner-hollywood.png" alt="" class="banner">
            <p class="subtitulo">
            Estúdios Universal Hollywood
            </p>
            <p class="nome">
            O Mundo Mágico do Harry Potter
            </p>
            <p class="local">
            Hollywood, EUA
            </p>
        </div>
        <div class="evento pure-u-1 pure-u-md-1-4  ">
            <img src="../../img/banner-hollywood.png" alt="" class="banner">
            <p class="subtitulo">
            Estúdios Universal Hollywood
            </p>
            <p class="nome">
            O Mundo Mágico do Harry Potter
            </p>
            <p class="local">
            Hollywood, EUA
            </p>
        </div>
        <div class="evento pure-u-1 pure-u-md-1-4  ">
            <img src="../../img/banner-hollywood.png" alt="" class="banner">
            <p class="subtitulo">
            Estúdios Universal Hollywood
            </p>
            <p class="nome">
            O Mundo Mágico do Harry Potter
            </p>
            <p class="local">
            Hollywood, EUA
            </p>
        </div>
        <div class="evento pure-u-1 pure-u-md-1-4  ">
            <img src="../../img/banner-hollywood.png" alt="" class="banner">
            <p class="subtitulo">
            Estúdios Universal Hollywood
            </p>
            <p class="nome">
            O Mundo Mágico do Harry Potter
            </p>
            <p class="local">
            Hollywood, EUA
            </p>
        </div>
        <div class="evento pure-u-1 pure-u-md-1-4  ">
            <img src="../../img/banner-hollywood.png" alt="" class="banner">
            <p class="subtitulo">
            Estúdios Universal Hollywood
            </p>
            <p class="nome">
            O Mundo Mágico do Harry Potter
            </p>
            <p class="local">
            Hollywood, EUA
            </p>
        </div>
        <div class="evento pure-u-1 pure-u-md-1-4  ">
            <img src="../../img/banner-hollywood.png" alt="" class="banner">
            <p class="subtitulo">
            Estúdios Universal Hollywood
            </p>
            <p class="nome">
            O Mundo Mágico do Harry Potter
            </p>
            <p class="local">
            Hollywood, EUA
            </p>
        </div>
    </div>
    </main>

    <?php include '../includes/footer.php' ?>
</body>
</html>