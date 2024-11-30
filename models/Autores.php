<?php

class Autor
{
    private int $id_Autor;
    private string $nome_Autor;
    private string $email_Autor;
    private string $senha_Autor;
    private string $telefone_Autor;
    //private string $data_Criacao;
    private int $n_Publicacoes;
    private int $classificacao;

    /**
     * Get the value of id_Autor
     */
    public function getIdAutor(): int
    {
        return $this->id_Autor;
    }

    /**
     * Set the value of id_Autor
     */
    public function setIdAutor(int $id_Autor): self
    {
        $this->id_Autor = $id_Autor;

        return $this;
    }

    /**
     * Get the value of nome_Autor
     */
    public function getNomeAutor(): string
    {
        return $this->nome_Autor;
    }

    /**
     * Set the value of nome_Autor
     */
    public function setNomeAutor(string $nome_Autor): self
    {
        $this->nome_Autor = $nome_Autor;

        return $this;
    }

    /**
     * Get the value of email_Autor
     */
    public function getEmailAutor(): string
    {
        return $this->email_Autor;
    }

    /**
     * Set the value of email_Autor
     */
    public function setEmailAutor(string $email_Autor): self
    {
        $this->email_Autor = $email_Autor;

        return $this;
    }

    /**
     * Get the value of senha_Autor
     */
    public function getSenhaAutor(): string
    {
        return $this->senha_Autor;
    }

    /**
     * Set the value of senha_Autor
     */
    public function setSenhaAutor(string $senha_Autor): self
    {
        $this->senha_Autor = $senha_Autor;

        return $this;
    }

    /**
     * Get the value of telefone_Autor
     */
    public function getTelefoneAutor(): string
    {
        return $this->telefone_Autor;
    }

    /**
     * Set the value of telefone_Autor
     */
    public function setTelefoneAutor(string $telefone_Autor): self
    {
        $this->telefone_Autor = $telefone_Autor;

        return $this;
    }

    /**
     * Get the value of data_Criacao
     */
    //public function getDataCriacao(): string
    //{
    //    return $this->data_Criacao;
    //}

    /**
     * Set the value of data_Criacao
     */
    //public function setDataCriacao(string $data_Criacao): self
    //{
    //    $this->data_Criacao = $data_Criacao;

    //    return $this;
    //}

    /**
     * Get the value of n_Publicacoes
     */
    public function getNPublicacoes(): int
    {
        return $this->n_Publicacoes;
    }

    /**
     * Set the value of n_Publicacoes
     */
    public function setNPublicacoes(int $n_Publicacoes): self
    {
        $this->n_Publicacoes = $n_Publicacoes;

        return $this;
    }

    /**
     * Get the value of classificacao
     */
    public function getClassificacao(): int
    {
        return $this->classificacao;
    }

    /**
     * Set the value of classificacao
     */
    public function setClassificacao(int $classificacao): self
    {
        $this->classificacao = $classificacao;

        return $this;
    }
}