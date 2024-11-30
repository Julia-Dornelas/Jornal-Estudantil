<?php

class Noticia
{
    private int $id_Noticia;
    private string $conteudo;
    private int $data_Publicacao;
    private string $fonte;
    private string $resumo;
    private string $titulo;
    private int $secao;
    private string $imagem_URL;

    /**
     * Get the value of id_Noticia
     */
    public function getIdNoticia(): int
    {
        return $this->id_Noticia;
    }

    /**
     * Set the value of id_Noticia
     */
    public function setIdNoticia(int $id_Noticia): self
    {
        $this->id_Noticia = $id_Noticia;

        return $this;
    }

    /**
     * Get the value of conteudo
     */
    public function getConteudo(): string
    {
        return $this->conteudo;
    }

    /**
     * Set the value of conteudo
     */
    public function setConteudo(string $conteudo): self
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * Get the value of data_Publicacao
     */
    public function getDataPublicacao(): int
    {
        return $this->data_Publicacao;
    }

    /**
     * Set the value of data_Publicacao
     */
    public function setDataPublicacao(int $data_Publicacao): self
    {
        $this->data_Publicacao = $data_Publicacao;

        return $this;
    }

    /**
     * Get the value of fonte
     */
    public function getFonte(): string
    {
        return $this->fonte;
    }

    /**
     * Set the value of fonte
     */
    public function setFonte(string $fonte): self
    {
        $this->fonte = $fonte;

        return $this;
    }

    /**
     * Get the value of resumo
     */
    public function getResumo(): string
    {
        return $this->resumo;
    }

    /**
     * Set the value of resumo
     */
    public function setResumo(string $resumo): self
    {
        $this->resumo = $resumo;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of secao
     */
    public function getSecao(): int
    {
        return $this->secao;
    }

    /**
     * Set the value of secao
     */
    public function setSecao(int $secao): self
    {
        $this->secao = $secao;

        return $this;
    }

    /**
     * Get the value of imagem_URL
     */
    public function getImagemURL(): string
    {
        return $this->imagem_URL;
    }

    /**
     * Set the value of imagem_URL
     */
    public function setImagemURL(string $imagem_URL): self
    {
        $this->imagem_URL = $imagem_URL;

        return $this;
    }
}