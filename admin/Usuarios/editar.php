<?php
// Requisita controlador
require_once "../../controller/UsuarioController.php";
// Instancia o controlador
$UsuarioController = new UsuarioController();

// Verificações
if (isset($_POST) && count($_POST) > 0) {
    // Gravação dos dados
    $usuario = new Usuario();

    $usuario->setIdUsuario(htmlspecialchars($_POST['campoId']));
    $usuario->setNome(htmlspecialchars($_POST['campoNome']));
    $usuario->setEmail(htmlspecialchars($_POST['campoEmail']));
    // Não há telefone aqui, então não será gravado
    // Executa método EDIT
    $rs = $UsuarioController->edit($usuario);
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
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../../views/includes/head.php"; ?>
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="admin-container">
        <div class="admin-menu">
            <?php include "../includes/menu.php"; ?>
        </div>
        <div class="admin-content-wrapper">
            <div class="admin-content">
                <div class="botoes-topo">
                    <h3 class="admin-title">Editar Usuário</h3>
                </div>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= htmlspecialchars($usuario->getIdUsuario()); ?>">

                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" 
                               id="idNome" placeholder="Informe o nome" 
                               value="<?= htmlspecialchars($usuario->getNome()); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="idEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="campoEmail" 
                               id="idEmail" placeholder="Informe o email" 
                               value="<?= htmlspecialchars($usuario->getEmail()); ?>" required>
                    </div>

                    <div class="botoes-topo">
                        <button type="submit" class="btn btn-adicionar">Gravar</button>
                        <a href="./" class="btn btn-editar">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
