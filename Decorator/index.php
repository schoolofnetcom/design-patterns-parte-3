<?php

require_once "./Sorvete.php";
require_once "./SaborMorango.php";
require_once "./Granulado.php";

/*
$sorvete = new Sorvete();
$morango = new SaborMorango($sorvete);
$granulado = new Granulado($morango);
*/

/*
$sorvete = new SaborMorango(new Granulado(new Sorvete()));
*/

$sorvete = new Sorvete();
$sorvete = new SaborMorango($sorvete);
$sorvete = new Granulado($sorvete);


echo $sorvete->preco()."<br>";