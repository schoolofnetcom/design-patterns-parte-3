<?php

require_once "./Observable.php";

class Clima extends Observable{
    private $temperatura;

    public function __construct($temperatura)
    {
        $this->temperatura = $temperatura;
    }

    public function atualizarTemp($temperatura){
        $this->temperatura = $temperatura;
        $this->notifyObservers();
    }

    public function getTemperatura(){
        return $this->temperatura;
    }
}