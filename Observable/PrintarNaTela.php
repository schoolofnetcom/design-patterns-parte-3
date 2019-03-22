<?php

require_once "./Observer.php";
require_once "./Clima.php";

class PrintarNaTela implements Observer{
    
    private $climaObservable;

    public function __construct(Clima $climaObservable)
    {
        $this->climaObservable = $climaObservable;
        $this->climaObservable->addObservers($this);
    }
    
    public function update(){
        echo "Temperatura atual: ".$this->climaObservable->getTemperatura()."<br>";
    }
}