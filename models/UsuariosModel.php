<?php

require_once "Conexao.php";
require_once "Usuarios.php";

class UsuarioModel
{

    public $tabela = "/*tabela*/";

    public function create(Usuario $c){
        try{
            $sql = "INSERT INTO $this->tabela (nome_Usuario, email_Usuario, senha_Usuario) VALUES (?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeUsuario());
            $stmt->bindValue(2, $c->getEmailUsuario());
            $stmt->bindValue(3, $c->getSenhaUsuario());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id_Usuario){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id_Usuario = ?");
        $stmt->bindParam(1,$id_Usuario);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Usuario $c){
        try{
            $sql = "UPDATE $this->tabela SET nome_Usuario=?, email_Usuario=? WHERE id_Usuario = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeUsuario());
            $stmt->bindValue(2, $c->getEmailUsuario());
            $stmt->bindValue(3, $c->getIdUsuario());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    public function updatePassword(Usuario $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set senha_Usuario=? where id_Usuario=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getSenhaUsuario());
            $stmt->bindValue(2, $c->getIdUsuario());
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function login(Usuario $c)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where email_Usuario=? and senha_Usuario=?");
        $stmt->bindValue(1, $c->getEmailUsuario());
        $stmt->bindValue(2, $c->getSenhaUsuario());
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }
    public function delete($id_Usuario){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id_Usuario = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_Usuario);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
