<?php
class Data
{
    private int $dia;
    private int $mes;
    private int $ano;

    //CONSTRUCT IMPRIMIRDATABANCO TOSTRING
    public function __construct($dia, $mes, $ano)
    {
        $this->setDia($dia);
        $this->setMes($mes);
        $this->setAno($ano);
    }
    public function __toString()
    {
        return $data = $this->getDia() . "/" . $this->getMes() . "/" . $this->getAno();
    }
    public function imprimirDataBanco()
    {
        return $data = $this->getAno() . "-" . $this->getMes() . "-" . $this->getDia();
    }
    //GETS SETS
    public function getDia()
    {
        return $this->dia;
    }
    public function setDia($dia)
    {
        $this->dia = $dia;
    }
    public function getMes()
    {
        return $this->mes;
    }
    public function setMes($mes)
    {
        $this->mes = $mes;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
}