<?php

class Categoria
{
    private int $id_Categoria;
    private string $nome_Categoria;
    private string $descricao_Categoria;

    /**
     * Get the value of id_Categoria
     */
    public function getIdCategoria(): int
    {
        return $this->id_Categoria;
    }

    /**
     * Set the value of id_Categoria
     */
    public function setIdCategoria(int $id_Categoria): self
    {
        $this->id_Categoria = $id_Categoria;

        return $this;
    }

    /**
     * Get the value of nome_Categoria
     */
    public function getNomeCategoria(): string
    {
        return $this->nome_Categoria;
    }

    /**
     * Set the value of nome_Categoria
     */
    public function setNomeCategoria(string $nome_Categoria): self
    {
        $this->nome_Categoria = $nome_Categoria;

        return $this;
    }

    /**
     * Get the value of descricao_Categoria
     */
    public function getDescricaoCategoria(): string
    {
        return $this->descricao_Categoria;
    }

    /**
     * Set the value of descricao_Categoria
     */
    public function setDescricaoCategoria(string $descricao_Categoria): self
    {
        $this->descricao_Categoria = $descricao_Categoria;

        return $this;
    }
}