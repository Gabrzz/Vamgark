<?php

use PSpell\Config;

require_once "Conexao.php";
require_once "Usuario.php";

class UsuarioModel
{

    private $tabela = "usuario";

    public function create(Usuario $c)
    {
        try {
            $sql = "insert into $this->tabela (nome, email, senha, pontos, casa_id, historia, nascimento) values (?,?,?,?,?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getEmail());
            $stmt->bindValue(3, $c->getSenha());
            $stmt->bindValue(4, $c->getPontos());
            $stmt->bindValue(5, $c->getCasaId());
            $stmt->bindValue(6, $c->getHistoria());
            $stmt->bindValue(7, $c->getNascimento());
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int) $e->getCode();
        }
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id_usuario)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id_usuario=?");
        $stmt->bindValue(1, $id_usuario);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }




    public function update(Usuario $c)
    {
        try {
            $sql = "update $this->tabela set nome=?, email=?, senha=?, pontos=?, casa_id=?, historia=?, nascimento=? where id_usuario=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getEmail());
            $stmt->bindValue(3, $c->getSenha());
            $stmt->bindValue(4, $c->getPontos());
            $stmt->bindValue(5, $c->getCasaId());
            $stmt->bindValue(6, $c->getHistoria());
            $stmt->bindValue(7, $c->getNascimento());
            $stmt->bindValue(8, $c->getIdUsuario());
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int) $e->getCode();
        }
    }
    public function delete($id_usuario)
    {
        try {
            $sql = "delete from $this->tabela where id_usuario=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_usuario);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int) $e->getCode();
        }
    }
    public function findName($id_usuario)
    {
        $stmt = Conexao::getConn()->prepare("SELECT nome FROM $this->tabela WHERE id_usuario = ?");
        $stmt->bindValue(1, $id_usuario);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function updatePassword(Usuario $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set senha=? where id=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getSenha());
            $stmt->bindValue(2, $c->getIdUsuario());
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int) $e->getCode();
        }
    }

    public function login(Usuario $c)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where email=? and senha=?");
        $stmt->bindValue(1, $c->getEmail());
        $stmt->bindValue(2, $c->getSenha());
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }
}
