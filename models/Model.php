<?php

require_once "Conexao.php";
require_once "Categorias.php";

class CategoriaModel
{

    public $tabela = "";

    public function create(Categoria $c){
        try{
            $sql = "INSERT INTO $this->tabela (nome, descricao) VALUES (?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getDescricao());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Categoria');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Categoria');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Categoria $c){
        try{
            $sql = "UPDATE $this->tabela SET nome = ?, descricao = ? WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getDescricao());
            $stmt->bindValue(3, $c->getId());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
