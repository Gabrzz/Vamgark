<?php
if (isset($_POST) && count($_POST) > 0) {
    // Faz requisição do controlador
    require_once "../../controller/UsuarioController.php";
    // Instancia o objeto
    $usuario = new Usuario();
    // Monta objeto usuário
    $usuario->setNome(htmlspecialchars($_POST['campoNome']));
    $usuario->setEmail(htmlspecialchars($_POST['campoEmail']));
    $usuario->setSenha(md5($_POST['campoSenha']));
    // Instancia o Controlador
    $UsuarioController = new UsuarioController();
    // Executa método ADD
    $rs = $UsuarioController->add($usuario);
    // Redireciona para a INDEX
    if ($rs) {
        header("location: ./");
        exit();
    }
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
                    <h3 class="admin-title">Cadastro de Usuário</h3>
                </div>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" id="idNome" placeholder="Informe o nome" required>
                    </div>

                    <div class="mb-3">
                        <label for="idEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="campoEmail" id="idEmail" placeholder="Informe o email" required>
                    </div>

                    <div class="mb-3">
                        <label for="idSenha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" name="campoSenha" id="idSenha" placeholder="Informe a senha" required>
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
