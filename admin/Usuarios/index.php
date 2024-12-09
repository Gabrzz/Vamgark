<?php 
require_once "../../controller/UsuarioController.php";
$UsuarioController = new UsuarioController();
$usuarios = $UsuarioController->read();
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
          <h3 class="admin-title">Usuários</h3>
          <a href="adicionar.php" class="btn btn-adicionar">Adicionar</a>
        </div>
        <table class="tabela-usuarios">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($usuarios as $usuario): ?>
              <tr>
                <td><?= htmlspecialchars($usuario->getIdUsuario()); ?></td>
                <td><?= htmlspecialchars($usuario->getNome()); ?></td>
                <td><?= htmlspecialchars($usuario->getEmail()); ?></td>
                <td>
                  <div class="botoes-acao">
                    <a href="editar.php?id=<?= $usuario->getIdUsuario(); ?>" class="btn btn-editar">Editar</a>
                    <a href="javascript:excluir(<?= $usuario->getIdUsuario(); ?>);" class="btn btn-excluir">Excluir</a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    function excluir(id_usuario) {
      if (confirm("Tem certeza que deseja excluir este usuário?")) {
        window.location = "excluir.php?id_usuario=" + id_usuario;
      }
    }
  </script>
</body>
</html>
