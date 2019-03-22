<?php

require_once "./Clima.php";
require_once "./PrintarNaTela.php";

$meuClima = new Clima(10);
$clientePrintador = new PrintarNaTela($meuClima);
$clientePrintador2 = new PrintarNaTela($meuClima);

$meuClima->atualizarTemp(20);
$meuClima->atualizarTemp(30);
$meuClima->atualizarTemp(50);
$meuClima->atualizarTemp(36.7);