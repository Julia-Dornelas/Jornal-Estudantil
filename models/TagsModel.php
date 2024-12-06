<?php

require_once "Conexao.php";
require_once "Tags.php";

class TagsModel
{

    public $tabela = "tag";

    public function create(Tag $c){
        try{
            $sql = "INSERT INTO $this->tabela (nome_Tag, descricao_Tag) VALUES (?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeTag());
            $stmt->bindValue(2, $c->getDescricaoTag());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Tag');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id_Tag){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id_Tag = ?");
        $stmt->bindParam(1,$id_Tag);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Tag');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Tag $c){
        try{
            $sql = "UPDATE $this->tabela SET nome_Tag=?, descricao_Tag=? WHERE id_Tag = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeTag());
            $stmt->bindValue(2, $c->getDescricaoTag());
            $stmt->bindValue(3, $c->getIdTag());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id_Tag){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id_Tag = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_Tag);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
