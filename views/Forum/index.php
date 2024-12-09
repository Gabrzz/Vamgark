<?php 
include '../../controller/ForumController.php';
include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';

if (isset($_SESSION['usuario_id'])){
  $UsuarioController = new UsuarioController();
  $usuario = $UsuarioController->findId($_SESSION['usuario_id']);
}
 
$ForumController = new ForumController();
$resultData = $ForumController->read();

$UsuarioController = new UsuarioController();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php' ?>
    <?php include '../includes/bs-h.php' ?>
    <link rel="stylesheet" href="style.css">
    <title>Fórum</title> <!-- Nome da Página -->
</head>
<body>
    <?php 
    $pagina_atual = 4; 
    include '../includes/header.php' ?>
    
    <?php include './buttons.php'?>

    <main>
    
    <?php include './posts.php'?>


  <!--
      <div class="mx-5 px-3">
        //TITTLE
        <div class="tittle py-2 px-5"><span class="font f-30"><strong>Mensagens da academia Vamgark</strong></span></div>

        //POST

        <a href="./posts.php" class="text-decoration-none">
          <div class="post f-w font d-flex align-items-center justify-content-between px-4">
            <div>Nome do Subtópico</div>
            <div class="d-flex col-4 justify-content-around align-items-center">
              <div class="d-flex flex-column align-items-center justify-content-between">
                <div><span class="f-20"><strong>192</strong></span></div>
                <div class="sb-post"><span class="f-12">posts</span></div>
              </div>
              <div class="">
                PERFIL+POST+DATA
              </div>
            </div>
          </div>
        </a>

        <a href="" class="text-decoration-none">
          <div class="post f-w font d-flex align-items-center justify-content-between px-4">
            <div>Nome do Subtópico</div>
            <div class="d-flex col-4 justify-content-around align-items-center">
              <div class="d-flex flex-column align-items-center justify-content-between">
                <div><span class="f-20"><strong>192</strong></span></div>
                <div class="sb-post"><span class="f-12">posts</span></div>
              </div>
              <div class="">
                PERFIL+POST+DATA
              </div>
            </div>
          </div>
        </a>

      </div>

      
      <div class="divisor"></div>


      <div class="mx-5 px-3">
        //TITTLE
        <div class="tittle py-2 px-5"><span class="font f-30"><strong>Mensagens da academia Vamgark</strong></span></div>

        //POST
        <a href="" class="text-decoration-none">
          <div class="post f-w font d-flex align-items-center justify-content-between px-4">
            <div>Nome do Subtópico</div>
            <div class="d-flex col-4 justify-content-around align-items-center">
              <div class="d-flex flex-column align-items-center justify-content-between">
                <div><span class="f-20"><strong>192</strong></span></div>
                <div class="sb-post"><span class="f-12">posts</span></div>
              </div>
              <div class="">
                PERFIL+POST+DATA
              </div>
            </div>
          </div>
        </a>

        <a href="" class="text-decoration-none">
          <div class="post f-w font d-flex align-items-center justify-content-between px-4">
            <div>Nome do Subtópico</div>
            <div class="d-flex col-4 justify-content-around align-items-center">
              <div class="d-flex flex-column align-items-center justify-content-between">
                <div><span class="f-20"><strong>192</strong></span></div>
                <div class="sb-post"><span class="f-12">posts</span></div>
              </div>
              <div class="">
                PERFIL+POST+DATA
              </div>
            </div>
          </div>
        </a>

      </div>

      
      <div class="divisor"></div>
      -->


    </main>

    <?php include '../includes/footer.php' ?>
    <?php include '../includes/bs-f.php' ?>
</body>
</html>