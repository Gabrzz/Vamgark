
<?php
class Conexao {

    private static $instance;

    public static function getConn() {
        if(!isset(self::$instance)) {
            self::$instance = new \PDO("mysql:host=localhost;dbname=vamgarkacademy", 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

}

//VARIAVEL CONEXÃO CRIADA PARA ADPATAR ALGUMAS PÁGINAS JÁ EXISTENTES 
// A REMOVER NO FUTURO E CONSERTAR AS PÁGINAS COM A CONSULTA ERRONEA

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "vamgarkacademy";

$conexao = new mysqli($servidor, $usuario, $senha, $banco_de_dados);