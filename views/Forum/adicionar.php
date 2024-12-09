<?php 
include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';

if (isset($_SESSION['usuario_id'])){
  $UsuarioController = new UsuarioController();
  $usuario = $UsuarioController->findId($_SESSION['usuario_id']);
} 



if(isset($_POST) && count($_POST)){
  require_once "../../controller/ForumController.php";
  
  $f = new Forum();
  $f->setTitulo(htmlspecialchars($_POST['campoTitulo']));
  $f->setTexto(htmlspecialchars($_POST['campoTexto']));
  $f->setTags(htmlspecialchars($_POST['campoTags']));
  $f->setData(htmlspecialchars($_POST['campoData']));
  $f->setIdTopico(htmlspecialchars($_POST['campoIdTopico']));
  $f->setIdUsuario(htmlspecialchars($_POST['campoIdUsuario']));

  $ForumController = new ForumController();
  $res = $ForumController->add($f);

  if($res){
      header("location: ./");
      exit();
  }
}


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
    
    <div class="m-auto center-text d-flex justify-content-center my-5"> 
      <button class="botao btn btn-outline-light rounded-5"><span class=" font f-w f-24">Regras do Fórum</span></button>
    </div>

    <main>

      <div class="mx-5 px-3">
        <!--TITTLE-->
        <div class="tittle d-flex justify-content-between align-items-center">
          <div class=" py-2 px-5"><span class="font f-30"><strong>Publicar minha mensagem</strong></span></div>
          <div class="me-4 mt-2"><a href="./"><box-icon size="lg" name='x'></box-icon></a></div>  
        </div>

        <!--CONTENT-->
        <div class="post-add font f-w f-20">

            <form action="" method="post">
                <div class="mb-2">
                    <label for="idTitulo"><span>Titulo</span></label>
                    <input class="input-post" type="text" id="idTitulo" name="campoTitulo">
                </div>
                <div class="my-2">
                    <label for="idTags"><span>Tags</span></label>
                    <input class="input-post" type="text" id="idTags" name="campoTags">
                </div>
                <div class="my-2">
                    <label for="idTexto"><span>Post</span></label>
                    <textarea class="text-post" name="campoTexto" id="idTexto" ></textarea>
                </div>

                

                <!--SUBMIT-->
                <div class="d-flex justify-content-between align-items-center px-4 mt-4 mb-2">
                  <div>
                    <span class="font f-w f-15">
                      <?php 
                        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                        date_default_timezone_set('America/Sao_Paulo');
                        echo strftime('%d de %B de %Y', strtotime('today'));
                      ?>
                    </span>
                  </div>

                  <div>
                    <button class="rounded-5 btn btn-light px-5 py-2" type="submit"><span class="font f-25 mx-5 px-5">Publicar</span></button> 
                  </div>
                </div>
                <input type="hidden" name="campoData" value="<?php echo date('Y-m-d H:i:s'); ?>">
                <input type="hidden" name="campoIdUsuario" value="<?php echo $usuario->getIdUsuario(); ?>">


            </form>

        </div>

      </div>

      
      <div class="divisor"></div>

    </main>

    <?php include '../includes/footer.php' ?>
    <?php include '../includes/bs-f.php' ?>
</body>
</html>