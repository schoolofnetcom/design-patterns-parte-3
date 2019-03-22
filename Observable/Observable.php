<?php

require_once "./Observer.php";

abstract class Observable{
    private $observers = [];

    public function addObservers(Observer $observer){
        array_push($this->observers,$observer);
    }

    public function notifyObservers(){
        foreach($this->observers as $observer ){
            $observer->update();
        }
    }
}