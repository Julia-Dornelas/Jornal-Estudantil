<?php

require_once "Conexao.php";
require_once "Administradores.php";

class CategoriaModel
{

    public $tabela = "/*tabela*/";

    public function create(Administrador $c){
        try{
            $sql = "INSERT INTO $this->tabela (nome_Administrador, email_Administrador, senha_Administrador, telefone_Administrador, n_Aprovacoes, salario, carga_horaria) VALUES (?,?,?,?,0,?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeAdministrador());
            $stmt->bindValue(2, $c->getEmailAdministrador());
            $stmt->bindValue(3, $c->getSenhaAdministrador());
            $stmt->bindValue(4, $c->getTelefoneAdministrador());
            $stmt->bindValue(6, $c->getSalario());
            $stmt->bindValue(7, $c->getCargaHoraria());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Administrador');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id_Administrador){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id_Administrador = ?");
        $stmt->bindParam(1,$id_Administrador);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Administrador');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Administrador $c){
        try{
            $sql = "UPDATE $this->tabela SET nome_Administrador=?, email_Administrador=?, telefone_Administrador=?, salario=?, carga_Horaria=? WHERE id_Administrador = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeAdministrador());
            $stmt->bindValue(2, $c->getEmailAdministrador());
            $stmt->bindValue(3, $c->getTelefoneAdministrador());
            $stmt->bindValue(4, $c->getSalario());
            $stmt->bindValue(5, $c->getCargaHoraria());
            $stmt->bindValue(6, $c->getIdAdministrador());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id_Administrador){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id_Administrador = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_Administrador);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}