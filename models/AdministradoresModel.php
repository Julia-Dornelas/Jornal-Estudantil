<?php

require_once "Conexao.php";
require_once "Administradores.php";

class AdministradoresModel
{

    public $tabela = "administrador";

    public function create($c){
        try{
            $sql = "INSERT INTO $this->tabela (nome_Administrador, email_Administrador, senha, salario, telefone, carga_horaria, dt_criacao, n_Aprovacoes) VALUES (?,?,?,?,?,?,?,0)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeAdministrador());
            $stmt->bindValue(2, $c->getEmailAdministrador());
            $stmt->bindValue(3, $c->getSenhaAdministrador());
            $stmt->bindValue(4, $c->getSalario());
            $stmt->bindValue(5, $c->getTelefoneAdministrador());
            $stmt->bindValue(6, $c->getCargaHoraria());
            $stmt->bindValue(7, $c->getDataCriacao());
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
    public function updatePassword(Administrador $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set senha_Administrador=? where id_Administrador=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getSenhaAdministrador());
            $stmt->bindValue(2, $c->getIdAdministrador());
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function login(Administrador $c)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where email_Administrador=? and senha_Administrador=?");
        $stmt->bindValue(1, $c->getEmailAdministrador());
        $stmt->bindValue(2, $c->getSenhaAdministrador());
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Administrador');
        $stmt->execute();
        return $stmt->fetch();
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
