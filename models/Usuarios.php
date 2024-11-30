<?php

class Usuario
{
    private int $id_Usuario;
    private string $nome_Usuario;
    private string $email_Usuario;
    private string $senha_Usuario;
    //private string $data_Criacao;
    /**
     * Get the value of id_Usuario
     */
    public function getIdUsuario(): int
    {
        return $this->id_Usuario;
    }

    /**
     * Set the value of id_Usuario
     */
    public function setIdUsuario(int $id_Usuario): self
    {
        $this->id_Usuario = $id_Usuario;

        return $this;
    }

    /**
     * Get the value of nome_Usuario
     */
    public function getNomeUsuario(): string
    {
        return $this->nome_Usuario;
    }

    /**
     * Set the value of nome_Usuario
     */
    public function setNomeUsuario(string $nome_Usuario): self
    {
        $this->nome_Usuario = $nome_Usuario;

        return $this;
    }

    /**
     * Get the value of email_Usuario
     */
    public function getEmailUsuario(): string
    {
        return $this->email_Usuario;
    }

    /**
     * Set the value of email_Usuario
     */
    public function setEmailUsuario(string $email_Usuario): self
    {
        $this->email_Usuario = $email_Usuario;

        return $this;
    }

    /**
     * Get the value of senha_Usuario
     */
    public function getSenhaUsuario(): string
    {
        return $this->senha_Usuario;
    }

    /**
     * Set the value of senha_Usuario
     */
    public function setSenhaUsuario(string $senha_Usuario): self
    {
        $this->senha_Usuario = $senha_Usuario;

        return $this;
    }
    /**
     * Get the value of data_Criacao
     */
    //public function getDataCriacao(): string
    //{
        //return $this->data_Criacao;
    //}

    /**
     * Set the value of data_Criacao
     */
    //public function setDataCriacao(string $data_Criacao): self
    //{
    //    $this->data_Criacao = $data_Criacao;

    //    return $this;
    //}
}