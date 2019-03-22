<?php
require_once "./ISorvete.php";

class SaborMorango implements ISorvete{

    private $objetoDecorado;

    public function __construct(ISorvete $objetoDecorado)
    {
        $this->objetoDecorado = $objetoDecorado;
    }

    public function preco(){
        return $this->objetoDecorado->preco() + 2;
    }
}