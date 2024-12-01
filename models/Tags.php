<?php

class Tag
{
    private int $id_Tag;
    private string $nome_Tag;
    private string $descricao_Tag;

    /**
     * Get the value of id_Tag
     */
    public function getIdTag(): int
    {
        return $this->id_Tag;
    }

    /**
     * Set the value of id_Tag
     */
    public function setIdTag(int $id_Tag): self
    {
        $this->id_Tag = $id_Tag;

        return $this;
    }

    /**
     * Get the value of name_Tag
     */
    public function getNomeTag(): string
    {
        return $this->nome_Tag;
    }

    /**
     * Set the value of name_Tag
     */
    public function setNomeTag(string $nome_Tag): self
    {
        $this->nome_Tag = $nome_Tag;

        return $this;
    }

    /**
     * Get the value of descricao_Tag
     */
    public function getDescricaoTag(): string
    {
        return $this->descricao_Tag;
    }

    /**
     * Set the value of descricao_Tag
     */
    public function setDescricaoTag(string $descricao_Tag): self
    {
        $this->descricao_Tag = $descricao_Tag;

        return $this;
    }
}