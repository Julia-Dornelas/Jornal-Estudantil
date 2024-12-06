<?php
require_once "Data.php";
class Comentario
{
    private int $id_Comentario;
    private string $conteudo;
    private Data $data_Publicacao;

    /**
     * Get the value of id_Comentario
     */
    public function getIdComentario(): int
    {
        return $this->id_Comentario;
    }

    /**
     * Set the value of id_Comentario
     */
    public function setIdComentario(int $id_Comentario): self
    {
        $this->id_Comentario = $id_Comentario;

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
    public function getDataPublicacao()
    {
        return $this->data_Publicacao;
    }
    /**
     * Set the value of data_Publicacao
     */
    public function setDataPublicacao()
    {
        $this->data_Publicacao = new Data(date('d'), date('m'), date('Y'));
    }
}