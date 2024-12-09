<?php

if(isset($_GET['id_usuario']) && !empty($_GET['id_usuario'])) {
    // Requisito o controlador
    require_once '../../controller/UsuarioController.php';
    // instancia classe
    $UsuarioController = new UsuarioController();
    // Remove dados
    $rs = $UsuarioController->remove($_GET['id_usuario']);

    if($rs) {
        header("location: ./");
        exit();
    }

}