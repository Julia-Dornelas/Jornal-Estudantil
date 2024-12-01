<?php

require_once "Conexao.php";
require_once "Categorias.php";

class CategoriaModel
{

    public $tabela = "/*tabela*/";

    public function create(Categoria $c){
        try{
            $sql = "INSERT INTO $this->tabela (nome_Categoria, descricao_Categoria) VALUES (?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeCategoria());
            $stmt->bindValue(2, $c->getDescricaoCategoria());
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

    public function findId($id_Categoria){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id_Categoria = ?");
        $stmt->bindParam(1,$id_Categoria);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Categoria');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Categoria $c){
        try{
            $sql = "UPDATE $this->tabela SET nome_Categoria=?, descricao_Categoria=? WHERE id_Categoria = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeCategoria());
            $stmt->bindValue(2, $c->getDescricaoCategoria());
            $stmt->bindValue(3, $c->getIdCategoria());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id_Categoria){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id_Categoria = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_Categoria);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
