<?php

require_once "Conexao.php";
require_once "Autores.php";

class AutoresModel
{

    public $tabela = "autor";

    public function create(Autor $c){
        try{
            $sql = "INSERT INTO $this->tabela (nome_Autor, email_Autor, senha_Autor, telefone_Autor, n_Publicacoes, classificacao) VALUES (?,?,?,?,0,0)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeAutor());
            $stmt->bindValue(2, $c->getEmailAutor());
            $stmt->bindValue(3, $c->getSenhaAutor());
            $stmt->bindValue(4, $c->getTelefoneAutor());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Autor');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id_Autor){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id_Autor = ?");
        $stmt->bindParam(1,$id_Autor);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Autor');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Autor $c){
        try{
            $sql = "UPDATE $this->tabela SET nome_Autor=?, email_Autor=?, telefone_Autor=?, salario=?, carga_Horaria=? WHERE id_Autor = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeAutor());
            $stmt->bindValue(2, $c->getEmailAutor());
            $stmt->bindValue(3, $c->getTelefoneAutor());
            $stmt->bindValue(6, $c->getIdAutor());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function updatePassword(Autor $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set senha_Autor=? where id_Autor=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getSenhaAutor());
            $stmt->bindValue(2, $c->getIdAutor());
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function login(Autor $c)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where email_Autor=? and senha_Autor=?");
        $stmt->bindValue(1, $c->getEmailAutor());
        $stmt->bindValue(2, $c->getSenhaAutor());
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Autor');
        $stmt->execute();
        return $stmt->fetch();
    }
    public function delete($id_Autor){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id_Autor = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_Autor);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
