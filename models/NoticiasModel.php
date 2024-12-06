<?php

require_once "Conexao.php";
require_once "Noticias.php";

class NoticiaModel
{

    public $tabela = "noticia";

    public function create(Noticia $c){
        try{
            $sql = "INSERT INTO $this->tabela (conteudo, data_Publicacao, fonte, resumo, titulo, secao, imagem_Url) VALUES (?,?,?,?,?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getConteudo());
            $stmt->bindValue(2, $c->getDataPublicacao());
            $stmt->bindValue(3, $c->getFonte());
            $stmt->bindValue(4, $c->getResumo());
            $stmt->bindValue(5, $c->getTitulo());
            $stmt->bindValue(6, $c->getSecao());
            $stmt->bindValue(7, $c->getImagemURL());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Noticia');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id_Noticia){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id_Noticia = ?");
        $stmt->bindParam(1,$id_Noticia);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Noticia');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Noticia $c){
        try{
            $sql = "UPDATE $this->tabela SET conteudo=?, data_Publicacao=?, fonte=?, resumo=?, titulo=?, secao=?, imagem_Url=? WHERE id_Noticia = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getConteudo());
            $stmt->bindValue(2, $c->getDataPublicacao());
            $stmt->bindValue(3, $c->getFonte());
            $stmt->bindValue(4, $c->getResumo());
            $stmt->bindValue(5, $c->getTitulo());
            $stmt->bindValue(6, $c->getSecao());
            $stmt->bindValue(7, $c->getImagemURL());
            $stmt->bindValue(8, $c->getIdNoticia());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id_Noticia){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id_Noticia = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_Noticia);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
