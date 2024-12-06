<?php

require_once "Conexao.php";
require_once "Comentarios.php";

class ComentariosModel
{

    public $tabela = "comentario";

    public function create(Comentario $c){
        try{
            $sql = "INSERT INTO $this->tabela (conteudo, data_Publicacao) VALUES (?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getConteudo());
            $stmt->bindValue(2, $c->getDataPublicacao());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Comentario');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id_Comentario){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id_Comentario = ?");
        $stmt->bindParam(1,$id_Comentario);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Comentario');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Comentario $c){
        try{
            $sql = "UPDATE $this->tabela SET conteudo=?, data_Publicacao=? WHERE id_Comentario = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getConteudo());
            $stmt->bindValue(2, $c->getDataPublicacao());
            $stmt->bindValue(3, $c->getIdComentario());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id_Comentario){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id_Comentario = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_Comentario);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
