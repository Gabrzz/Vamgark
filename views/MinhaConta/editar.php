<?php 
include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';
if (isset($_SESSION['usuario_id'])){
    $UsuarioController = new UsuarioController();
    $usuario = $UsuarioController->findId($_SESSION['usuario_id']);
  } 
  
// Instacia o controlador
$UsuarioController = new UsuarioController();

// Verificações
if (isset($_POST) && count($_POST) > 0) {
    // Gravação dos usuarios
    $c = new Usuario();

    $c->setIdUsuario(htmlspecialchars($_POST['campoId']));
    $c->setNome(htmlspecialchars($_POST['campoNome']));
    $c->setEmail(htmlspecialchars($_POST['campoEmail']));
    $c->setNascimento(htmlspecialchars($_POST['campoNascimento']));
    $c->setHistoria(htmlspecialchars($_POST['campoHistoria']));
    $c->setSenha(htmlspecialchars($_POST['campoSenha']));
    // Executa método EDIT
    $rs = $UsuarioController->edit($c);
    // Redireciona para a INDEX
    if ($rs) {
        header("location: ./");
        exit();
    }
    

} else if(isset($_GET['id']) && !empty($_GET['id'])) {
    $usuario = $UsuarioController->findId($_GET['id']);
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php' ?>
    <?php include '../includes/bs-h.php' ?>
    <link rel="stylesheet" href="style.css">
    <title>Conta</title> <!-- Nome da Página -->
</head>
<body>
    <?php include '../includes/header.php' ?>
    
    <main>
    
    <div class="editar p-3 m-4">

        <div class="m-auto text-center mb-3">
            <span class="f-50 f-w font mt-4">Editar Pefil</span>
        </div>

        <div class="d-flex align-items-center ps-5">
            
            <div class="mx-5">
                <div class="profile-image-edit" onclick="   "> <!-- MECHER AQUI FELIPIN =D-->
                    <img class="profile-image-img" src="../../img/profile-image.png" alt="Profile Image">
                    <div class="profile-edit-icon" ><box-icon size="md" color='#FFFFFF' name='edit' type='solid' ></box-icon></div>
                </div>

                <div class="mt-5 f-w">
                    ECOLHA DE BACKGROUNDS -- DROPDOWN
                </div>
            </div>

            <div class="d-flex flex-column form-edit">
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $usuario->getIdUsuario(); ?>">
                    <input type="hidden" name="campoSenha" value="<?= $usuario->getSenha(); ?>">
                    <div class="mt-2 mb-5">
                        <div>
                            <label for="campoNome"><span class="font f-w f-20 me-2"><strong>Nome</strong></span></label>
                            <input id="nome" class="input" type="text" name="campoNome" value="<?php echo $usuario->getNome();?>">
                        </div>
                        <div class="text-center"><span class="f-w font f-12">Este é apenas o nome de exibição da conta.</span></div>
                    </div>

                    <div class="mb-5">
                        <div>
                            <label for="campoEmail"><span class="font f-w f-20 me-2"><strong>Email</strong></span></label>
                            <input id="email" class="input" type="email"  name="campoEmail" disabled value="<?php echo $usuario->getEmail();?>">
                        </div>
                    </div>


                    <div class="mb-5">
                        <div>
                            <label for="campoNascimento"><span class="font f-w f-20 me-2"><strong>Nascimento</strong></span></label>
                            <input id="nascimento" class="input" type="date" name="campoNascimento" value="<?php echo $usuario->getNascimento();?>">
                        </div>
                    </div>


                    <div class="mb-5">
                        <div class="font f-w f-20"><span><strong>Minha História</strong></span></div>
                        <div><textarea class="text-area" name="campoHistoria" id="historia"><?php echo $usuario->getHistoria();?></textarea></div>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>

                </form>
            </div>
            
        </div>
    </div>
    



    </main>
    

    <?php include '../includes/bs-f.php' ?>
    <?php include '../includes/footer.php' ?>
</body>
</html>