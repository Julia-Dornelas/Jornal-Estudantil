<?php

class Administrador
{
    private int $id_Administrador;
    private string $nome_Administrador;
    private string $email_Administrador;
    private string $senha_Administrador;
    private string $telefone_Administrador;
    //private string $data_Criacao;
    private int $n_Aprovacoes;
    private float $salario;
    private float $carga_Horaria;


    /**
     * Get the value of id_Administrador
     */
    public function getIdAdministrador(): int
    {
        return $this->id_Administrador;
    }

    /**
     * Set the value of id_Administrador
     */
    public function setIdAdministrador(int $id_Administrador): self
    {
        $this->id_Administrador = $id_Administrador;

        return $this;
    }

    /**
     * Get the value of nome_Administrador
     */
    public function getNomeAdministrador(): string
    {
        return $this->nome_Administrador;
    }

    /**
     * Set the value of nome_Administrador
     */
    public function setNomeAdministrador(string $nome_Administrador): self
    {
        $this->nome_Administrador = $nome_Administrador;

        return $this;
    }

    /**
     * Get the value of email_Administrador
     */
    public function getEmailAdministrador(): string
    {
        return $this->email_Administrador;
    }

    /**
     * Set the value of email_Administrador
     */
    public function setEmailAdministrador(string $email_Administrador): self
    {
        $this->email_Administrador = $email_Administrador;

        return $this;
    }

    /**
     * Get the value of senha_Administrador
     */
    public function getSenhaAdministrador(): string
    {
        return $this->senha_Administrador;
    }

    /**
     * Set the value of senha_Administrador
     */
    public function setSenhaAdministrador(string $senha_Administrador): self
    {
        $this->senha_Administrador = $senha_Administrador;

        return $this;
    }

    /**
     * Get the value of telefone_Administrador
     */
    public function getTelefoneAdministrador(): string
    {
        return $this->telefone_Administrador;
    }

    /**
     * Set the value of telefone_Administrador
     */
    public function setTelefoneAdministrador(string $telefone_Administrador): self
    {
        $this->telefone_Administrador = $telefone_Administrador;

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
    //   $this->data_Criacao = $data_Criacao;

    //    return $this;
    //}

    /**
     * Get the value of n_Aprovacoes
     */
    public function getNAprovacoes(): int
    {
        return $this->n_Aprovacoes;
    }

    /**
     * Set the value of n_Aprovacoes
     */
    public function setNAprovacoes(int $n_Aprovacoes): self
    {
        $this->n_Aprovacoes = $n_Aprovacoes;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario(): int
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(int $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of carga_Horaria
     */
    public function getCargaHoraria(): int
    {
        return $this->carga_Horaria;
    }

    /**
     * Set the value of carga_Horaria
     */
    public function setCargaHoraria(int $carga_Horaria): self
    {
        $this->carga_Horaria = $carga_Horaria;

        return $this;
    }
}