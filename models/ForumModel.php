<?php

use PSpell\Config;

require_once "Conexao.php";
require_once "Forum.php";

class ForumModel
{

    private $tabela = "forum";

    public function create(Forum $f)
    {
        try{
            $sql = "insert into $this->tabela (titulo, texto, tags, data, id_topico, id_usuario) values (?,?,?,?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $f->getTitulo());
            $stmt->bindValue(2, $f->getTexto());
            $stmt->bindValue(3, $f->getTags());
            $stmt->bindValue(4, $f->getData());
            $stmt->bindValue(5, $f->getIdTopico());
            $stmt->bindValue(6, $f->getIdUsuario());
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Forum');
        $stmt->execute();
        return $stmt->fetchAll();
    }
 
    public function findId($id_forum)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id_forum=?");
        $stmt->bindValue(1, $id_forum);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Forum');
        $stmt->execute();
        return $stmt->fetch();
    }
    

    public function update(Forum $f)
    {
        try{
            $sql = "update $this->tabela set titulo=?, texto=?, tags=?, data=?, id_topico=?, id_usuario=? where id_forum=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $f->getTitulo());
            $stmt->bindValue(2, $f->getTexto());
            $stmt->bindValue(3, $f->getTags());
            $stmt->bindValue(4, $f->getData());
            $stmt->bindValue(5, $f->getIdTopico());
            $stmt->bindValue(6, $f->getIdUsuario());
            $stmt->bindValue(7, $f->getIdForum());
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }
    }
    public function delete($id_forum)
    {
        try{
            $sql = "delete from $this->tabela where id_forum=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_forum);
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }   
    }
}
